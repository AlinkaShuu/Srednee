<?php
$max=0;
$maxIndex=-1;
$prices=[120,130,150,300,100];
foreach ($prices as $index=>$price){
	if ($max<$price){
		$max=$price;
		$maxIndex=$index;
	}
};
echo "Максимальное число массива: $max";
echo "<br>";
echo "Индекс числа массива: $maxIndex";
?>
