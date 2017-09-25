<?php

namespace App;

class DecoyDuck extends Duck
{

    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new MuteQuack();
    }

    public function display()
    {
        return 'Утка-приманка';
    }

}