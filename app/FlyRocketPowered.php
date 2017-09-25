<?php

namespace App;


class FlyRocketPowered implements FlyBehavior
{
    public function fly()
    {
        return 'летает с реактивной тягой';
    }
}