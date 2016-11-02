<?php

namespace rad8329\placetopay\tests;

class P2PTestCase extends \PHPUnit_Framework_TestCase
{
    protected static $config;

    /**
     * @before
     */
    public function setUp()
    {
        if (!self::$config) {
            self::$config = require_once __DIR__.'/fixtures/main.php';
        }

        parent::setUp();
    }
}
