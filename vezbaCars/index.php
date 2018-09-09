<?php

require 'car.php';

$jeep4 = new Jeep('25cm', true, '150kw','200km', 6.5);


//echo $jeep4->speed;

$jeep4->fill(50);

$jeep4->drive(100);

echo $jeep4->tank();



//echo $jeep4->tank();


