<?php

class Product
{
    public $name;
}


$chair1 = new Product();
$chair2 = new Product();
$table1 = new Product();
$lamp1 = new Product();

var_dump($chair1);
var_dump($chair2);
var_dump($table1);
var_dump($lamp1);



$game1 = new Product();
$game1->name = "Team Fortress 2";
$game2 = new Product();
$game2->name = "Rainbow Six Siege";


var_dump($game1);
var_dump($game2);

echo $game1->name;