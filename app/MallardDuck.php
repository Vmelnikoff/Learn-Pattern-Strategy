<?php

namespace App;

class MallardDuck extends Duck
{

    public function __construct()
    {
        $this->flyBehavior = new FlyWithWings();
        $this->quackBehavior = new Quack();
    }

    public function display()
    {
        return 'Утку-крякву';
    }

}
