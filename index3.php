<?php
$sum=0;
$avg=0;
$prices=[120,130,150,130,100];
$prices[2]=50; //изменение 2 элемента
$prices[]=300; //добавление элемента
$prices[100]=1000; //добавление элемента 100, но будет ошибка, т.к. нет 100 элементов
for ($i=0;$i<count($prices);$i++){
	if (isset($prices[$i])){
	$sum+=$prices[$i];
} //исправление ошибки строки 7
};
$avg=$sum/count($prices);
echo "Среднее число массива: $avg";
?>
