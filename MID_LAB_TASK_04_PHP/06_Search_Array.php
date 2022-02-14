<?php

$arr = [48,75,82,72,63,78,96,41,42,65];

$num = 78;
foreach ($arr as $value) {
	if ($num == $value) {
		$flag =1;
		break;
	}
}
if($flag==1)
{
	echo "element found";
}
else
{
	echo "element not found";
}


?>