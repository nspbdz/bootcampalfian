<?php

function ss($param){
	$explode = explode(',', $param);
	$prefix = " ";
	$result ="";

	for ($i=0; $i < count($explode); $i++) {
	$result .= $prefix.$explode[$i]."<br>";
	$prefix = $prefix."&nbsp;";
}

return $result;
}
$param = 'W,A,Y,S,D,U,M,B';

$param1 = 'D,E,V,9,9';
echo ss($param);