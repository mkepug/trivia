<?php
/**
* Created by PhpStorm.
* User: Chris
* Date: 5/13/14
* Time: 7:24 PM
*/

use MKEPUG\Game;


class GameTest extends PHPUnit_Framework_TestCase {

    protected $obj;

    public function setUp()
    {
        // TODO: fix all the things
        $q1 = new \MKEPUG\Question(array('question'=>'first','answers'=>array(),'comment'=>'1','answer'=>'1','wrong1'=>'1','wrong2'=>'1','wrong3'=>'1'));
        $q2 = new \MKEPUG\Question(array('question'=>'second','answers'=>array(),'comment'=>'2','answer'=>'2','wrong1'=>'2','wrong2'=>'2','wrong3'=>'2'));
        $this->obj = new Game(array($q1,$q2));
    }

    public function questionKeys() {
        return array(
            array(0,'\MKEPUG\Question','first'),
            array(1,'\MKEPUG\Question','second')
            //TODO: Test out of bounds
        );
    }
    /**
     * @dataProvider questionKeys
     */
    public function testGetQuestion($key,$type,$q) {
        $question = $this->obj->getQuestion($key);
        $this->assertInstanceOf($type,$question);
        $this->assertEquals($question->getQuestion(),$q);
    }
} 