<?php
class Product
{
    public $name = "een bepaald spel";
    public $price = "oeps geen prijs";

    public function formatPrice()
    {
        return number_format($this->price, 2);
    }
    public function showSalesPrice()
    {
        return number_format($this->price, 2) * 1.09;
    }
}


$chair1 = new Product();
$chair2 = new Product();
$table1 = new Product();
$lamp1 = new Product();
//var_dump($chair1);
//var_dump($chair2);
//var_dump($table1);
//var_dump($lamp1);


$game1 = new Product();
$game1->name = "Team Fortress 2";
$game1->price = "free";
$game2 = new Product();
$game2->name = "Rainbow Six Siege";
$game2->price = 20;

$game3 = new Product();
$game3->name = "pong";
$game3->price = 5;


echo $game1->name. "<br>";
echo $game2->name. "<br>";
echo $game3->name. "<br>";


$game1->name = "Team Fortress classic";
$game1->price = 3;
echo $game1->name. "<br>";

echo $game1->formatPrice();
echo "<br>". "<br>Sales price". "<br>";
echo $game1->showSalesPrice();


var_dump($game1);
var_dump($game2);







