<?php
//в переменной "а" задана строка "blue"
$a="blue";
//если строка в переменной совпадает со сравниемой, то на экран выводится подходящий перевод
if ($a=="red")
{
	echo "красный";
}
elseif ($a=="green")
{
	echo "зелёный";
}
elseif ($a=="blue")
{
	echo "синий";
}
//если не было совпадения, то на экран выводится сообщение о том, что код не имеет нужного перевода
else
{
	echo "не знаю";
}
?>