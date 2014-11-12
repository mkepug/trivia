<?php
/**
 * Created by PhpStorm.
 * User: mkepug
 * Date: 4/8/14
 * Time: 7:07 PM
 */

namespace MKEPUG;


class Question {

    public $question;
    public $answers = array();
    public $comment;

    public function __construct($questionData)
    {
        $this->question = $questionData['question'];
        $this->comment = $questionData['comment'];
        $this->answers = [];
        foreach($questionData["answers"] as $answer){
            $this->answers[] = new Answer($answer["text"], $answer["correct"], $answer["remove"]);
        }
    }

    /**
     * @return mixed
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @return array
     */
    public function getAnswers()
    {
        return $this->answers;
    }



    /**
     * @param mixed $question
     */
    public function setQuestion($question)
    {
        $this->question = $question;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }
    /**
     * @param Answer[] $answers
     */
    public function setAnswers($answers)
    {
        $this->answers = $answers;
    }

} 
