<?php
/**
 * Created by PhpStorm.
 * User: odusanya
 * Date: 5/12/17
 * Time: 8:54 AM
 */

namespace AppBundle\Services;


class CSVCore
{
    public $filename;
    public $collection;
    public $delimiter;

    public function __construct($collection, $filename, $delimiter = ';')
    {
        $this->filename = $filename;
        $this->delimiter = $delimiter;
        $this->collection = $collection;
    }

    public function export()
    {
        $this->headers();
        $header_line = false;
        foreach ($this->collection as $object)
        {
            $vars = get_object_vars($object);
            if(!$header_line)
            {
                $this->output(array_keys($vars));
                $header_line = true;
            }
        }
    }
    public function output($data)
    {
        $wrapped_data = array_map(['CSVExport', 'wrap'], $data);
        echo sprintf("%s\n", implode($this->delimiter, $wrapped_data));
    }
    public function wrap($data)
    {
        $data = str_replace(["''",';'], '', $data);
        return sprintf("'%s'", $data);
    }
    public function headers()
    {
        header('Content-type: text/csv');
        header('Content-Type: application/force-download; charset = UTF8');
        header('Cache-Control: public, s-maxage=3600');
        header('Content-disposition: attachment; filename = '.$this->filename.'.csv' );
    }
    public function __destruct()
    {
        unset($this->filename, $this->delimiter, $this->collection);
    }

}