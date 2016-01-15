<?php
  class Associate {
//properties
	var $name;
	var $member;
	var $ssn;
	var $position;
	var $task;
	var $skill;
	var $exp;
	var $avail;
	var $partTime;
	var $fullTime;
//functions	
	function __construct() {;}
	function __firstname() {;}
	function __memberID() {;}
	function __rank() {;}
	function __payrate() {;}
	function __clockIn() {;}
}


 class assistantM  extends Associate{
	function __construct() {;}
	function __mrktng()  {;}
	function __merch() {;}
	function __inventory() {;}
	}

 class manager  extends Associate  {
	function __construct() {;}
	function __office() {;}
	function __truck() {;}
	function __hiring() {;}
	function __hourlySales () {;}
	function __schedule() {;}
	function __plano() {;}
	function __maint() {;}
	} 




 ?>  
