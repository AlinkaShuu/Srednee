<?php
$sum=0;
$avg=0;
$prices=[120,130,150,130,100];
$prices[2]=50; //изменение 2 элемента
$prices[]=300; //добавление элемента
foreach ($prices as $price){
		$sum+=$price;
};
$avg=$sum/count($prices);
echo "Среднее число массива: $avg";


?>
