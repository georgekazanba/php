<?php
$i=0;
$a=array(-2, 0, 2, 4, 6, 8, 10);
for ($i; $i<=count($a); $i++){
	if ($a[$i]<0){
		$neg=1;
	}
};
if ($neg==1){
	echo "Да";
}else{
	echo "Нет";
};
?>
