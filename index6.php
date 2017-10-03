<?php
$max=0;
$maxIndex=-1; //ВВОДИМ -1, Т.К. ПОД № 0 МОЖЕТ БЫТЬ МАКС. ЭЛЕМЕНТ
$prices=[120,130,150,300,100];
foreach ($prices as $index=>$price){ //$index НАЧИНАЕТСЯ С 0
	if ($max<$price){
		$max=$price;
		$maxIndex=$index;
	}
};
echo "Максимальное число массива: $max";
echo "<br>";
echo "Индекс числа массива: $maxIndex";
?>
