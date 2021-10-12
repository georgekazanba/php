<!DOCTYPE>
<html>
	<head>
	</head>
	<body>
		<!--создаётся шапка-->
		<header style="background-color:yellow;height:auto;display:flex;justify-content:space-between;font-size:28px">
			<?php
				//массив с названиями якорей
				$menu=array("Home", "About Us", "Among Us", "Contact");
				//переменная, равная кол-ву элементов в массиве $menu, нужная для работы цикла
				$k=count($menu);
				//номер элемента массива, который будет увеличиваться на единицу в цикле
				$i=0;
				//пока $i строго меньше кол-ва элементов массива...
				for ($i; $i<$k; $i++){
					//если $i равна нулю, то выводится гиперссылка, ведущая на главную страницу, названная "Home"
					if ($i==0){
						echo "<a href='index.php'>Home</a>";
					//в остальных случаях выводится гиперссылка, ведущая на страницу, файл с которой назван как элемент массива $menu под номером $i, а также сам текст гиперссылки - это  элемент массива $menu под номером $i
					}else{
						echo "<a href='", $menu[$i], ".php'>", $menu[$i], "</a>";
					}
				}
			?>
		</header>
	</body>
</html>