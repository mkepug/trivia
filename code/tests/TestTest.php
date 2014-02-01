<?php
/**
 * Created by PhpStorm.
 * User: deej
 * Date: 1/17/14
 * Time: 8:30 AM
 */

/**
 * Class TestTest
 *
 * @category Uncategorized
 * @author   Jeremy Dee <jeremydee@hotmail.com>
 * @license  Dee-Signed Programs http://www.dee-signed.com
 * @link     link
 * @package  MKEPUG/Trivia
 */
class TestTest extends PHPUnit_Framework_TestCase
{
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