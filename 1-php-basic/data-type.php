<?php

//----------------------------------string
$name = "my name ";
$weight = '132 kg ';
echo $name;
echo $weight;
// output: my name132 kg
// use \n: my name
//          132 kg\n

$myName = "khawn kham ";
echo "my name is $myName ";  // my name is khawn kham
echo 'my name is $myName ';  // my name is $myName
echo "\n";



//----------------------------------------numeric string
$foo = 1 + "10.5";  // $foo is float (11.5)
$foo = 1 + "-1.3e3";    // $foo is float (-1299)
echo $foo;
// $foo = 1 + "bob-1.3e3"; // typeerror as of PHP 8.0.0, $foo is integer (1)
// previously

// $foo = 1 + "bob3";  // typeerror as of PHP 8.0.0, $foo is integer (1)
// previously

// $foo = 1 + "10 Small Pigs"; // $foo is integer (11) and an E_WARNING is raised in PHP
// 8.0.0 E_NOTICE previously

// $foo = 4 + "10.2 Little Piggies";   // $foo is float (14.2) and an E_WARNING is raised in PHP
// 8.0.0 E_NOTICE previously

// $foo = "10.0 pigs " + 1;    // $foo is float (11) and an E_WARNING is raised in PHP
// 8.0.0 E_NOTICE previously

// $foo = "10.0 pigs " + 1.0;  // $foo is float (11) and an E_WARNING is raised in PHP
// 8.0.0 E_NOTICE previously
echo "\n";



//---------------------------------------integers and floating points
//integers are the number of the set Z = {...-2,-1,0,1,2,...}
$a = 1.234;
$b = 1.2e3;
$c = 7E-10;
$d = 1_234.567; // as of PHP 7.4.0
echo $c;
echo "\n";



//------------------------------------------null
$x = null;
echo $x;
$var = NULL;
echo $var;
echo "\n";



//----------------------------------------------boolean
$foo = True;
echo $foo;
echo "\n";



//---------------------------------------------array
