// JavaScript Document
window.onload = function(){
	page({
		id:"m_page",
		nowNum:1,
		allNum:10,
		callback:function(){}
	});
};

function page(opt){
	if(!opt.id) return false;
	
	var div = document.getElementById(opt.id);
	var nowNum = opt.nowNum || 1;
	var allNow = opt.allNum || 5;
	var callback = opt.callback || function(){};
	
	if(nowNum>=4 && allNow>=6){
		var a = document.createElement("a");
		a.setAttribute("herf","#1");
		a.innerHTML = "首页";	
		div.appendChild(a);
	}
	
	if(nowNum>=2){
		var a = document.createElement("a");
		a.setAttribute("herf","#"+(nowNum-1));
		a.innerHTML = "上一页";	
		div.appendChild(a);
	}
	
	if(allNum<=5){
		for(var i=1;i<=allNum;i++){
			var a = document.createElement("a");
			a.setAttribute("herf","#"+i);
			a.innerHTML = i;	
			if(i==nowNum){
				a.className = "currentPage"; 
			}else{
				a.className = "";
			}
			div.appendChild(a);
		}
	}else{
		for(var i=1;i<=5;i++){
			var a = document.createElement("a");
			if(nowNum==1 || nowNum==2){
				a.setAttribute("herf","#"+i);
				a.innerHTML = i;	
				if(i==nowNum){
					a.className = "currentPage"; 
				}else{
					a.className = "";
				}
			}else if((allNum-nowNum)==0 || (allNum-nowNum)==1){
				a.setAttribute("herf","#"+(allNum-5+i));
				a.innerHTML = allNum - 5 + i;
				if((allNum - 5 + i)==nowNum){
					a.className = "currentPage"; 
				}else{
					a.className = "";
				}			
			}else{
				a.setAttribute("herf","#"+(nowNum-3+i));
				a.innerHTML = nowNum-3+i;
				if(i = 3){
					a.className = "currentPage"; 
				}else{
					a.className = "";
				}	
			}
			div.appendChild(a);
		}	
	}
	
	if((allNum - nowNum) >= 1){
		var a = document.createElement("a");
		a.setAttribute("herf","#"+(nowNum+i));
		a.innerHTML = "下一页";
		div.appendChild(a);
	}
	
	if((allNum - nowNum) >= 3 && allNum>=6){
		var a = document.createElement("a");
		a.setAttribute("herf","#"+allNum);
		a.innerHTML = "尾页";
		div.appendChild(a);
	}
	
	
	var oA = div.getElementsByTagName('a');
	for(var i=0;i<oA.length;i++){
		oA[i].click = function(){
			var nowNum = parseInt(this.getAttribute('herf').substring(1));
			div.innerHTML = '';
			page({
				id:opt.id,
				nowNum:nowNum,
				allNum:allNum,
				callback:callback
			});
			return false;
		};
	}
}