<?php
  class Associate {
//properties
	var $name;
	var $memberId;
	var $ssn;
	var $position;
	var $payrate;
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
	function __Task() {;}
	function __clockIn() {;}
}


 class manager  extends Associate{
	function __construct() {;}
	function __payroll()  {;}
	function __schedule() {;}
	function __hiring() {;}
	}

 class assistantM extends manager  {
	function __construct() {;}
	function __office() {;}
	function __truck() {;}
	function __merch() {;}
	function __hourly () {;}
	function __inventory () {;}
	function __plano() {;}
	function __marketing() {;}
	} 




 ?>  
