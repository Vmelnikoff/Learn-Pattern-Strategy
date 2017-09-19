<?php

require __DIR__ . '/vendor/autoload.php';

$mallardDuck = new \App\MallardDuck();
$redheadDuck = new \App\RedheadDuck();

echo 'Мы видим: ' . $mallardDuck->display() . '<br>';
echo 'Она кричит: ' . $mallardDuck->quack() . '<br>';
echo 'Она умеет: ' . $mallardDuck->swim() . '<br>';

echo '<br>';

echo 'Мы видим: ' . $redheadDuck->display() . '<br>';
echo 'Она кричит: ' . $redheadDuck->quack() . '<br>';
echo 'Она умеет: ' . $redheadDuck->swim() . '<br>';
