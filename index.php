<?php

require __DIR__ . '/vendor/autoload.php';

$mallardDuck = new \App\MallardDuck();
$redheadDuck = new \App\RedheadDuck();
$rubberDuck = new \App\RubberDuck();
$decoyDuck = new \App\DecoyDuck();
$modelDuck = new \App\ModelDuck();

echo 'Мы видим: ' . $mallardDuck->display() . '<br>';
echo 'Она умеет: ' . $mallardDuck->swim() . '<br>';
echo 'Она кричит: ' . $mallardDuck->performQuack() . '<br>';
echo 'Она: ' . $mallardDuck->performFly() . '<br>';

echo '<br>';

echo 'Мы видим: ' . $redheadDuck->display() . '<br>';
echo 'Она умеет: ' . $redheadDuck->swim() . '<br>';
echo 'Она кричит: ' . $redheadDuck->performQuack() . '<br>';
echo 'Она: ' . $redheadDuck->performFly() . '<br>';

echo '<br>';

echo 'Мы видим: ' . $rubberDuck->display() . '<br>';
echo 'Она умеет: ' . $rubberDuck->swim() . '<br>';
echo 'Она кричит: ' . $rubberDuck->performQuack() . '<br>';
echo 'Она: ' . $rubberDuck->performFly() . '<br>';

echo '<br>';

echo 'Мы видим: ' . $decoyDuck->display() . '<br>';
echo 'Она умеет: ' . $decoyDuck->swim() . '<br>';
echo 'Она кричит: ' . $decoyDuck->performQuack() . '<br>';
echo 'Она: ' . $decoyDuck->performFly() . '<br>';

echo '<br>';

echo 'Мы видим: ' . $modelDuck->display() . '<br>';
echo 'Она умеет: ' . $modelDuck->swim() . '<br>';
echo 'Она кричит: ' . $modelDuck->performQuack() . '<br>';
echo 'Она: ' . $modelDuck->performFly() . '<br>';

$modelDuck->setFlyBehavior(new App\FlyRocketPowered());

echo 'Она: ' . $modelDuck->performFly() . '<br>';
