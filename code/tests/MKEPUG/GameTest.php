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
        $q1 = new \MKEPUG\Question(array(
            'question'=>'first',
            'comment'=>'comment explaining answer or wrong choices',
            'answers'=> array(
                array(
                    'text'    => 'text of answer choice 1',
                    'correct' => true,
                    'remove'  => false,
                ),
                array(
                    'text'    => 'text of answer choice 2',
                    'correct' => false,
                    'remove'  => true,
                ),
                array(
                    'text'    => 'text of answer choice 3',
                    'correct' => false,
                    'remove'  => false,
                ),
                array(
                    'text'    => 'text of answer choice 4',
                    'correct' => false,
                    'remove'  => true,
                ),
            ),
        ));
        $q2 = new \MKEPUG\Question(array(
            'question'=>'second',
            'comment'=>'comment explaining answer or wrong choices',
            'answers'=> array(
                array(
                    'text'    => 'text of answer choice 1',
                    'correct' => true,
                    'remove'  => false,
                ),
                array(
                    'text'    => 'text of answer choice 2',
                    'correct' => false,
                    'remove'  => true,
                ),
                array(
                    'text'    => 'text of answer choice 3',
                    'correct' => false,
                    'remove'  => false,
                ),
                array(
                    'text'    => 'text of answer choice 4',
                    'correct' => false,
                    'remove'  => true,
                ),
            ),
        ));
        $this->obj = new Game(array($q1,$q2));
    }

    public function questionKeys() {
        //TODO: update this? or write new providers for other tests?
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

    public function testOnlyTwoChoicesRemovedFor5050() {
        //TODO: write this here?
        $this->assertTrue(false);
    }

    public function testOnlyOneCorrectAnswer() {
        //TODO: write this here?
        $this->assertTrue(false);
    }
} 