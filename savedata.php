<?php
$con = mysqli_connect('localhost','root','','signal') or die('database not connected');
$a=$_POST['l1'];
$ga=$_POST['gl1'];
$ya=$_POST['yl1'];
$b=$_POST['l2'];
$gb=$_POST['gl2'];
$yb=$_POST['yl2'];
$c=$_POST['l3'];
$gc=$_POST['gl3'];
$yc=$_POST['yl3'];
$d=$_POST['l4'];
$gd=$_POST['gl4'];
$yd=$_POST['yl4'];
if(!empty($a)){
	$sql = "UPDATE `data_store` SET `light_no`='$a',`y_light`='$ya',`g_light`='$ga' WHERE  light = 'a' ";
	if (mysqli_query($con, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
}
if (!empty($b)) {
	$sql = "UPDATE `data_store` SET `light_no`='$b',`y_light`='$yb',`g_light`='$gb' WHERE  light = 'b' ";
	if (mysqli_query($con, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
}
if (!empty($c)) {
	$sql = "UPDATE `data_store` SET `light_no`='$c',`y_light`='$yc',`g_light`='$gc' WHERE  light = 'c' ";
	if (mysqli_query($con, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
}
if (!empty($d)) {
	$sql = "UPDATE `data_store` SET `light_no`='$d',`y_light`='$yd',`g_light`='$gd' WHERE  light = 'd' ";
	if (mysqli_query($con, $sql)) {
		echo json_encode(array("statusCode"=>200));
	} 
	else {
		echo json_encode(array("statusCode"=>201));
	}
}
?>