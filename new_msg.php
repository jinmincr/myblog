<?php 
header("Content-type:text/html;charset=utf-8");
date_default_timezone_set("PRC");
?>

<?php
$con = mysql_connect('localhost','root','226361');
if (!$con){
  die('Could not connect: ' . mysql_error());
}
mysql_select_db("blog", $con);
mysql_query("set names 'utf8'");
$sql1 = "select * from message order by msgid desc limit 8;";
$result = mysql_query($sql1,$con);
while($row = mysql_fetch_array($result)){
	echo '<article class="clear">
<div class="guest_head"><img src="images/user1.jpg" /></div>
<div class="guest">
	<div class="guest_top">';
	echo '<span class="floor">'.$row['msgid'].'楼</span>';
	echo '<span class="guest_name">'.$row['m_name'].'</span></div>';
	echo '<div class="guest_content">'.$row['comment'].'</div>';
	echo '<div class="guest_menu">
		<span class="guest_time">'.$row['m_date'].'</span>
		<a href="javascript:;">引用</a>
	</div></div></article>';
}          
mysql_close($con);
		
?>
