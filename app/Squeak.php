<?php

namespace App;


class Squeak implements QuackBehavior
{
    public function quack()
    {
        return 'писк';
    }
}