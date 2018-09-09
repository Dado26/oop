<?php

class Car {
    public $color;
    public $brand;
    private $tank = 0;
    public $fuel_economy;
  
    public function __construct($brand, $color, $fuel_economy) {
       $this->brand = $brand;
       $this->color= $color;
       $this->fuel_economy = $fuel_economy;
    }
    public function horn(){
        echo "$this->color $this->brand .Beeped!";
    }
    
    public function fill($amount){
        $this->tank += $amount;
        return $this;
    }
    
    public function drive($distance){
        $this->tank -= ($this->fuel_economy/100)*$distance;
        return $this;
    }
    
    public function getTank(){
        return $this->tank;
    }
}

// BMW


$bmw = new Car('BMW','Blue',8.2);
/*$bmw->color = 'Blue';
$bmw->brand = 'bmw ';
$bmw->fuel_economy = 8.2;*/

$bmw->horn();

$bmw->fill(50)->drive(10);

echo '<br>Tank: '.$bmw->getTank();
echo '<hr>';
// MERCEDES

$mercedes = new Car('Mercedes','green','7.6');
/*$mercedes->color = 'Green';
$mercedes->brand = 'Mercedes Benz ';*/

//echo $mercedes->brand;
$mercedes->horn();

$mercedes->fill(60);
$mercedes->drive(22);

echo '<br>Tank: '.$mercedes->getTank();


