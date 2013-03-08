<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML xmlns="http://www.w3.org/1999/xhtml">

<HEAD>
	<TITLE>管理中心 - 增加商家</TITLE>
	<META name=robots content="noindex, nofollow">
	<META content="text/html; charset=utf-8" http-equiv=Content-Type>
	<LINK rel=stylesheet type=text/css href="<?php echo base_url();?>css/general.css">
	<LINK rel=stylesheet type=text/css href="<?php echo base_url();?>css/main.css">
	<META name=GENERATOR content="MSHTML 9.00.8112.16437">
	<script language="javascript" >
	 /*  
	**    ==================================================================================================  
	**    类名：CLASS_LIANDONG_YAO  
	**    功能：多级连动菜单  
	**    
	**    作者：YAODAYIZI  
	**    ==================================================================================================  
	**/   
	  function CLASS_LIANDONG_YAO(array)
	  {
	   //数组，联动的数据源
	   this.array=array; 
	   this.indexName='';
	   this.obj='';
	   //设置子SELECT
	 // 参数：当前onchange的SELECT ID，要设置的SELECT ID
	      this.subSelectChange=function(selectName1,selectName2)
	   {
	   //try
	   //{
	    var obj1=document.all[selectName1];
	    var obj2=document.all[selectName2];
	    var objName=this.toString();
	    var me=this;
	  
	    obj1.onchange=function()
	    {
	     
	     me.optionChange(this.options[this.selectedIndex].value,obj2.id)
	    }
	   }
	   //设置第一个SELECT
	 // 参数：indexName指选中项,selectName指select的ID
	   this.firstSelectChange=function(indexName,selectName)  
	   {
	   this.obj=document.all[selectName];
	   this.indexName=indexName;
	   this.optionChange(this.indexName,this.obj.id)
	   }
	  
	  // indexName指选中项,selectName指select的ID
	   this.optionChange=function (indexName,selectName)
	   {
	    var obj1=document.all[selectName];
	    var me=this;
	    obj1.length=0;
	    obj1.options[0]=new Option("请选择",'');
	    for(var i=0;i<this.array.length;i++)
	    { 
	    
	     if(this.array[i][1]==indexName)
	     {
	     //alert(this.array[i][1]+" "+indexName);
	      obj1.options[obj1.length]=new Option(this.array[i][2],this.array[i][0]);
	     }
	    }
	   }
	   
	  }
  </script>
  <script type="text/javascript">function oCopy(obj){obj.select();js=obj.createTextRange();js.execCommand("Copy");};function sendtof(url){window.clipboardData.setData('Text',url);alert('复制地址成功，粘贴给你好友一起分享。');};function select_format(){var on=document.getElementById('fmt').checked;document.getElementById('site').style.display=on?'none':'';document.getElementById('sited').style.display=!on?'none':'';};var flag=false;function DrawImage(ImgD){var image=new Image();image.src=ImgD.src;if(image.width>0&&image.height>0){flag=true;if(image.width/image.height>=120/80){if(image.width>120){ImgD.width=120;ImgD.height=(image.height*120)/image.width;}else {ImgD.width=image.width;ImgD.height=image.height;};ImgD.alt=image.width+"×"+image.height;}else {if(image.height>80){ImgD.height=80;ImgD.width=(image.width*80)/image.height;}else {ImgD.width=image.width;ImgD.height=image.height;};ImgD.alt=image.width+"×"+image.height;}};};function FileChange(Value){flag=false;document.all.uploadimage.width=10;document.all.uploadimage.height=10;document.all.uploadimage.alt="";document.all.uploadimage.src=Value;};</script>
		
		<style>
			select#myselect1,#myselect2,#myselect3 {
				width: 120px;
			}

strong{font-size:12px;}
a:link{color:#0066CC;}
a:hover{color:#FF6600;}
a:visited{color:#003366;}
a:active{color:#9DCC00;}
a{TEXT-DECORATION:none}
table.itable{}
td.irows{height:20px;background:url("index.php?i=dots") repeat-x bottom}
		</style>
</HEAD>
<BODY>
	<H1>
		<SPAN class=action-span1><A>管理中心</A> </SPAN>
		<SPAN id=search_id class=action-span1>- 增加商家 </SPAN>
		<DIV style="CLEAR: both"></DIV>
	</H1>
	<DIV class=form-div>
		<form method="post" action="<?php echo site_url('admin/add_advertiser_action');?>"  enctype="multipart/form-data" name="upform">
				<SELECT ID="s1" NAME="s1"  >
    				<OPTION selected></OPTION>
   				</SELECT>
   				<SELECT ID="s2" NAME="s2"  >
    				<OPTION selected></OPTION>
   				</SELECT>
   				<SELECT ID="s3" NAME="s3">
    				<OPTION selected></OPTION>
   				</SELECT>
				
		
	</DIV>

	<DIV id=listDiv class=list-div>
		<TABLE id=listTable cellSpacing=1 cellPadding=3>
			<TBODY>
				<tr>
					<td><b>公司名称：</b><input type="text" name="name" size="40"/></td>
					
				</tr>
				<tr>
					<td><b>主营业务：</b><input type="text" name="business" size="40"/>（多个请以英文分号区分）</td>
				</tr>
				<tr>
					<td><b>创建时间：</b><input type="text" name="open_time" size="10"/>年 （开店时间：2011）</td>
				</tr>
				<tr>
					<td><b>公司规模：</b><input type="text" name="scale" size="15"/>（职员数目）</td>
				</tr>
				<tr>
					<td><b>联&nbsp;&nbsp;系&nbsp;&nbsp;人：</b><input type="text" name="linkman" size="15"/></td>
				</tr>
				<tr>
					<td><b>联系电话：</b><input type="text" name="phone" size="40"/>（多个请以英文分号区分）</td>
				</tr>
				
				<tr>
					<td><b>在线联系：</b><input type="text" name="qq" size="40"/>（多个请以英文分号区分）</td>
				</tr>
				<tr>
					<td><b>公司网址：</b><input type="text" name="website" size="40"/>（多个请以英文分号区分）</td>
				</tr>
				<tr>
<!--				
<table border="1" width="55%" id="table1" cellspacing=0>
	<tr>
		<td colspan="2" style="font-family: tahoma,verdana,arial; font-size: 11px; line-height: 15px; color: #666666; margin-left: 20px; background-color: white">
		<p>
上传图片:允许上传的文件类型为:jpg|jpeg|gif|bmp|png</td>
	</tr>
	<tr>
			<td style="font-family: tahoma,verdana,arial; font-size: 11px; line-height: 15px; color: #666666; margin-left: 20px; background-color: white" width="10%">
				<div style="width:120px; height:80px;overflow:hidden;text-align: center;" >
					<IMG id=uploadimage height=0 width=0 src=""  onload="javascript:DrawImage(this);" >
				</div>
			</td>
			<td style="font-family: tahoma,verdana,arial; font-size: 11px; line-height: 15px; color: #666666; margin-left: 20px; background-color: white" width="71%">
			<div style="width:361px; height:80px;text-align: center;padding:30px; " >
				<input style="width:208;border:1 solid #9a9999; font-size:9pt; background-color:#ffffff; height:18" size="17" name="upfile[0]" type=file onchange="javascript:FileChange(this.value);">
				<input style="width:208;border:1 solid #9a9999; font-size:9pt; background-color:#ffffff; height:18" size="17" name="upfile[1]" type=file onchange="javascript:FileChange(this.value);">
				<input style="width:208;border:1 solid #9a9999; font-size:9pt; background-color:#ffffff; height:18" size="17" name="upfile[2]" type=file onchange="javascript:FileChange(this.value);">
				<input style="width:208;border:1 solid #9a9999; font-size:9pt; background-color:#ffffff; height:18" size="17" name="upfile[3]" type=file onchange="javascript:FileChange(this.value);">
				<input style="width:208;border:1 solid #9a9999; font-size:9pt; background-color:#ffffff; height:18" size="17" name="upfile[4]" type=file onchange="javascript:FileChange(this.value);">
				<br>
				
			</td>
	</tr>
</div>
</table>
-->
				</tr>
				<tr>
					<td><input type="submit" value="提交" style="width:60;border:1 solid #9a9999; font-size:9pt; background-color:#ffffff; height:18" size="17"></td>
				</tr>

				</form>
				
				
			</TBODY>
		</TABLE>
	</DIV>
</BODY>
<script language="javascript">
 //例子1-------------------------------------------------------------
 //数据源
  var array=new Array();
<?php
$i=0;
	foreach ($location->result_array() as $row){
		echo 'array['.$i.']=new Array("'.$row['id'].'","'.$row['parent_id'].'","'.$row['name'].'");';
		$i++;
	}
?>
  //这是调用代码
  var liandong=new CLASS_LIANDONG_YAO(array) //设置数据源
  liandong.firstSelectChange("1","s1"); //设置第一个选择框
  liandong.subSelectChange("s1","s2"); //设置子级选择框
  liandong.subSelectChange("s2","s3");
  
 </script>
</HTML>

