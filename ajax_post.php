<?php	
if(isset($_POST))
{
	if(isset($_POST['brand']))
	{
		foreach($_POST['brand'] as $brand)
		{
			if(isset($_POST['type']))
			{
				foreach($_POST['type'] as $type)
				{
					foreach($_POST['color'] as $color)
					{
						echo $brand .' | '. $type .' | '. $color . '<br>';
					}
				}
			}
		}
	}
}
// if(isset($_POST))
// {
// 	print_r($_POST);
// 	echo '<hr>';
// 	if(isset($_POST['brand']))
// 	{
// 		$n_brand = count($_POST['brand']);
// 		for($b=0;$b<$n_brand;$b++)
// 		{
// 			echo $_POST['brand'][$b];
// 			echo ' | ';
	
// 			if(isset($_POST['type']))
// 			{
// 				$n_num = count($_POST['type']);				
// 				for($a=0;$a<$n_num;$a++)
// 				{
// 					echo $_POST['type'][$a];
// 					echo ' | ';
// 				}
// 			}
	
// 			if(isset($_POST['color']))
// 			{
// 				$n_color = count($_POST['color']);
// 				for($c=0;$c<$n_color;$c++)
// 				{
// 					echo $_POST['color'][$c];
// 					echo ' | ';
// 				}
// 			}
// 			echo '<br>';
// 		}
// 	}
// }
?>