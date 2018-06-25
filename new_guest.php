<?php 
header("Content-type:text/html;charset=utf-8");
date_default_timezone_set("PRC");
?>

<?php
$name = $_POST['name'];
$email = $_POST['email'];
if(empty($name)){
	$name = '匿名用户';
}
$con = mysql_connect('localhost','root','226361');
if (!$con){
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("blog", $con);
$date = date('Y-m-d H:i');
mysql_query("set names 'utf8'");
$sql = "insert into login values ('".$name."','".$email."','".$date."') on duplicate key update l_name = '".$name."',l_date = '".$date."'";
//insert into login values('".$name."','".$email."','".$date."')";
$result = mysql_query($sql,$con);
mysql_close($con);


?>