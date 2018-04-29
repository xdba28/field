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
			if($c == 0 || $c == 1) continue;
			if($list[$c] == 'index.php') continue;
			echo '<a href="'.$list[$c].'">'.$list[$c].'</a><br>';
		}
		?>
	</body>
</html>