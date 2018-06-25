<?php 
header("Content-type:text/html;charset=utf-8");
date_default_timezone_set("PRC");
?>

<?php
$flag = true;
$name = $email = $comment = '';
$nameErr = $emailErr = $commentErr = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	function test_input($data){
		$data=trim($data);
		$data=stripslashes($data);
		$data=htmlspecialchars($data);
		return $data;
	}
	
	if(empty($_POST['name'])){
		$name = "匿名用户";
	}else{
		$name=test_input($_POST['name']);
		if (!preg_match("/^[a-zA-Z0-9]*$/",$name)) {
			$nameErr = "只允许字母和数字"; 
			$flag = false;
		}
	}
	
	if (empty($_POST["email"])) {
		$emailErr = "邮箱是必填的";
		$flag = false;
	} else {
		$email = test_input($_POST["email"]);
		if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
			$emailErr = "无效的 email 格式"; 
			$flag = false;
		}
	}
	
	if (empty($_POST["comment"])) {
		$comment = "";
	} else {
		$comment = test_input($_POST["comment"]);
	}	
	
	if(!$flag){
		echo '输入有误';
		exit;
	}else{
		$con = mysql_connect('localhost','root','226361');
		if (!$con){
		  die('Could not connect: ' . mysql_error());
		}
		mysql_select_db("blog", $con);
		$date = date('Y-m-d H:i');
		mysql_query("set names 'utf8'");
		//$auto = "alter table message auto_increment = max(msgid)";
		//mysql_query($auto,$con);
		$sql = "insert into message values('','".$name."','".$email."','".$comment."','".$date."')";
		mysql_query($sql,$con);
		
		require('new_msg.php');
       
		
	}
}
?>
