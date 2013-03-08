var xmlhttp;

function ajax_left(id){
	host = window.location.host;
	url='http://'+window.location.host;
	url +='/index.php/welcome/advertiser/';
	url +=id;
	xmlhttp=null;
	if (window.XMLHttpRequest){// code for all new browsers
	  	xmlhttp=new XMLHttpRequest();
	}else if (window.ActiveXObject){// code for IE5 and IE6
	  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	if (xmlhttp!=null){
	  	xmlhttp.onreadystatechange=state_Change;
	  	xmlhttp.open("GET",url,true);
	  	xmlhttp.send(null);
	}else{
	  alert("你的浏览器不支持XMLHTTP对象。");
	}
}

function state_Change(){

	if (xmlhttp.readyState==4){// 4 = "�첽����ɹ�"
		if (xmlhttp.status==200){// 200 = OK
			var o = document.getElementById("maincontent");
			var str = xmlhttp.responseText;
			o.innerHTML = str;
		}else{
			alert("服务器出错，异步请求失败！");
		}
	}
}


