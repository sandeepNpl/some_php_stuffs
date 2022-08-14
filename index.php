<?php

// syntax 
echo "Hello world !!<br>";

// variables 

$myName = "Sandip Nepali";
echo $myName;
echo "<br>";
$num1 = 5;
$num2 = 4;
echo $num1 + $num2 ;

// variable scope 

// local scope 

echo "<br>";

$number1 = 30;
function testing(){
    static $number2 = 10;
    echo $number2."<br>";
    $number2--;
}
// testing();
// testing();
// testing();

// // global scope 
// echo $number1;

// testing();
// testing();
// testing();
// testing();
// testing();

// $number2 = 20; 
// echo $number2;

// static scope 

// data types

//string
$language1 = "PHP";
$language2 = 'HTML';
echo $language1."<br>";
echo $language2."<br>";
echo var_dump($language2);

//int
$marks = 90;
echo $marks."<br>";
echo var_dump($marks);
echo "<br>";
//float

$fNumber = 3.6;
echo var_dump($fNumber);

//boolean
$yes =  true;
echo var_dump($yes);
//arrays
//objects
class fruits 
{
    public $name;
    public $colors;

    public function setName($name){
        $this->name=$name;
    }

    public function getName(){
        return $this->name;
    }
}

$apple  = new Fruits();
$apple->setname("Banana");
 echo $apple->getname();

 echo "<br>";

 $mango = new Fruits();
 $mango->setname("mango");
 echo $mango->getname();
//null

// $nullValue = null;
// echo $nullValue;

?>