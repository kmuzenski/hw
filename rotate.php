<?php
$list = array (1,2,3);
count($list);
$switch = 1;

for ($i=0; $i < count($list) - 1; $i++) {
	$list[$i] = $list[$i + 1];
}
$list[$i] = $switch; 
print_r ($list);
 
for ($i =0; $i < count($list); $i++) {
	$list[$i] = $list[$i] + 5;

}

print_r ($list);

 ?> 
