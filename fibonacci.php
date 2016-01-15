<?php
$shift = 5;
$num = 6;

	function fib($num,$firstNumber=5,$secondNumber=5)
	{
		$n = array(5,5,10,15,25,40);
		$a = array($firstNumber);
	 //0 check returns the function to 1
	 if($num < 0)
	 {
		return array($firstNumber);
	 }

	echo "$firstNumber \n";
	//find nth fib number
	$b = fib($num-1,$secondNumber,$firstNumber+$secondNumber,$n);
	//merge arrays 
	return array_merge($b,$a);

	}

$result = fib(6,5,5);

?>

