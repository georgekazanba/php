<?php
$day=$_POST["day"];
$a=" ";
if ($day<=7){
	($day<=5) ? $a="Это рабочий день" : $a="Это выходной день";
}
else{
	$a="Неизвестный день";
}
?>
<!DOCTYPE>
<html>
	<head>
	</head>
	<body>
		<form method="post" enctype="multipart/form-data">
			<!--Поле ввода для имени-->
			<input type="text" name="day"/>
			<!--Отправка данных из полей ввода в массив-->
			<input type="submit" value="Отправить"/>
		</form>
		<p><?php echo $a ?></p>
	</body>
</html>
