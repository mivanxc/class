<?php

require 'Person.php';
require 'Kindergarten.php';
require 'FamilyHome.php';

$husband = new Person();

$husband->setName('Иван')
    ->setAge(30)
    ->setHeight(1.70)
    ->setWeight(55)
    ->setEat('есть мясо');

echo $husband->getName() . '<br>' . 
$husband->getAge() . ' лет<br>' . 
$husband->getHeight() . 'м рост<br>' . 
$husband->getWeight() . 'кг вес <br> он может :<br>' . 
$husband->sleep() .
$husband->walk() .
$husband->work() .
$husband->getEat() . '<br><br>';


$wife = new Person();

$wife->setName('Джени')
    ->setAge(26)
    ->setHeight(1.60)
    ->setWeight(50);

echo $wife->getName() . '<br>' . 
$wife->getAge() . ' лет<br>' . 
$wife->getHeight() . 'м рост<br>' . 
$wife->getWeight() . 'кг вес <br> она может :<br>' . 
$wife->sleep() .
$wife->walk() . 
$wife->embroider() . '<br><br>';

 
$son = new Person();

$son->setName('Сэм')
     ->setAge(1.1)
     ->setHeight(0.60)
     ->setWeight(55);


echo $son->getName() . '<br>' . 
$son->getAge() . ' год<br>' . 
$son->getHeight() . 'м рост<br>' . 
$son->getWeight() . 'кг вес <br> он может :<br>' . 
$son->sleep() .
$son->walk() . '<br><br>';
echo 'Привет';

