<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"><HTML 
xmlns="http://www.w3.org/1999/xhtml"><HEAD><TITLE>修改链接</TITLE>
<META name=robots content="noindex, nofollow">
<META content="text/html; charset=utf-8" http-equiv=Content-Type><LINK 
rel=stylesheet type=text/css href="<?php echo base_url();?>css/general.css"><LINK 
rel=stylesheet type=text/css href="<?php echo base_url();?>css/main.css">


<META name=GENERATOR content="MSHTML 9.00.8112.16440"></HEAD>
<BODY>
<H1><SPAN class=action-span><A 
href="<?php echo site_url('admin/list_friendlink');?>">友情链接列表</A></SPAN> 
<SPAN class=action-span1><a href="#">修改链接</a></SPAN>
<DIV style="CLEAR: both"></DIV></H1>
<DIV class=main-div>
<?php 
foreach ($link->result_array() as $row)
?>
<FORM  method=post name=theForm action=<?php echo site_url('admin/edit_friendlink_action/'.$row['id']);?>>
<TABLE id=general-table width="100%">
  <TBODY>
  <TR>
    <TD class=label>链接名称</TD>
    <TD><INPUT name=link_name size=30 value="<?php echo $row['name'];?>"> <BR><SPAN style="DISPLAY: block" 
      id=LogoNameNotic class=notice-span>当你添加文字链接时, 链接LOGO为你的链接名称.</SPAN> </TD></TR>
  <TR>
    <TD class=label>链接地址</TD>
    <TD><INPUT name=link_url size=30 value="<?php echo $row['website'];?>"> <BR><SPAN style="DISPLAY: block" 
      id=LogoNameNotic class=notice-span>例：http://www.baidu.com</SPAN></TD></TR>
  <TR>
    <TD class=label>显示顺序</TD>
    <TD><INPUT name=show_order value="<?php echo $row['show_order'];?>" size=30> </TD></TR>
  <TR>
    <TD class=label>&nbsp;</TD>
    <TD>
 <!-- <input class="hidden" value="<?php echo $row['id']?>" /> -->   
    <INPUT class=button value=" 确定 " type=submit>
  </TD></TR></TBODY></TABLE></FORM></DIV>

</BODY></HTML>
