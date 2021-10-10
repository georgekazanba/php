<?php
session_start();
//переменные получают данные из массива POST
$name=$_POST["name"];
$age=$_POST["age"];
?>
<!DOCTYPE>
<html>
	<head>
	</head>
	<body>
		<form method="post" enctype="multipart/form-data">
			<!--Поля ввода для имени и возраста со своими идентификаторами-->
			<input type="text" name="name"/>
			<input type="text" name="age"/>
			<!--Отправка данных из полей ввода в массив-->
			<input type="submit" value="Отправить"/>
		</form>
		<!--Строки получают данные переменных-->
		<p><?php echo $name ?></p>
		<p><?php echo $age ?></p>
	</body>
</html>