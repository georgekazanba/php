<?php
$day=$_POST["day"];
$a=" ";
switch($day){
	case 1: $a="Это рабочий день";
		break;
	case 2: $a="Это рабочий день";
		break;
	case 3: $a="Это рабочий день";
		break;
	case 4: $a="Это рабочий день";
		break;
	case 5: $a="Это рабочий день";
		break;
	case 6: $a="Это выходной день";
		break;
	case 7: $a="Это выходной день";
		break;
	default: $a="Неизвестный день";
		break;
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
