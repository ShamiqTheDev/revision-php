<?php

class Singleton
{
    private static $instance = null; // instance default is null

    private static $count = 0;

    private function __construct() {}

    public static function getInstance() {
        echo '<br />';
        if(self::$instance === null) { //  checking if instance is available
            self::$instance = new Self();
            echo self::$count++;
        }
        return self::$instance;
    }
}

var_dump(Singleton::getInstance());
var_dump(Singleton::getInstance());
var_dump(Singleton::getInstance());
var_dump(Singleton::getInstance());

// var_dump($instance->getInstance());

// var_dump($instance->getInstance());

// var_dump($instance->getInstance());


