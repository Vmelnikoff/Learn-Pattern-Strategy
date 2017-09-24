<?php

namespace App;

class RedheadDuck extends Duck implements Flyable
{

    public function display()
    {
        return 'Рыжую утку';
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