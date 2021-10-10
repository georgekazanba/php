<?php
session_start();
//создаётся массив, элементы которого получают свои значения из формы ввода
$data=array(
	1=>$_POST["name"],
	2=>$_POST["event"],
	3=>$_POST["day"]
);
?>
<!DOCTYPE>
<html>
	<head>
	</head>
	<body>
		<form method="post" enctype="multipart/form-data">
			<!--Поля ввода для имени, места, куда приглашают, и даты со своими идентификаторами-->
			<input type="text" name="name"/>
			<input type="text" name="event"/>
			<input type="text" name="day"/>
			<!--Отправка данных из полей ввода в массив-->
			<input type="submit" value="Отправить"/>
		</form>
		<!--Строки получают данные переменных и выводят их-->
		<p><?php echo "Уважаемый (ая)"." ".$data[1]."!" ?></p>
		<p><?php echo "Приглашаем Вас"." ".$data[2]."." ?></p>
		<p><?php echo "Дата события:"." ".$data[3]." мая." ?></p>
		<p>С уважением, Василий.</p>
	</body>
</html>