<?php

class CountClass
{
    static public $count = 0;
    public $name = "Vasua";

    public function __construct()
    {
        self::$count++;
        CountClass::$count++;

        $this->name = "Petya";

        echo "Count: " . self::$count;
        $this->f1();
        self::f2();
        CountClass::f2();
    }

    public function f1(){}
    public static function f2(){}

}

$c = new CountClass();