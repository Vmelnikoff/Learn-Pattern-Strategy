<?php

namespace App;

abstract class Duck
{

    public function swim()
    {
        return 'плавать';
    }

    abstract public function display();

}