// JavaScript Document

$(document).ready(function(){
	//global
	$("header h1").textAnimation({
	    mode:"highlight",
	    baseColor: "#fff",
		highlightColor: "#2FFF5F",
		interval: 2600  
	});
	$("#p_style").textAnimation({
	    mode:"highlight",
		baseColor: "#999",
		interval: 2000		
	});
	
	$("a, input[type='button'], input[type='submit'], input[type='checkbox']").bind("focus",function(){
	if(this.blur){
	this.blur();
	}
	});
	
	//login

	//index
    $("article").hover(function(){
		$(this).find(".info").css("display","block");
	},function(){
		$(this).find(".info").css("display","none");
	});
	
	$(".level1>a").click(function(){
		$(this).addClass("current").next().toggle()
		.parent().siblings().children("a").removeClass("current")
		.next().hide();
		return false;
	});
	
	
	//picture
	$('#p_c li').hover(function(){
		$(this).find('.p_info').slideToggle("slow");
	});
	
	$('.p_tag').hover(function(){
		$(this).find('ul').toggle();
	});
	
	//about
	$('#me_face').click(function(){
		$(this).css("animation","none").addClass("change")
			   .animate({top:"0",left:"0"},1000,function(){
				   $(this).next().children().fadeIn("slow");
				   $('#me_c>h1').fadeIn();
				   $('#me_c>p').fadeIn();
				});
		showImg();
		return false;
	});
	
	$('#me_nav li').click(function(){
		$(this).addClass("selected").siblings().removeClass("selected");	
		var i = $(this).index();
		$('#me_c >div').eq(i).show().siblings().hide();
	});
	
	$('#me_c dt').click(function(){
		$(this).siblings().fadeToggle();
	});
	
	$('#me_img .me_i2 li').click(function(){
		$(this).addClass('me_selected').siblings().removeClass('me_selected');
		var i = $(this).index();
		$('#me_img .me_i1 li').eq(2-i).fadeIn().siblings().fadeOut();
	});
	
	
});


function insertAfter(newElement,targetElement) {
  var parent = targetElement.parentNode;
  if (parent.lastChild == targetElement) {
    parent.appendChild(newElement);
  } else {
    parent.insertBefore(newElement,targetElement.nextSibling);
  }
}

function addClass(element,value) {
  if (!element.className) {
    element.className = value;
  } else {
    newClassName = element.className;
    newClassName+= " ";
    newClassName+= value;
    element.className = newClassName;
  }
}

function highlight(){
	var navs = document.getElementById('nav');
	var links = navs.getElementsByTagName('a');
	var linkurl ="";
	for(var i=0;i<links.length;i++){
		linkurl = links[i].getAttribute('href');
		if(window.location.href.indexOf(linkurl)!=-1){
			links[i].className = "here";				
		}
		//if(window.location.href=="file:///E:/web/blog/about.html") showImg();
	}	
}
//index
/*function showArticle(temp){
	var index = temp.getAttribute('name');
	temp.setAttribute("href","daily_"+index+".html");
}*/

//picture


//about
function showImg(){
	var iNow = -1;
	var li = $('.me_i1 li');
	var timer = setInterval(auto,3000);
	var prev = document.getElementById("prev");
	var next = document.getElementById("next");
	
	function auto(){
		iNow++;
		if(iNow == li.length){
			iNow = 0;
		}
		$('.me_i2 li').eq(2-iNow).addClass('me_selected').siblings().removeClass('me_selected');
		$('.me_i1 li').eq(iNow).fadeIn().siblings().fadeOut();		
	}
	
	function autoPrev(){
		iNow--;
		if(iNow == -1){
			iNow = 2;
		}
		$('.me_i2 li').eq(2-iNow).addClass('me_selected').siblings().removeClass('me_selected');
		$('.me_i1 li').eq(iNow).fadeIn().siblings().fadeOut();
		
	}
	
	for(var i=0;i<li.length;i++){
		li[i].onmouseover = prev.onmouseover = next.onmouseover = function(){
			prev.style.display = 'block';
		    next.style.display = 'block';
		    clearInterval(timer);
		};
		
		li[i].onmouseout = prev.onmouseout = next.onmouseout = function(){
			prev.style.display = 'none';
			next.style.display = 'none';
			timer = setInterval(auto,3000);
		}
	}
	
	prev.onclick = function(){
		autoPrev();
	}; 
	next.onclick = function(){
		auto();
	};
}

function page(opt){

	if(!opt.id){return false;}
	
	var obj = document.getElementById(opt.id);
	
	var nowNum = opt.nowNum || 1;
	var allNum = opt.allNum || 5;
	//var callBack = opt.callBack || function(){};
	
	if( nowNum>=4 && allNum>=6 ){	
		var oA = document.createElement('a');
		oA.href = '#1';
		oA.innerHTML = '首页';
		obj.appendChild(oA);	
	}
	
	if(nowNum>=2){
		var oA = document.createElement('a');
		oA.href = '#' + (nowNum - 1);
		oA.innerHTML = '上一页';
		obj.appendChild(oA);
	}
	
	if(allNum<=5){
		for(var i=1;i<=allNum;i++){
			var oA = document.createElement('a');
			oA.href = '#' + i;
			oA.innerHTML = i;
			if(nowNum == i){
				oA.className = "currentPage";
			}
			else{
				oA.className = "";
			}
			obj.appendChild(oA);
		}	
	}
	else{	
		for(var i=1;i<=5;i++){
			var oA = document.createElement('a');						
			if(nowNum == 1 || nowNum == 2){				
				oA.href = '#' + i;
				oA.innerHTML = i;
				if(nowNum == i){
					oA.className = "currentPage";
				}
				else{
					oA.className = "";
				}
				
			}
			else if( (allNum - nowNum) == 0 || (allNum - nowNum) == 1 ){		
				oA.href = '#' + (allNum - 5 + i);	
				oA.innerHTML = allNum - 5 + i;		
				if((allNum - nowNum) == 0 && i==5){
					oA.className = "currentPage"; 
				}
				else if((allNum - nowNum) == 1 && i==4){
					oA.className = "currentPage"; 
				}
				else{
					oA.className = "";
				}					
			}
			else{
				oA.href = '#' + (nowNum - 3 + i);	
				oA.innerHTML = nowNum-3+i;			
				if(i==3){
					oA.className = "currentPage"; 
				}
				else{
					oA.className = "";
				}
			}
			obj.appendChild(oA);			
		}	
	}
	
	if( (allNum - nowNum) >= 1 ){
		var oA = document.createElement('a');
		oA.href = '#' + (nowNum + 1);
		oA.innerHTML = '下一页';
		obj.appendChild(oA);
	}
	
	if( (allNum - nowNum) >= 3 && allNum>=6 ){
		var oA = document.createElement('a');
		oA.href = '#' + allNum;
		oA.innerHTML = '尾页';
		obj.appendChild(oA);	
	}
	
	//callBack(nowNum,allNum);
	
	var aA = obj.getElementsByTagName('a');	
	for(var i=0;i<aA.length;i++){
		aA[i].onclick = function(){			
			var nowNum = parseInt(this.getAttribute('href').substring(1));			
			obj.innerHTML = '';			
			page({			
				id : opt.id,
				nowNum : nowNum,
				allNum : allNum,						
			});			
			return false;			
		};
	}
}

window.onload = function (){	
	highlight();
	page({
		id:"m_page",
		nowNum:1,
		allNum:10
	});
};
/*function DrawImage(Img,iWidth,iHeight){
	var image = new Image();
	image.src = $(this).parent().attr('href');
	var w = image.width;	
	var h = image.height;		
	if(w/h>=iWidth/iHeight){
		if(w>iWidth){
			this.width = iWidth;
			alert(this.width);		
			this.height = (iWidth*h)/w;
		}else{
			this.width = w;
			this.height = h;
		}
	}else{
		if(h>iHeight){
			this.width = (iHeight*w)/h;
			this.height = iHeight;
		}else{
			this.width = w;
			this.height = h;
		}
	}
	this.src = image.src;
}*/

