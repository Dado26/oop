<?php
include 'InterfaceSpeak.php';


class Animal {
    public $legs;
    public $weight;
    
    public function eat(){
        echo 'Animal eat!<br>';
    }
}

class Dog extends Animal implements InterfaceSpeak{
    public $teeth;
    
    public function __construct() {
        $this-> legs = 4;
        $this-> weight = 16; 
    }
    
    public function speak(){
        echo 'Wuff wuff!<br>';
    }
}

class Duck extends Animal{
    public $wings = true;
    
    public function speak(){
        echo 'Quack quack!<br>';
    }
}


$dog = new Dog();
$dog->eat();
$dog->speak();

echo '<hr>';

$duck = new Duck();
$duck->eat();
$duck->speak();
var_dump($duck->wings);
echo 'animal has '.$duck->wings.'wings';