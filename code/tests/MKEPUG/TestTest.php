<?php
/**
 * Created by PhpStorm.
 * User: deej
 * Date: 1/17/14
 * Time: 8:30 AM
 */
use MKEPUG\Test;

class TestTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var Test
     */
    protected $obj;

    public function setUp()
    {
        $this->obj = new Test();
    }
    public function testReturnString()
    {

        $this->assertEquals('hello', $this->obj->returnString('hello'));
    }

    /**
     * Simple method to ensure PHPUnit is up and running
     *
     * @return void
     */
    public function testConfiguration()
    {

        $this->assertTrue(true, "Making sure phpunit is configured correctly.");
    }



} 