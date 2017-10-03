<?php
$values=[120,130,150,-300,-100,800];
$found=false;
foreach ($values as $index=>$val){ //$index НАЧИНАЕТСЯ С 0
	if (!$found && $val<0){
		echo $index;
		$found=true;
	}
};
?>
