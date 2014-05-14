<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 5/13/14
 * Time: 6:25 PM
 */

namespace MKEPUG;


class View {

    protected $fileName; //file for our view
    protected $items; //array of items
    static private $basePath;

    public function __construct($fileName,$items=array()) {
        self::$basePath = __DIR__ . '/views/';
        $this->items = $items;
        $this->fileName = $fileName;
    }

    public function render() {
        ob_start();

        extract($this->items);
        include(self::$basePath . $this->fileName);
        return ob_get_clean();
    }

    /**
     * @param mixed $items
     */
    public function setItem($key,$value)
    {
        $this->items[$key] = $value;
    }

    /**
     * @return mixed
     */
    public function getItem($key)
    {
        return $this->items[$key];
    }




} 