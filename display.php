<?php

$con = mysqli_connect('localhost','root','','signal') or die('database not connected');
$sql = "SELECT * FROM `data_store` ORDER BY `light_no` ASC";
$showresult = mysqli_query($con, $sql);
while($row = mysqli_fetch_assoc($showresult))
{
	$results[] = $row;
} 
echo json_encode($results);


?>