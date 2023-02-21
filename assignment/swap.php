
<?php
$v1=40;
$v2=67;

echo "before swap: <b>v1 = ",$v1, " and v2 = ",$v2,"</b>";

$value=$v2;
$v2=$v1;
$v1=$value;

printf("<br><br> after swap: <b>v1 =%d and v2 = %d</b>",$v1,$v2);


?>