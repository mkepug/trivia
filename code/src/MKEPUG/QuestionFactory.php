<?php
/**
 * Created by PhpStorm.
 * User: mkepug
 * Date: 4/8/14
 * Time: 7:10 PM
 */

namespace MKEPUG;


class QuestionFactory {


    protected $data;

    public function __construct(DataSource $dataSource)
    {
        $data = $dataSource->getData();

        if (!is_array($data))
        {
            throw new \Exception("Not an array");
        }

        if (0 == count($data))
        {
            throw new \Exception("No questions in data");
        }

        $this->data = $data;
    }

    public function getQuestions()
    {
        $aArr = array();
        foreach ($this->data as $row)
        {
            $aArr[] = new Question($row);
        }
        return $aArr;

    }

} 