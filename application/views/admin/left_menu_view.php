<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">

<HEAD>
<TITLE>ECSHOP Menu</TITLE>
<META content="text/html; charset=utf-8" http-equiv=Content-Type><LINK 
rel=stylesheet type=text/css href="<?php echo base_url();?>css/general.css">
<SCRIPT language=JavaScript>
<!--
var noHelp   = "<p align='center' style='color: #666'>暂时还没有该部分内容</p>";
var helpLang = "zh_cn";
//-->
</SCRIPT>

<STYLE type=text/css>BODY {
	BACKGROUND: #80bdcb
}
#tabbar-div {
	PADDING-LEFT: 10px; BACKGROUND: #278296; HEIGHT: 21px; PADDING-TOP: 0px
}
#tabbar-div P {
	MARGIN: 1px 0px 0px
}
.tab-front {
	PADDING-BOTTOM: 4px; LINE-HEIGHT: 20px; PADDING-LEFT: 18px; PADDING-RIGHT: 15px; BACKGROUND: #80bdcb; CURSOR: pointer; FONT-WEIGHT: bold; BORDER-RIGHT: #335b64 2px solid; PADDING-TOP: 4px
}
.tab-back {
	PADDING-BOTTOM: 4px; LINE-HEIGHT: 20px; PADDING-LEFT: 18px; PADDING-RIGHT: 15px; COLOR: #f4fafb; CURSOR: pointer; PADDING-TOP: 4px
}
.tab-hover {
	PADDING-BOTTOM: 4px; LINE-HEIGHT: 20px; PADDING-LEFT: 18px; PADDING-RIGHT: 15px; BACKGROUND: #2f9db5; COLOR: #f4fafb; CURSOR: pointer; PADDING-TOP: 4px
}
#top-div {
	TEXT-ALIGN: center; PADDING-BOTTOM: 2px; MARGIN: 5px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; BACKGROUND: #bbdde5; PADDING-TOP: 3px
}
#main-div {
	BORDER-BOTTOM: #345c65 1px solid; BORDER-LEFT: #345c65 1px solid; PADDING-BOTTOM: 5px; MARGIN: 5px; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; BACKGROUND: #fff; BORDER-TOP: #345c65 1px solid; BORDER-RIGHT: #345c65 1px solid; PADDING-TOP: 5px
}
#menu-list {
	PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px
}
#menu-list UL {
	PADDING-BOTTOM: 0px; LIST-STYLE-TYPE: none; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; COLOR: #335b64; PADDING-TOP: 0px
}
#menu-list LI {
	LINE-HEIGHT: 16px; PADDING-LEFT: 16px; CURSOR: pointer
}
#main-div A:visited {
	COLOR: 
}
#menu-list A:link {
	COLOR: 
}
#menu-list A:hover {
	COLOR: 
}
#menu-list A:active {
	COLOR: #eb8a3d
}
.explode {
	BACKGROUND: url(<?php echo base_url();?>images/menu_minus.gif) no-repeat 0px 3px; FONT-WEIGHT: bold
}
.collapse {
	BACKGROUND: url(<?php echo base_url();?>images/menu_plus.gif) no-repeat 0px 3px; FONT-WEIGHT: bold
}
.menu-item {
	BACKGROUND: url(<?php echo base_url();?>images/menu_arrow.gif) no-repeat 0px 3px; FONT-WEIGHT: normal
}
#help-title {
	PADDING-BOTTOM: 0px; MARGIN: 5px 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; COLOR: #000080; FONT-SIZE: 14px; PADDING-TOP: 0px
}
#help-content {
	PADDING-BOTTOM: 0px; MARGIN: 0px; PADDING-LEFT: 0px; PADDING-RIGHT: 0px; PADDING-TOP: 0px
}
.tips {
	COLOR: #cc0000
}
.link {
	COLOR: #000099
}
</STYLE>

<META name=GENERATOR content="MSHTML 9.00.8112.16437"></HEAD>
<BODY>
<DIV id=tabbar-div>
<P><SPAN 
style="PADDING-BOTTOM: 3px; PADDING-LEFT: 5px; PADDING-RIGHT: 5px; FLOAT: right; PADDING-TOP: 3px"><A 
href="javascript:toggleCollapse();"><IMG id=toggleImg border=0 alt=闭合 
src="<?php echo base_url();?>images/menu_minus.gif" width=9 height=9></A></SPAN> <SPAN 
id=menu-tab class=tab-front>菜单</SPAN> </P></DIV>
<DIV id=main-div>
<DIV id=menu-list>

<UL>
  <LI class=explode name="menu" key="02_cat_and_goods">新闻谍报
  <UL>
     <LI class=menu-item><A 
    href="<?php echo site_url('admin/list_intelligence');?>" 
    target=main-frame>谍报管理</A> </LI>
    <LI class=menu-item><A 
    href="<?php echo site_url('admin/list_news');?>" 
    target=main-frame>评测列表</A> 
 </LI>
</UL>

  <LI class=explode name="menu" key="03_promotion">网站管理
  <UL>
  	<LI class=menu-item><A 
    href="<?php echo site_url('admin/buliding_manage');?>" 
    target=main-frame>电脑城管理</A> </LI>
    <LI class=menu-item><A 
    href="<?php echo site_url('admin/list_advertiser');?>" 
    target=main-frame>商家列表</A> 
    <LI class=menu-item><A 
    href="<?php echo site_url('admin/add_advertiser');?>" 
    target=main-frame>增加商家</A> 
    <LI class=menu-item><A 
    href="<?php echo site_url('admin/add_excel_advertiser');?>" 
    target=main-frame>导入商家</A> 
 	<LI class=menu-item><A 
    href="<?php echo site_url('admin/list_friendlink');?>" 
    target=main-frame>友情链接</A> 
 </LI>
 
 
 </UL>

 </DIV>
<DIV style="DISPLAY: none" id=help-div>
<H1 id=help-title></H1>
<DIV id=help-content></DIV></DIV></DIV>
<SCRIPT type=text/javascript src="<?php echo base_url();?>js/global.js"></SCRIPT>

<SCRIPT type=text/javascript src="<?php echo base_url();?>js/utils.js"></SCRIPT>

<SCRIPT type=text/javascript src="<?php echo base_url();?>js/transport.js"></SCRIPT>

<SCRIPT language=JavaScript>
<!--
var collapse_all = "闭合";
var expand_all = "展开";
var collapse = true;

function toggleCollapse()
{
  var items = document.getElementsByTagName('LI');
  for (i = 0; i < items.length; i++)
  {
    if (collapse)
    {
      if (items[i].className == "explode")
      {
        toggleCollapseExpand(items[i], "collapse");
      }
    }
    else
    {
      if ( items[i].className == "collapse")
      {
        toggleCollapseExpand(items[i], "explode");
        ToggleHanlder.Reset();
      }
    }
  }

  collapse = !collapse;
  document.getElementById('toggleImg').src = collapse ? '<?php echo base_url();?>images/menu_minus.gif' : '<?php echo base_url();?>images/menu_plus.gif';
  document.getElementById('toggleImg').alt = collapse ? collapse_all : expand_all;
}

function toggleCollapseExpand(obj, status)
{
  if (obj.tagName.toLowerCase() == 'li' && obj.className != 'menu-item')
  {
    for (i = 0; i < obj.childNodes.length; i++)
    {
      if (obj.childNodes[i].tagName == "UL")
      {
        if (status == null)
        {
          if (obj.childNodes[1].style.display != "none")
          {
            obj.childNodes[1].style.display = "none";
            ToggleHanlder.RecordState(obj.getAttribute("key"), "collapse");
            obj.className = "collapse";
          }
          else
          {
            obj.childNodes[1].style.display = "block";
            ToggleHanlder.RecordState(obj.getAttribute("key"), "explode");
            obj.className = "explode";
          }
          break;
        }
        else
        {
          if( status == "collapse")
          {
            ToggleHanlder.RecordState(obj.getAttribute("key"), "collapse");
            obj.className = "collapse";
          }
          else
          {
            ToggleHanlder.RecordState(obj.getAttribute("key"), "explode");
            obj.className = "explode";
          }
          obj.childNodes[1].style.display = (status == "explode") ? "block" : "none";
        }
      }
    }
  }
}
document.getElementById('menu-list').onclick = function(e)
{
  var obj = Utils.srcElement(e);
  toggleCollapseExpand(obj);
}

document.getElementById('tabbar-div').onmouseover=function(e)
{
  var obj = Utils.srcElement(e);

  if (obj.className == "tab-back")
  {
    obj.className = "tab-hover";
  }
}

document.getElementById('tabbar-div').onmouseout=function(e)
{
  var obj = Utils.srcElement(e);

  if (obj.className == "tab-hover")
  {
    obj.className = "tab-back";
  }
}

document.getElementById('tabbar-div').onclick=function(e)
{
  var obj = Utils.srcElement(e);

 // var mnuTab = document.getElementById('menu-tab');
  var hlpTab = document.getElementById('help-tab');
  var mnuDiv = document.getElementById('menu-list');
  var hlpDiv = document.getElementById('help-div');

  //if (obj.id == 'menu-tab')
//  {
//    mnuTab.className = 'tab-front';
//    hlpTab.className = 'tab-back';
//    mnuDiv.style.display = "block";
//    hlpDiv.style.display = "none";
//  }

  if (obj.id == 'help-tab')
  {
    mnuTab.className = 'tab-back';
    hlpTab.className = 'tab-front';
    mnuDiv.style.display = "none";
    hlpDiv.style.display = "block";

    loc = parent.frames['main-frame'].location.href;
    pos1 = loc.lastIndexOf("/");
    pos2 = loc.lastIndexOf("?");
    pos3 = loc.indexOf("act=");
    pos4 = loc.indexOf("&", pos3);

    filename = loc.substring(pos1 + 1, pos2 - 4);
    act = pos4 < 0 ? loc.substring(pos3 + 4) : loc.substring(pos3 + 4, pos4);
    loadHelp(filename, act);
  }
}

/**
 * 创建XML对象
 */
function createDocument()
{
  var xmlDoc;

  // create a DOM object
  if (window.ActiveXObject)
  {
    try
    {
      xmlDoc = new ActiveXObject("Msxml2.DOMDocument.6.0");
    }
    catch (e)
    {
      try
      {
        xmlDoc = new ActiveXObject("Msxml2.DOMDocument.5.0");
      }
      catch (e)
      {
        try
        {
          xmlDoc = new ActiveXObject("Msxml2.DOMDocument.4.0");
        }
        catch (e)
        {
          try
          {
            xmlDoc = new ActiveXObject("Msxml2.DOMDocument.3.0");
          }
          catch (e)
          {
            alert(e.message);
          }
        }
      }
    }
  }
  else
  {
    if (document.implementation && document.implementation.createDocument)
    {
      xmlDoc = document.implementation.createDocument("","doc",null);
    }
    else
    {
      alert("Create XML object is failed.");
    }
  }
  xmlDoc.async = false;

  return xmlDoc;
}

//菜单展合状态处理器
var ToggleHanlder = new Object();

Object.extend(ToggleHanlder ,{
  SourceObject : new Object(),
  CookieName   : 'Toggle_State',
  RecordState : function(name,state)
  {
    if(state == "collapse")
    {
      this.SourceObject[name] = state;
    }
    else
    {
      if(this.SourceObject[name])
      {
        delete(this.SourceObject[name]);
      }
    }
    var date = new Date();
    date.setTime(date.getTime() + 99999999);
    document.setCookie(this.CookieName, this.SourceObject.toJSONString(), date.toGMTString());
  },

  Reset :function()
  {
    var date = new Date();
    date.setTime(date.getTime() + 99999999);
    document.setCookie(this.CookieName, "{}" , date.toGMTString());
  },

  Load : function()
  {
    if (document.getCookie(this.CookieName) != null)
    {
      this.SourceObject = eval("("+ document.getCookie(this.CookieName) +")");
      var items = document.getElementsByTagName('LI');
      for (var i = 0; i < items.length; i++)
      {
        if ( items[0].getAttribute("name") == "menu")
        {
          for (var k in this.SourceObject)
          {
            if ( typeof(items[i]) == "object")
            {
              if (items[i].getAttribute('key') == k)
              {
                toggleCollapseExpand(items[i], this.SourceObject[k]);
                collapse = false;
              }
            }
          }
        }
     }
    }
    document.getElementById('toggleImg').src = collapse ? '<?php echo base_url();?>images/menu_minus.gif' : 'images/menu_plus.gif';
    document.getElementById('toggleImg').alt = collapse ? collapse_all : expand_all;
  }
});

ToggleHanlder.CookieName += "_1";
//初始化菜单状态
ToggleHanlder.Load();

//-->
</SCRIPT>
</BODY>
</HTML>
