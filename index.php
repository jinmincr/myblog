<!doctype html>
<?php 
session_start();
if(isset($_SESSION['views'])){
  $_SESSION['views']=$_SESSION['views']+1;
}else{
  $_SESSION['views']=1;
}
?>
<html>
<head>
<meta charset="utf-8">
<title>My blog</title>
<link rel="stylesheet" href="css/layout.css" />

<?php
include('head.php');
?>

<div id="container" class="clear">
    <div id="left_nav">	
    	<div id="autor"></div>
        <div class="user_info">
            <h4>Michelle</h4>
            <p>访问量：<?php echo $_SESSION['views']; ?>
            </p>
        </div>
        <div class="search">
            <form action="#" method="post">
                <input id="s" type="text" name="search" value="Search" onFocus="if(this.value=='Search'){this.value = ''}" onBlur="if(this.value==''){this.value = 'Search'}" />
                <span class="s_bg"></span>
            </form>
        </div>
       
        <section id="time">
            <h2>日期</h2>
            <ul>
                <li class="level1">
                	<a href="#">2014</a>
                    <ul class="level2">
                    	<li><a href="#">12月</a></li>
                		<li><a href="#">11月</a></li>
                		<li><a href="#">10月</a></li>
                        <li><a href="#">9月</a></li>
                        <li><a href="#">8月</a></li>                       
                    </ul>
                </li>
                <li class="level1">
                	<a href="#">2013</a>
                    <ul class="level2">
                    	<li><a href="#">7月</a></li>
                    	<li><a href="#">6月</a></li>
                		<li><a href="#">5月</a></li>
                		<li><a href="#">4月</a></li>
                    </ul>
                </li>
                <li class="level1">
                	<a href="#">2012</a>
                    <ul class="level2">
                    	<li><a href="#">3月</a></li>
                		<li><a href="#">2月</a></li>
                		<li><a href="#">1月</a></li>
                    </ul>
                </li>
            </ul>
        </section>
        
        <section id="catalogue">
            <h2>标签</h2>
            <ul>
                <li><a href="#">生活</a></li>
                <li><a href="#">情感</a></li>
                <li><a href="#">技术</a></li>
                <li><a href="#">动漫</a></li>
            </ul>
        </section>
    </div>
    
    <div id="content">
        <article>
            <div class="date">
                <span class="month">July</span>
                <span class="day">26</span>
                <span class="year">2014</span>
            </div>
            <h1><a href="#">一棵开花的树</a></h1>
            <p>如何让你遇见我
在我最美丽的时刻 为这
我已在佛前求了五百年
求佛让我们结一段尘缘
佛于是把我化作一棵树
长在你必经的路旁
阳光下慎重地开满了花
朵朵都是我前世的盼望
当你走近 请你细听
那颤抖的叶是我等待的热情
而当你终于无视地走过
在你身后落了一地的
朋友啊那不是花瓣
那是我凋零的心</p>
            <div class="info">
                <ul>
                    <li><a class="info_1" href="javascript:;" onClick=""></a></li>
                    <li><a class="info_2" href="#"></a></li>
                    <li><a class="info_3" href="#"></a></li>
                </ul>
            </div>
        </article>
        <article>
            <div class="date">
                <span class="month">July</span>
                <span class="day">26</span>
                <span class="year">2014</span>
            </div>
            <h1><a href="#">语录</a></h1>
            <p>1、社会很险恶，但也很善良，不要因为社会对你的背叛而去背叛社会。</p>
            <p>2、人总会犯错，你要做的不是拿自己的错误惩罚自己，而是借自己的错误提升自己。</p>
            <p>3、当你觉得无聊就应该开始学习。</p>
            <p>4、常常觉得悲伤难过，那是你自己刻意把自己推向了悲伤的一方，其实你可以很快乐。</p>
            <p>5、自己不上心的事情别指望别人替你上心。</p>
            <div class="info">
                <ul>
                    <li><a class="info_1" href="javascript:;" onClick=""></a></li>
                    <li><a class="info_2" href="#"></a></li>
                    <li><a class="info_3" href="#"></a></li>
                </ul>
            </div>
        </article>
        <article>
            <div class="date">
                <span class="month">July</span>
                <span class="day">26</span>
                <span class="year">2014</span>
            </div>
            <h1><a href="#">HTML标签的嵌套规则</a></h1>
            <p>1. 块元素可以包含内联元素或某些块元素，但内联元素却不能包含块元素，它只能包含其它的内联元素.</p>
            <p>2.有几个特殊的块级元素只能包含内嵌元素，不能再包含块级元素，这几个特殊的标签是：
h1、h2、h3、h4、h5、h6、p、dt</p>
            <p>3. 块级元素与块级元素并列、内嵌元素与内嵌元素并列</p>
            <div class="info">
                <ul>
                    <li><a class="info_1" href="javascript:;" onClick=""></a></li>
                    <li><a class="info_2" href="#"></a></li>
                    <li><a class="info_3" href="#"></a></li>
                </ul>
            </div>
        </article>
        
        <div class="pages">
            <a href="#"></a>
            
        </div>
    </div>
</div>

</body>
<script src="js/jquery-1.11.1.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.transit.min.js"></script>
<script type="text/javascript" src="js/jquery.textanimation.js"></script>
<script src="js/main.js" type="text/javascript" ></script>

</html>
