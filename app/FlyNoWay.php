<?php

namespace App;

class FlyNoWay implements FlyBehavior
{
    public function fly()
    {
        return 'не умеет летать';
    }
}
