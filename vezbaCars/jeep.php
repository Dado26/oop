<?php
require 'car.php';

class Jeep extends Car{
    public $amortizeri;
    public $prikolica = false;
    public $potrosnja;
    
   public function __construct($amortizeri, $prikolica, $engine, $speed, $potrosnja) {
       $this->amortizeri;
       $this->prikolica;
       $this->engine;
       $this->speed;
       
   }
   
   public function fill($amount){
       $this->tank += $amount;
   }
   
   public function drive($distance) {
       $this->tank -= ($this->potrosnja/100)* ($distance);
   }
}