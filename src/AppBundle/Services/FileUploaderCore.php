<?php
/**
 * Created by PhpStorm.
 * User: odusanya
 * Date: 5/12/17
 * Time: 9:40 AM
 */

namespace AppBundle\Services;

use AppBundle\Entity\Ps0oHook;
use AppBundle\Entity\Ps0oImage;
use AppBundle\Entity\Ps0oProduct;
use Symfony\Component\HttpFoundation\Request;

class FileUploaderCore
{
    protected $allowedExtensions = [];
    /**
     * @var QqUploadedFileXhr|QqUploadedeFileForm|false
     */
    protected $file;
    protected $sizeLimit;


    public function __construct(array $allowedExtensions = [], $sizeLimit = 10485760)
    {
        $allowedExtensions = array_map('strtolower', $allowedExtensions);
        $this->allowedExtensions = $allowedExtensions;
        $this->sizeLimit = $sizeLimit;
        $request = Request::createFromGlobals();
        $fileget = $request->request->get('qqfile');
        $filecheck = $request->files->get('qqfile');
        if (isset($fileget))
        {
            $this->file = new QqUploadedFileXhr();
        }
        elseif (isset($filecheck))
        {
            $this->file = new QqUploadedFileForm();
        }
        else
            {
                $this->file = false;
            }
    }

    protected function toBytes($str)
    {
        $val = trim($str);
        $last = strtolower($str[strlen($str) -1]);
        switch ($last)
        {
            case 'g':$val *= 1024;
            case 'm':$val *= 1024;
            case 'k':$val *= 1024;
        }
        return $val;
    }

    public function handleUpload()
    {
        if (!$this->file)
        {
            return array('error' => 'No files were uploaded');
        }
        $size = $this->getSize();
        if ($size == 0)
        {
            return array('error' => 'File is Empty');
        }
        if ($size > $this->sizeLimit)
        {
            return array('error' => 'File is too large');
        }
        $pathinfo = pathinfo($this->file->getName());
        $these = implode(',',$this->allowedExtensions);
        if (!isset($pathinfo['extension']))
        {
            return array('error' => 'File has an invalid extension ,it should be one of these'.$these);
        }
        $ext = $pathinfo['extension'];
        if ($this->allowedExtensions && !in_array(strtolower($ext), $this->allowedExtensions))
        {
            return array('error' => 'File has an invalid extension ,it should be one of these'.$these);
        }
        return $this->file->save();
    }
}
class QqUploadedFileForm
{
    /**
     * @return bool TRUE on success
     */
    public function save()
    {   $request = Request::createFromGlobals();
        $fileget = $request->request->get('id_product');
        $product = new Ps0oProduct($fileget);
        if (!Validate::isLoadedObject($product))
        {
            return array('error' => 'Cannot add image because product creation failed');
        }
        else
            {
                $image = new Ps0oImage();
                $hold = $image->getIdProduct();
                $product->id = $hold;
                $image->position = Ps0oImage::getHighestPosition($product->id) +1;
                $legends = Tools::getValue('legend');
                if (is_array($legends))
                {
                    foreach ($legends as $key => $legend)
                    {
                        if (Validate::isGenericName($legend))
                        {
                            $image->legend[(int)$key] = $legend;
                        }
                        else
                            {
                                return array('error' => 'Error on image caption,not a valid caption');
                            }
                    }
                }
                if (!Ps0oImage::getCover())
                {
                    $image->cover = 1;
                }
                else
                    {
                        $image->cover =0;
                    }
                if (($validate = $image->validateFieldsLang(false, true)) !== true)
                    {
                        return array($validate);
                    }
                if (!$image->add())
                {
                    return array('error' => 'Error while creating additional image');
                }
                else
                    {
                        return $this->copyImage($product->getIdProduct(), $image->getIdImage());
                    }
            }
    }
    public function copyImage($id_product, $id_image, $method = 'auto')
    {
        $image = new Ps0oImage($id_image);
        $request = Request::createFromGlobals();
        $filecheck = $request->files->get('qqfile');

        if (!$new_path = $image->getPathforCreation())
        {
            return array('error' => 'An error occurred during new folder creation');
        }
    if (!($tmpName = tempnam(_PS_TMP_IMAGE_DIR_, 'PS'))|| !move_uploaded_file($filecheck['tmp_name'], $tmpName))
    {
        return array('error' => 'An error occurred during image upload');
    }
    elseif (!ImageManager::resize($tmpName, $new_path.'.'.$image->image_format))
    {
      return array('error' => 'An error occurred while copying image');
    }
    elseif ($method == 'auto')
    {
        $imageTypes = ImageType::getImageTypes('products');
        foreach ($imageTypes as $imageType)
        {
            if(!ImageManager::resize($tmpName, $new_path.'-'.stripslashes($imageType['name']).'.'.$image->image_format, $imageType['width'], $imageType['height'], $image->image_format))
            {
                return array('error' => 'An error occured while copying image');
            }
        }
    }
    unlink($tmpName);
        Ps0oHook::exec('actionWatermark', ['id_image'=> $id_image,
                                            'id_product' => $id_product]);
        if (!$image->update())
        {
            return array('error' => 'Error while updating status');
        }
        $img = ['id_image' => $image->getIdImage(),
                'position' => $image->getPosition(),
                'cover' => $image->getCover(),
                'name' => $this->getName(),
                'legend' =>$image->legend];
        return array('success' => $img);
    }
    public function getName()
    {
        $request = Request::createFromGlobals();
        $filecheck = $request->files->get('qqfile');
        return $filecheck['name'];
    }
    public function getSize()
    {
        $request = Request::createFromGlobals();
        $filecheck = $request->files->get('qqfile');
        return $filecheck['size'];
    }
}
class QqUploadedFileXhr
{
    /**
     * @return bool TRUE on succeess
     */
    public function upload($path)
    {
        $input = fopen('php://input', 'r');
        $target = fopen($path, 'w');
        $realSize = stream_copy_to_stream($input, $target);
        if ($realSize != $this->getSize())
        {
            return false;
        }
        fclose($input);
        fclose($target);

        return true;
    }
    public function save()
    {
        $request = Request::createFromGlobals();
        $fileget = $request->request->get('id_product');
        $product = new Ps0oProduct($fileget);
        if (!Validate::isLoadedObject($product))
        {
            return array('error' => 'Cannot add image because product creation failed');
        }
        else
            {
                $image = new Ps0oImage();
                $image->id_product = (int)($product->getIdProduct());
                $image->position = Ps0oImage::getHighestPosition($product->getIdProduct()) +1;
                $legends = Tools::getValue('legend');
                if (is_array($legends))
                {
                    foreach ($legends as $key => $legend)
                    {
                        if (Validate::isGenericName($legend))
                        {
                            $image->legend[(int)$key] = $legend;
                        }
                        else
                            {
                                return array('error' => 'Error on image caption, not a valid caption');
                            }
                    }
                }
                $hold = $image->id_product
                if (!Ps0oImage::getCover($hold))
                {
                    $image->cover = 1;
                }
                else{
                    $image->cover = 0;
                }
                if (($validate = $image->validateFieldsLang(false, true)) !== true)
                {
                    return array('error');
                }
                if (!$image->add())
                {
                    return array('error' => 'error while creating additional image');
                }
            }
    }
}