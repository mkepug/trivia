<?php
namespace MKEPUG;


class Autoloader {

    public static function autoload($class_name) {
        $file_name = __DIR__.'/../'.str_replace('\\', '/', $class_name).'.php';

        if (file_exists($file_name)) {
            include_once $file_name;
        }
    }

}