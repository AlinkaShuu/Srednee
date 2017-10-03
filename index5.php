<?php
$sum=0;
$max=0;
$prices=[120,130,150,130,100];
foreach ($prices as $price){
	if ($max<$price){
		$max=$price;
	}
};
echo "Максимальное число массива: $max";


?>
