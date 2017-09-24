<?php

namespace App;

class RubberDuck extends Duck
{

    public function display()
    {
        return 'Резиновая утка';
    }

    public function quack()
    {
        return 'писк';
    }

}