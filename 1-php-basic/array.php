<?php

// index array
$arr = array("a","b","c");
$x = ["x","y","z"];
// echo $arr; // error: echo can output string only
// print("hello");
// print_r($arr);
// echo $arr[0];
// echo $arr[1];
// print_r($x);



// associated array (key value pair)
$assoc = [
    "myName" => "khawn kham",
    "myAge" => 24,
    "myJob" => array("developer","freelancer"),
    "girlfriend" => 1000,
    "isHandsome" => true
];
print_r($assoc);
print($assoc["myName"]);
var_dump($assoc);



//key not on alll elements
$arr3 = array(
    "a",
    "b",
    6 => "c",
    "d"
);
var_dump($arr3);