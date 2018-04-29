<?php
if(isset($_POST['sbt']))
{
	$data_array = $_POST['post'];
}
else
{
	header('Location: index.php');
}
print_r($data_array);

?>