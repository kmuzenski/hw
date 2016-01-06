<?php
  class magazine {
//properties
	var $fontstyle;
	var $fontcolor;
	var $fontsize;
	var $pagenumber;
	var $author;
	var $textwrap;
	var $img;
	var $edit;
	var $color;
	var $credits;
//functions	
	function __construct() {;}
	function __spellcheck() {;}
	function __source() {;}
	function __grammercheck() {;}
	function __insert() {;}
	function __textwrap() {;}
}


 class editorial  extends magazine {
	function __construct() {;}
	function __title()  {;}
	function __jumbophoto() {;}
	function __textalign() {;}
	}

 class mainstory extends editorial  {
	function __construct() {;}
	function __sortpage() {;}
	function __subheader() {;}
	function __specialtxt() {;}
	function __created () {;}
	function __updated () {;}
	function __citesource () {;}
	function __format () {;}
	} 




 ?>  
