<!doctype html>
<?php session_start(); ?>
<html>
<head>
<meta charset="utf-8">
<title>My blog</title>
<link rel="stylesheet" href="css/layout.css" />
<link rel="stylesheet" href="css/about.css" />

<?php
include('head.php');
?>

<div id="container" class="clear">
	<div id="about">
    	<a id="me_face" href="#"><img src="images/tx.jpg"></a>
        <ul id="me_nav">
            <li>基本资料</li>
            <li>关于我</li>
            <li>联系方式</li>
        </ul>
        <div id="me_c">
        	<h1>金敏</h1>
            <p>访问量：<span><?php echo $_SESSION['views']; ?></span></p>
        	<div class="me_c1">                     
                <dl>
                  <dt>个人信息</dt>
                  <dd>性别：<span>女</span></dd>
                  <dd>生日：<span>1990-10-14</span></dd>
                  <dd>家乡：<span>南通</span></dd>
                </dl>
                <dl>
                  <dt>教育信息</dt>
                  <dd>大学：<span>南京大学</span></dd>
                  <dd>专业：<span>软件工程</span></dd>
                </dl>
            </div>
            <div class="me_c2">
                <div class="me_self">
                	<p><span><strong>责任心</strong></span><span>热爱互联网</span><span>喜欢<strong>观察生活</strong></span></p>
                    <p><span><strong>沟通能力</strong>不错</span><span>未雨绸缪</span><span><strong>耐心</strong></span><span>习惯为产品反馈建议</span></p>
                    <p><span>挑战算什么</span><span><strong>团队意识</strong>很重要</span></p>
                    <p><span>人需要一点<strong>压力</strong></span></p>
                </div>
                <p class="me_sigh"></p>
                
                <div id="me_img">
                	<ul class="me_i1">
                		<li><img src="images/me1.jpg"/></li>
                    	<li style="display:none;"><img src="images/me2.jpg"/></li>
                    	<li style="display:none;"><img src="images/me3.jpg"/></li>
                    </ul>
                    <ul class="me_i2">
                    	<li></li>
                        <li></li>
                        <li class="me_selected"></li>
                    </ul>
                    <div id="prev"></div>
                    <div id="next"></div>
                </div>
            </div>
            <div class="me_c1">
            	<dl>
                  <dt>Contact me</dt>
                  <dd>Tel：<span>12345678909</span></dd>
                  <dd>E-mail：<span>jinmincr@163.com</span></dd>
                  <dd>博客：<span>XXX.com</span></dd>
                </dl>
            </div>
        </div>
    </div>
</div>
</body>
<script src="js/jquery-1.11.1.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.transit.min.js"></script>
<script type="text/javascript" src="js/jquery.textanimation.js"></script>
<script src="js/main.js" type="text/javascript" ></script>
</html>
