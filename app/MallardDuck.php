<?php

namespace App;

class MallardDuck extends Duck implements Flyable
{

    public function display()
    {
        return 'Утку-крякву';
    }

    public function fly()
    {
        return 'летает с крыльями';
    }

    public function quack()
    {
        return 'кря-кря';
    }

}