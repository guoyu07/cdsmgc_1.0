<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML xmlns="http://www.w3.org/1999/xhtml">

<HEAD>
	<TITLE>管理中心 - 大楼列表</TITLE>
	<META name=robots content="noindex, nofollow">
	<META content="text/html; charset=utf-8" http-equiv=Content-Type>
	<LINK rel=stylesheet type=text/css href="<?php echo base_url();?>css/general.css">
	<LINK rel=stylesheet type=text/css href="<?php echo base_url();?>css/main.css">
	<META name=GENERATOR content="MSHTML 9.00.8112.16437">
</HEAD>
<BODY>
	<H1>
		<SPAN class=action-span1><A href="http://www.cuitshop.com/admin/index.php?act=main">ECSHOP 管理中心</A> </SPAN>
		<SPAN id=search_id class=action-span1>- 大楼列表 </SPAN>
		<DIV style="CLEAR: both"></DIV>
	</H1>
	<DIV class=form-div>
		<FORM method=post name=theForm action=<?php echo site_url('admin/add_buliding');?>>
			新增大楼: <INPUT name=name maxLength=150 size=40> 
						<INPUT name=level value=2 type=hidden> 
						<INPUT name=parent_id value=1 type=hidden> 
						<INPUT class=button value=" 确定 " type=submit> 
		</FORM>
	</DIV>
	<DIV class=list-div>
		<TABLE id=listTable cellSpacing=1 cellPadding=3>
			<TBODY><TR><TH>电脑城--大楼</TH></TR></TBODY>
		</TABLE>
	</DIV>
	<DIV id=listDiv class=list-div>
		<TABLE id=listTable cellSpacing=1 cellPadding=3>
			<TBODY>
				
					<?php
						$i=0;
						foreach ($buliding_list as $row){
							if($row['level']==2){
								if($i%3=='0'){
									echo '<TR>';
								}		
								echo '<TD class=first-cell align=left><SPAN>'.$row['name'].'
											</SPAN> 
										<SPAN class=link-span>
										<A title=管理 href="'.site_url('admin/floor_manage/'.$row['id']).'">管理</A>&nbsp;&nbsp; 
										<A title=修改 href="'.site_url('admin/edit_manage/'.$row['id']).'">修改</A>&nbsp;&nbsp; 
										<A title=删除 href='.site_url('admin/del_buliding/'.$row['id']).'>删除</A> 
										</SPAN>
										</TD>';
								$i++;
								if($i%3=='0'){
									echo '</TR>';
								}
								
							} 
							
						} ?>
				
			</TBODY>
		</TABLE>
	</DIV>
</BODY>
</HTML>
