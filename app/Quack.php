<?php

namespace App;


class Quack implements QuackBehavior
{
    public function quack()
    {
        return 'кря-кря';
    }
}