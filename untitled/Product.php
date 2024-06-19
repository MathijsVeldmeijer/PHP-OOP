<?php
class Product
{
    public $name = "een bepaald spel";
    public $price = "oeps geen prijs";
    public $category = "een categorie";

    public function setName($name)
    {
     $this->name = strtolower($name);
    }
    public function setCategory($category)
    {
        $this->name = strtoupper($category);
    }

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
$game1->setName("team fortress 2");
$game1->setCategory("fps");

$game1->price = "free";
$game2 = new Product();
$game2->setName("rainbow six siege");
$game1->setCategory("team shooter");

$game2->price = 20;

$game3 = new Product();
$game3->setName("pong");
$game1->setCategory("arcade");
$game3->price = 5;


echo $game1->name. "<br>";
echo $game2->name. "<br>";
echo $game3->name. "<br>";


$game1->name = "team fortress classic";
$game1->price = 3;
echo $game1->name. "<br>";

echo $game1->formatPrice();
echo "<br>". "<br>Sales price". "<br>";
echo $game1->showSalesPrice();


var_dump($game1);
var_dump($game2);




