<?php

class Car {
     public $brand;
     public $color;
     public $type;
     private $tank;
     public $fuel;
     
     public function light(){
          echo " $this->brand $this->type :blink-blink";
     }
     
     public function __construct($brand, $color, $type, $fuel) {
        $this->brand = $brand ;
        $this->color = $color;
        $this->type = $type;
        $this->fuel = $fuel;
     }
     
     public function fill($amount){
         $this->tank += $amount;   
     }
     
     public function drive($distance){
         $this->tank -= ($this->fuel/100)*$distance;
         
     }
     
     public function getTank(){
         return $this->tank;
     }
     
     function __set($name, $value) {
         switch($name){
             case "brand":
                 $this->brand= $value;
                 break;
             case "color":
                 $this->color= $value;
                 break;
             case "type":
                 $this->type = $value;
                 break;
         }
         echo "Set " . $name . " to " . $value . "<br>";
     }
    
}

$volvo = new Car('audi','black','limuzin',6.5);

$volvo->color = 'blue';

$volvo->brand = 'mercedes';

$volvo->type = 'cabriolet';


$volvo->light();

$volvo->fill(100);
        
$volvo->drive(50);

echo '<br> '.'tank: '.$volvo->getTank();











/*echo $volvo->brand = 'volvo'; 
echo '<br>';
echo $volvo->color = 'green ';
echo $volvo->type = 'cabriolet';

$volvo->light(); */



