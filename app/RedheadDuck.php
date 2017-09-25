<?php

namespace App;

class RedheadDuck extends Duck
{

    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    public function display()
    {
        return 'Рыжую утку';
    }

}
