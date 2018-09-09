<?php

Class Animal {
    
    private $name;
    private $favorite_food;
    protected $sound;
    private $id;
    
    public static $number_of_animals = 0;
    
    function getName(){
        return $this->name;
    }
    
    function __construct() {
        $this->id = rand(100, 1000);
        
        echo $this->id. " dodeljen je broj <br> ";
        
        Animal::$number_of_animals++;
    }
        
        function __get($name){
            echo "Asked for ". $name."<br>";
            
            return $this->$name;
        }
        
         public function getName1($name){
             echo "Asked for ". $name."<br>";
            
            return $this->$name;
         }
         
         public function getFavorite_food($Favorite_food){
             echo "Asked for ". $Favorite_food."<br>";
            
            return $this->$Favorite_food;
         }
        public function getSound($sound){
             echo "Asked for ". $sound."<br>";
            
            return $this->sound;
         }
         
       public function getId(){
            return $this->id;
        }
        
        function __set($sound3, $value){
            switch($sound3){
                case "name" :
                    $this->name = $value;
                    break;
                case "favorite_food" :
                    $this->favorite_food = $value;
                    break;
                case "sound" :
                    $this->sound = $value;
                    break;
                default :
                    echo $name . "Not Found";
                       
            }
            
            echo "Set " . $sound3 . " to " . $value . "<br>";
            
           
        }
         function run(){
                echo $this->name . "runs like crazy <br>";
            }
    }
    
    class Dog extends Animal{
        function run(){
                echo $this->name . "runs like crazy <br>";
            }
        
    }
  $animal_one = new Animal();  
  
  $animal_one->name = "Spot5";
  $animal_one->favorite_food = "Meat";
  $animal_one->sound = "Ruff";
  
  echo $animal_one->name . " says " . $animal_one->sound.
" give me some ". $animal_one->favorite_food . " my id is ".$animal_one->getId() . " total animals = " . Animal::$number_of_animals .

	    "<br /><br />";
    
$animal_two = new Dog();  
  
  $animal_two->name = "Grover";
  $animal_two->favorite_food = "Mushrooms";
  $animal_two->sound = "grrrr";
  
  echo $animal_two->name . " says " . $animal_two->sound .

	    " give me some ". $animal_two->favorite_food . " my id is ".$animal_two->getId() . " total animals = " . Animal::$number_of_animals .

	    "<br /><br />";