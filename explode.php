<?php
	

	function explosion($delim, $sentence) {
	$space ="";
	$returnarray = array();
 
	for($i =0; $i < strlen($sentence); $i++) {
	if($sentence[$i] == " ") {
	array_push($returnarray,$space);
	$space ="";
}
    else {
	$space =$space.$sentence[$i];
	}
}

array_push($returnarray, $space);
return $returnarray;

}

 print_r (explosion(" ","I love kitties."));

?>
