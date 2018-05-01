<html>
	<head>
	</head>
	<body>
		<h2>Pages of Directory Field</h2>	
		<?php
		$list = scandir("../field");
		$dir_count = count($list);
		for($c = 0;$c<$dir_count;$c++)
		{
			$var = $list[$c];
			if($c == 0 || $c == 1) continue;
			if($var == 'index.php') continue;
			if($var[0] == '.') continue;
			echo '<a href="'.$list[$c].'">'.$list[$c].'</a><br>';
		}
		?>
	</body>
</html>