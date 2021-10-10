<?php
//если элемент из массива имеет строку...
if ($_POST["name"])
{
	//...то переменная "a" получает строку из элемента массива POST
	$a=$_POST["name"];
}
//...а если нет...
else
{
	//...то переменная "a" получает строку "незнакомец"
	$a="незнакомец";
}
?>
<!DOCTYPE>
<html>
	<head>
	</head>
	<body>
		<form method="post" enctype="multipart/form-data">
			<!--Поле ввода для имени-->
			<input type="text" name="name"/>
			<!--Отправка данных из полей ввода в массив-->
			<input type="submit" value="Отправить"/>
		</form>
		<p><?php echo "Привет, ".$a."!" ?></p>
	</body>
</html>
