<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
	<TITLE>管理中心 - 房间列表</TITLE>
	<META name=robots content="noindex, nofollow">
	<META content="text/html; charset=utf-8" http-equiv=Content-Type>
	<LINK rel=stylesheet type=text/css href="<?php echo base_url();?>css/general.css">
	<LINK rel=stylesheet type=text/css href="<?php echo base_url();?>css/main.css">
	<META name=GENERATOR content="MSHTML 9.00.8112.16437">
</HEAD>
<BODY>
	<H1>
		<SPAN class=action-span1><A href="#">管理中心</A> </SPAN>
		<SPAN id=search_id class=action-span1>- 房间列表 </SPAN>
		<DIV style="CLEAR: both"></DIV>
	</H1>
	<DIV class=form-div>
		<FORM method=post name=theForm action=<?php echo site_url('admin/add_house');?>>
			新增房间: <INPUT name=name maxLength=150 size=40> 
						<INPUT name=level value=4 type=hidden> 
						<INPUT name=parent_id value=<?php echo $parent_id;?> type=hidden> 
						<INPUT class=button value=" 确定 " type=submit> 
		</FORM>
	</DIV>
	<DIV class=list-div>
		<TABLE id=listTable cellSpacing=1 cellPadding=3>
			<TBODY><TR><TH><?php foreach ($buliding_list as $row){
									if($row['id']==$parent_id)
										echo $row['name'];}?>--房间</TH></TR></TBODY>
		</TABLE>
	</DIV>
	<DIV id=listDiv class=list-div>
		<TABLE id=listTable cellSpacing=1 cellPadding=3>
			<TBODY>
				
					<?php
						$i=0;
						foreach ($buliding_list as $row){
							if($row['level']==4 && $row['parent_id']==$parent_id){
								if($i%3=='0'){
									echo '<TR>';
								}		
								echo '<TD class=first-cell align=left><SPAN>'.$row['name'].'
											</SPAN> 
										<SPAN class=link-span>
										<A title=修改 href="'.site_url('admin/edit_manage/'.$row['id']).'">修改</A>&nbsp;&nbsp; 
										<A title=删除 href='.site_url('admin/del_house/'.$row['id']).'/'.$parent_id.'>删除</A> 
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
