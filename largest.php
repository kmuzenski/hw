<?php

	$a = array(1, 2, 3, 4, 5, 6,);
	$res = max($a);

	foreach($a as $v) {
		if ($res < $v)
		$res = $v;
	}

	echo $res;

?> 
