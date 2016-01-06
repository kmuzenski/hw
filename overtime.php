<?php

	function computePay($hours, $rates) {
	$overtimeRate = $rates *1.5;

	if ($hours <= 40) {
		return ($hours * $rates); }

	else {$overtimeHours = $hours-40;
		return ($overtimeHours * $overtimeRate) + (40*$rates);
}
}
	$hours = 45;
	$rates = 10;
	$Pay = computePay($hours,$rates);

	echo $Pay;

?>
