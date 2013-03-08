<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML xmlns="http://www.w3.org/1999/xhtml">

<HEAD>
	<TITLE>管理中心 - 修改商家信息</TITLE>
	<META name=robots content="noindex, nofollow">
	<META content="text/html; charset=utf-8" http-equiv=Content-Type>
	<LINK rel=stylesheet type=text/css href="<?php echo base_url();?>css/general.css">
	<LINK rel=stylesheet type=text/css href="<?php echo base_url();?>css/main.css">
	<META name=GENERATOR content="MSHTML 9.00.8112.16437">	
	<script type="text/javascript">function oCopy(obj){obj.select();js=obj.createTextRange();js.execCommand("Copy");};function sendtof(url){window.clipboardData.setData('Text',url);alert('复制地址成功，粘贴给你好友一起分享。');};function select_format(){var on=document.getElementById('fmt').checked;document.getElementById('site').style.display=on?'none':'';document.getElementById('sited').style.display=!on?'none':'';};var flag=false;function DrawImage(ImgD){var image=new Image();image.src=ImgD.src;if(image.width>0&&image.height>0){flag=true;if(image.width/image.height>=120/80){if(image.width>120){ImgD.width=120;ImgD.height=(image.height*120)/image.width;}else {ImgD.width=image.width;ImgD.height=image.height;};ImgD.alt=image.width+"×"+image.height;}else {if(image.height>80){ImgD.height=80;ImgD.width=(image.width*80)/image.height;}else {ImgD.width=image.width;ImgD.height=image.height;};ImgD.alt=image.width+"×"+image.height;}};};function FileChange(Value){flag=false;document.all.uploadimage.width=10;document.all.uploadimage.height=10;document.all.uploadimage.alt="";document.all.uploadimage.src=Value;};</script>
		
		<style>
			select#myselect1,#myselect2,#myselect3 {
				width: 120px;
			}
		</style>
</HEAD>
<BODY>
	<H1>
		<SPAN class=action-span1><A>管理中心</A> </SPAN>
		<SPAN id=search_id class=action-span1>- 修改商家信息 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;【<a href="javascript:history.back(-1);">返回</a>】</SPAN>
		<DIV style="CLEAR: both"></DIV>
	</H1>
	<DIV id=listDiv class=list-div>
		<TABLE id=listTable cellSpacing=1 cellPadding=3>
			<TBODY>
			<form method="post" action="<?php echo site_url('admin/edit_advertiser_action');?>">
				<tr>
					<td><b>公司名称：</b><input type="text" name="name" size="40" value="<?php echo $advertiser['name'];?>"/></td>
					
				</tr>
				<tr>
					<td><b>主营业务：</b><input type="text" name="business" size="40" value="<?php echo $advertiser['business'];?>"/>（多个请以英文分号分隔）</td>
				</tr>
				<tr>
					<td><b>联&nbsp;&nbsp;系&nbsp;&nbsp;人：</b><input type="text" name="linkman" size="15" value="<?php echo $advertiser['linkman'];?>"/></td>
				</tr>
				<tr>
					<td><b>联系电话：</b><input type="text" name="phone" size="40" value="<?php echo $advertiser['phone'];?>"/>（多个请以英文分号分隔）</td>
				</tr>
				<tr>
					<td><b>在线联系：</b><input type="text" name="qq" size="40" value="<?php echo $advertiser['qq'];?>"/>（多个请以英文分号分隔）</td>
				</tr>
				<tr>
					<td><b>公司网址：</b><input type="text" name="website" size="40" value="<?php echo $advertiser['website'];?>"/>（多个请以英文分号分隔）</td>
				</tr>
				<tr>
					<td><b>公司规模：</b><input type="text" name="scale" size="10" value="<?php echo $advertiser['scale'];?>"/>人</td>
				</tr>
				<tr>
					<td><b>创店时间：</b><input type="text" name="open_time" size="10" value="<?php echo $advertiser['open_time'];?>"/>年</td>
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
-->				<tr>
					<input type="hidden" name="location_id" value="<?php echo $location_id?>"/>
					<td><input type="submit" name="submit" value="提交"/></td>
				</tr>

				</form>	
			</TBODY>
		</TABLE>
	</DIV>
</BODY>
</HTML>

