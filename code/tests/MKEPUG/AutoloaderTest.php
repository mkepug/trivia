<?php

namespace MKEPUG;


class AutoloaderTest extends \PHPUnit_Framework_TestCase {

    static $autoloader_path;

    public static function setUpBeforeClass() {
        AutoloaderTest::$autoloader_path = __DIR__ . '/../../src/MKEPUG/Autoloader.php';
    }

    public function testAutoloaderExists () {
        $this->assertFileExists(AutoloaderTest::$autoloader_path);
    }

    public function testAutoloaderLoadsClass () {
        include_once __DIR__ . '/../../public/index.php';
        $this->assertTrue(class_exists('MKEPUG\Question'));
    }
} 