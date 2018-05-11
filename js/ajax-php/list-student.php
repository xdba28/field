<?php
include('../../db_con_i.php');
$count = $_POST['data'];
$get_student = $mysqli->query("SELECT stu_fname FROM sis_student LIMIT 1")
				or die($mysqli->error);
$res = $get_student->fetch_array();
echo $res[$count];
?>