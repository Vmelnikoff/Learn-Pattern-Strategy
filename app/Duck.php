<?php

namespace App;

abstract class Duck
{

    public $flyBehavior;
    public $quackBehavior;

    public function swim()
    {
        return 'плавать';
    }

    abstract public function display();

}
