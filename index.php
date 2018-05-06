<html>
	<head>
		<title>Field Directory</title>
	</head>
	<body>
		<h3>Pages of Field</h3>	
		<?php
		$list = scandir("../field");
		$dir_count = count($list);
		for($c = 0;$c<$dir_count;$c++)
		{
			$var = $list[$c];
			if($c == 0 || $c == 1 || $var == 'index.php' || $var[0] == '.') continue;
			echo '&nbsp;<a href="'.$list[$c].'">'.$list[$c].'</a><br>';
		}
		?>
	</body>
</html>