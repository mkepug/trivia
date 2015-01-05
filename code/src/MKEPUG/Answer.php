<?php
/**
 * Created by PhpStorm.
 * User: brycemeyer
 * Date: 11/11/14
 * Time: 7:03 PM
 */

namespace MKEPUG;


class Answer {

    public $text;
    public $correct = false;
    public $remove = false;

    public function __construct($text = null, $correct = false, $remove = false)
    {
        $this->text = $text;
        $this->correct = $correct;
        $this->remove = $remove;
    }

    /**
     * @return mixed
     */
    public function getCorrect()
    {
        return $this->correct;
    }

    /**
     * @return mixed
     */
    public function getRemove()
    {
        return $this->remove;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }



    public function setType($type)
    {
        switch($type)
        {
            case "incorrect":
                $this->correct = false;
                $this->remove = false;
                break;
            case "remove":
                $this->correct = false;
                $this->remove = true;
                break;
            case "correct":
                $this->correct = true;
                $this->remove = false;
                break;
        }
    }

    public function setText($text)
    {
        $this->text = $text;
    }

} 