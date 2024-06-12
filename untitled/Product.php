<?php

class Product
{
    public $name = "een bepaald spel";
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

$game3 = new Product();
$game3->name = "pong";




echo $game1->name. "<br>";
echo $game2->name. "<br>";
echo $game3->name. "<br>";


$game1->name = "Team Fortress classic";
echo $game1->name. "<br>";

var_dump($game1);
var_dump($game2);


