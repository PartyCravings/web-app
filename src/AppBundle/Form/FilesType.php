<?php

namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class FilesType extends AbstractType
{
    private $url;

    public function __construct(UrlGeneratorInterface $generator)
    {
        $this->url = $generator->generate('_uploader_upload_gallery');
    }
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name', FileType::class, 
            array(
                'label'=>false,
                'mapped'=>false,
                'multiple'=> true,
                'required'=> false,
                'attr' => array(
                    'class'=> 'js-service-file-field',
                    'multiple'=> 'multiple',
                    'data-url'=> $this->url,
                    'id' => 'fileupload'
                )
            )
        );
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Files'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_files';
    }


}
