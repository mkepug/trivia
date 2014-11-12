<?php
/**
 * Created by PhpStorm.
 * User: mkepug
 * Date: 4/8/14
 * Time: 6:53 PM
 */

namespace MKEPUG;


class DataSource {

    protected $file;

    public function __construct($file)
    {
        if (!file_exists($file) || !is_readable($file))
        {
            throw new \Exception("Input file does not exist");
        }
        $this->file = $file;

    }

    public function getData()
    {
        return json_decode(file_get_contents($this->file), true);
    }

    public function setData($data)
    {
        return file_put_contents($this->file, json_encode($data, JSON_PRETTY_PRINT));
    }
} 