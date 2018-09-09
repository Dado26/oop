<?php

abstract class Car{
   public $speed;
   public $engine;
   protected $tank;




   public function trubi($car){
       echo $car. 'tutu';
   }
   
   public function tank(){
       return $this->tank;
   }
   
  
}

class Jeep extends Car{
    public $amortizeri;
    public $prikolica = false;
    public $potrosnja;
    
   public function __construct($amortizeri, $prikolica, $engine, $speed, $potrosnja)
           {
       $this->amortizeri = $amortizeri;
       $this->prikolica = $prikolica;
       $this->engine = $engine;
       $this->speed = $speed;
       $this->potrosnja = $potrosnja;
       
   }
   
   public function fill($amount){
       $this->tank += $amount;
   }
   
   public function drive($distance) {
       $this->tank -= ($this->potrosnja/100)* $distance;
   }
   
  
}

