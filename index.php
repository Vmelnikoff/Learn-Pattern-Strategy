<?php

require __DIR__ . '/vendor/autoload.php';

$mallardDuck = new \App\MallardDuck();
$redheadDuck = new \App\RedheadDuck();
$rubberDuck = new \App\RubberDuck();
$decoyDuck = new \App\DecoyDuck();

echo 'Мы видим: ' . $mallardDuck->display() . '<br>';
echo 'Она умеет: ' . $mallardDuck->swim() . '<br>';
echo 'Она кричит: ' . $mallardDuck->quackBehavior->quack() . '<br>';
echo 'Она: ' . $mallardDuck->flyBehavior->fly() . '<br>';

echo '<br>';

echo 'Мы видим: ' . $redheadDuck->display() . '<br>';
echo 'Она умеет: ' . $redheadDuck->swim() . '<br>';
echo 'Она кричит: ' . $redheadDuck->quackBehavior->quack() . '<br>';
echo 'Она: ' . $redheadDuck->flyBehavior->fly() . '<br>';

echo '<br>';

echo 'Мы видим: ' . $rubberDuck->display() . '<br>';
echo 'Она умеет: ' . $rubberDuck->swim() . '<br>';
echo 'Она кричит: ' . $rubberDuck->quackBehavior->quack() . '<br>';
echo 'Она: ' . $rubberDuck->flyBehavior->fly() . '<br>';

echo '<br>';

echo 'Мы видим: ' . $decoyDuck->display() . '<br>';
echo 'Она умеет: ' . $decoyDuck->swim() . '<br>';
echo 'Она кричит: ' . $decoyDuck->quackBehavior->quack() . '<br>';
echo 'Она: ' . $decoyDuck->flyBehavior->fly() . '<br>';