<?php

require __DIR__ . '/vendor/autoload.php';

$mallardDuck = new \App\MallardDuck();
$redheadDuck = new \App\RedheadDuck();
$rubberDuck = new \App\RubberDuck();
$decoyDuck = new \App\DecoyDuck();

echo 'Мы видим: ' . $mallardDuck->display() . '<br>';
echo 'Она кричит: ' . $mallardDuck->quack() . '<br>';
echo 'Она умеет: ' . $mallardDuck->swim() . '<br>';
echo 'Она: ' . $mallardDuck->fly() . '<br>';

echo '<br>';

echo 'Мы видим: ' . $redheadDuck->display() . '<br>';
echo 'Она кричит: ' . $redheadDuck->quack() . '<br>';
echo 'Она умеет: ' . $redheadDuck->swim() . '<br>';
echo 'Она: ' . $redheadDuck->fly() . '<br>';

echo '<br>';

echo 'Мы видим: ' . $rubberDuck->display() . '<br>';
echo 'Она кричит: ' . $rubberDuck->quack() . '<br>';
echo 'Она умеет: ' . $rubberDuck->swim() . '<br>';

echo '<br>';

echo 'Мы видим: ' . $decoyDuck->display() . '<br>';
echo 'Она умеет: ' . $rubberDuck->swim() . '<br>';