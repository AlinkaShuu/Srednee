<?php
$values=[120,130,150,-300,-100,800];
foreach ($values as $index=>$val){ 
	if ($val<0){
		echo $index;
		break; //Выход из цикла
	}
};
?>
