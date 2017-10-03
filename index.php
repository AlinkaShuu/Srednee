<?php
$sum=0;
$avg=0;
$prices=[120,130,150,130,100];
for ($i=0;$i<count($prices);$i++){
	$sum+=$prices[$i];
};
$avg=$sum/count($prices);
echo "Среднее число массива: $avg";
?>
