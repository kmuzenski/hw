<?php

class ShapeMaker {
  var $stars = array();

function  __construct($size){ 
for ($i=0; $i <= $size; $i++) {  
$stars= array ("*");
array_push($stars, "*");
}
} 


function Triangle () {
$col = 0; //starts the columns at 0

for ($i =0; $i <= 3;$i++) {
//iteratoin for the loop

for ($c =0; $c <= $col ;$c++){
print_r("*");
//iteration for the columns
}
$col = $col+1; //adds one to each column
print_r("\n");
}
}


function BackwardsT () {
$col = 3;
$starcount=0;
for ($i=0; $i <= 3; $i++) {

//print spaces
for ($c =0; $c <= $col; $c++) {
print_r(" ");

}
//prints stars
for ($s=0; $s <=$starcount; $s++)
{
print_r("*");

}
//adds stars
$starcount = $starcount +1;
//retracts spaces
$col = $col-1;

print_r("\n");

}
}


function UpsideDownT () {
$col = 3;

for($i=0; $i <=3; $i++) {

for ($c = 0; $c <= $col; $c++) {
print_r("*");
}
$col =$col-1;
print_r("\n");

}
}
}

$mySC = new ShapeMaker(4); // calls the function
$mySC->Triangle();
print_r("\n");
$mySC->BackwardsT();
print_r("\n");
$mySC->UpsideDownT();
?>
