<?php
//создаётся массив из трёх массивов с тремя элементами в каждом
$array_odnom=array(
	array(1, 2, 3),
	array(2, 4, 6),
	array(3, 6, 9),
);
?>
<!DOCTYPE>
<html>
	<head>
	</head>
	<body>
		<!--В первой квадратной скобке задаётся элемент, из которого будет выбран элемент, номер которого задан во второй квадратной скобке-->
		<p><?php echo $array_odnom[0][0]." ".$array_odnom[0][1]." ".$array_odnom[0][2] ?></p>
		<p><?php echo $array_odnom[1][0]." ".$array_odnom[1][1]." ".$array_odnom[1][2] ?></p>
		<p><?php echo $array_odnom[2][0]." ".$array_odnom[2][1]." ".$array_odnom[2][2] ?></p>
	</body>
</html>