<?php

namespace App;

abstract class Duck
{
    public function quack()
    {
        return 'кря-кря';
    }

    public function swim()
    {
        return 'плавать';
    }

    abstract public function display();

}