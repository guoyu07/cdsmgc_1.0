<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML xmlns="http://www.w3.org/1999/xhtml"><HEAD><TITLE>友情链接列表</TITLE>
<META name=robots content="noindex, nofollow">
<META content="text/html; charset=utf-8" http-equiv=Content-Type><LINK 
rel=stylesheet type=text/css href="<?php echo base_url();?>css/general.css"><LINK 
rel=stylesheet type=text/css href="<?php echo base_url();?>css/main.css">

<META name=GENERATOR content="MSHTML 9.00.8112.16440"></HEAD>
<BODY>
<H1>
<SPAN class=action-span><A href="<?php echo site_url('admin/add_friendlink');?>">添加新链接</A></SPAN> 
<SPAN class=action-span1><A href="#">友情链接列表</A> </SPAN>
<DIV style="CLEAR: both"></DIV></H1>


<FORM method=post name=listForm action=""><!-- start ads list -->
<DIV id=listDiv class=list-div>
<TABLE cellSpacing=1 cellPadding=3>
  <TBODY>
  <TR>
    <TH>链接名称</TH>
    <TH>链接地址</TH>
    <TH>显示顺序</TH>
    <TH>操作</TH></TR>
  <TR>
<?php 
foreach ($link->result_array() as $row)
{
?>  
  
  <TR>
    <TD class=first-cell align="center"><SPAN><?php echo $row['name'];?></SPAN></TD>
    <TD align="center">
    	<SPAN>
    		<A href="<?php echo $row['website'];?>" target=_blank><?php echo $row['website'];?></A>
    	</SPAN>
    </TD>
    <TD align="center">
    	<SPAN><?php echo $row['show_order'];?></SPAN>
    </TD>
    <TD align=center>
    	<SPAN>
    	<?php 
    	echo '<a href="'.site_url('admin/edit_friendlink/'.$row['id']).'" target="main-frame" title="编辑"><img src="'.base_url().'images/icon_edit.gif" width="16" height="16" border="0" /></a>';
		echo '<a href="'.site_url('admin/del_friendlink/'.$row['id']).'" target="main-frame" title="删除"><img src="'.base_url().'images/icon_trash.gif" width="16" height="16" border="0" /></a>';
    	?>
    	</SPAN>
    </TD>
   </TR>
  <?php }?>
</TBODY></TABLE></DIV></FORM>
</BODY></HTML>
