<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN"><HTML 
xmlns="http://www.w3.org/1999/xhtml"><HEAD>
<META name=robots content="noindex, nofollow">
<META content="text/html; charset=utf-8" http-equiv=Content-Type>
<form method=post name="form" action="<?php echo site_url('admin/edit_manage_action');?>" >
<?php 
$row=$query->row_array();
?>
<tr>
<td>名称：<input name="name" size="20" value="<?php echo $row['name']?>"></td>
<td><input type="hidden" name="id" value="<?php echo $row['id'];?>">
<INPUT class=button value=" 确定 " type=submit></td>
</tr>

</form>
</HEAD>
</HTML>