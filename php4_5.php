<?php
//$i будет номером элемента массива $a
$i=0;
//в массиве $a задаются числовые значения 
$a=array(-2, 0, 2, 4, 6, 8, 10);
//$i - начальное значение счётчика, работающий, пока $i меньше или равна подсчитанному количеству элементов массива $a, каждый раз $i увеличивается на 1
for ($i; $i<=count($a); $i++){
	//если элемент массива $a с индексом $i меньше нуля...
	if ($a[$i]<0){
		//то переменная $neg задаётся значение 1, говорящее о том, что в массиве есть число меньше нуля
		$neg=1;
	}
};
//если $neg равно единице, то код сообщает об этом, а если нет, то нет
if ($neg==1){
	echo "Да";
}else{
	echo "Нет";
};
?>
