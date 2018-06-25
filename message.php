<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>My blog</title>
<link rel="stylesheet" href="css/layout.css" />
<link rel="stylesheet" href="css/message.css" />

<?php
include('head.php');
?>

<div id="container" class="clear">
    <div id="msg_show"></div>
    
    <div id="m_page"></div>
    
    <div class="big_form">
    <form id="msg_form" action="#" method="post">
        <div>昵称:<input id="name" name="name" type="text" /></div>
        <div>邮箱:<input id="email" name="email" type="text" />
        <span>*</span></div>
        <textarea id="comment" name="comment" rows="6" cols="40"></textarea><br />
        <input id="msg_sent" type="submit" value="提交" />      
    </form>
</div>
    
</div> 
<script src="js/jquery-1.11.1.js" type="text/javascript"></script>
<script>
$(function(){
	$.post("new_msg.php",function(data){
		$('#msg_show').append(data);
	});
	$('#name, #email').blur(function(){
		$(this).parent().find('.error').remove();
		if($(this).is('#name')){
			var reg = /^[a-zA-Z0-9]*$/
			if(!reg.test(this.value)){
				var errorMsg = "只允许字母和数字";
				$(this).after("<span class='error'>"+errorMsg+"</span>");
			}
		}
		if($(this).is('#email')){
			var reg = /^[\w-]+(\.[\w-]+)*@[\w-]+(\.[\w-]+)+$/
			if(!reg.test(this.value)){
				var errorMsg = "请输入正确的邮箱";
				$(this).next().after("<span class='error'>"+errorMsg+"</span>");
			}
		}
	}).keyup(function(){
		$(this).triggerHandler("blur");
	}).focus(function(){
		$(this).triggerHandler("blur");
	});	
	
	$('#msg_sent').click(function(){
		$('#name,#email').trigger("blur");
		var num = $('.error').length;
		if(num){
			alert("请输入正确的昵称和密码");
			return false;
		}else{
			$.post("insert_msg.php",{
				name: $('#name').val(),
				email: $('#email').val(),
				comment: $('#comment').val()
			},function(data){
				$('#comment').val('');
				$('#msg_show').html('').append(data);
			});
		}return false;
	});
});

</script>
<script type="text/javascript" src="js/jquery.transit.min.js"></script>
<script type="text/javascript" src="js/jquery.textanimation.js"></script>
<script src="js/main.js" type="text/javascript" ></script>
</body>
</html>