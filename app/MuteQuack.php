<?php

namespace App;


class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        return 'ничего';
    }
}