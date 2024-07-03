<?php

//----------------variables
$var = "Bob";
$var2 = "Joe";
echo "$var,$var2";
// $4site = "not yet";     // invalid start with number
$_4site = "not yet";    // valid start with underscore



//---------------predefined variables
/*print_r($GLOBALS);
print_r($_SERVER);
print_r($_GET);
print_r($_POST);
print_r($_FILES);*/



//------------------variable scope
/*  global scope
    function scope
    variable variables
    variable from external sources*/



//--------------------constant
define("MYNAME","sai khawn");
echo MYNAME;
const MYNICKNAME = "handsome boy";
echo MYNICKNAME;