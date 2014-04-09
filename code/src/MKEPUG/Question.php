<?php
/**
 * Created by PhpStorm.
 * User: mkepug
 * Date: 4/8/14
 * Time: 7:07 PM
 */

namespace MKEPUG;


class Question {

    protected $question;
    protected $answers = array();
    protected $comment;

    public function __construct($questionData)
    {
        $this->question = $questionData['question'];
        $this->comment = $questionData['comment'];

        $this->answers[] = array('text'=>$questionData['answer'], 'correct'=>true);
        $this->answers[] = array('text'=>$questionData['wrong1'], 'correct'=>false);
        $this->answers[] = array('text'=>$questionData['wrong2'], 'correct'=>false);
        $this->answers[] = array('text'=>$questionData['wrong3'], 'correct'=>false);
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


} 