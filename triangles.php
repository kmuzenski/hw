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
$col = 0;

for ($i=0; $i <= 3; $i++) {

for ($c =0; $c <= $col; $c++) {
print_r("*");
}
$col = $col+1;
print_r("\n");

}
}

function UpsideDownT () {
$col = 0;

for($i=0; $i <=3; $i++) {

for ($c = 4; $c <= $col; $c= $c-1) {
print_r("*");
}
$col =$col-1;
print_r("\n");



}
}
}
$mySC = new ShapeMaker(4); // calls the function
$mySC->Triangle();
$mySC->BackwardsT();
$mySC->UpsideDownT();
?>
