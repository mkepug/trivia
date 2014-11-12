<?php
/**
 * Created by PhpStorm.
 * User: mkepug
 * Date: 4/8/14
 * Time: 6:48 PM
 */

namespace MKEPUG;


class Game {

    protected $questions;

    public function __construct(Array $questions)
    {
        $this->questions = $questions;
    }

    /**
     * @param $index
     * @return Question
     */
    public function getQuestion($index)
    {
        return $this->questions[$index];
    }

    public function setQuestions($questions)
    {
        $this->questions = $questions;
    }


}