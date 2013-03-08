
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>管理中心 - <?php echo $title?>列表 </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url();?>css/general.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>css/main.css" rel="stylesheet" type="text/css" />

</head>
<body>

<h1>
<span class="action-span"><a href="<?php echo site_url('admin/add_'.$title_tag);?>" target=main-frame>添加新<?php echo $title?></a></span>
<span class="action-span1"><a href="#">管理中心</a> </span><span id="search_id" class="action-span1"> - <?php echo $title?>列表 </span>
<div style="clear:both"></div>
</h1>

<form method="post" action="" name="listForm" onsubmit="return confirmSubmit(this)">
  <!-- start goods list -->
  <div class="list-div" id="listDiv">
<table cellpadding="3" cellspacing="1">
  <tr>
    
    <th>ID</th>
    <th>标题</th>
    <th>状态</th>
    <th>发布时间</th>
    <th>操作</th>
  <tr>
  <?php 
  foreach ($information->result_array() as $row)
  {
  	echo '<tr>';
  	echo '<td align="center"><span>'.$row['id'].'</span></td>';
  	echo '<td align="center" class="first-cell" style="color:red;"><span>'.$row['title'].'</span></td>';
  	$statue=$row['statue']?'发布':'待审';         
  	echo '<td align="center" class="first-cell" ><span>'.$statue.'</span></td>';  
  	echo '<td align="center" class="first-cell" ><span>'.gmdate("Y-m-d H:i",$row['date']).'</span></td>'; 
  	echo '<td align="center"><a href="'.site_url('admin/edit_information_statue/'.$title_tag.'/'.$row['id']).'" target="main-frame" title="更改状态">更改状态</a>&nbsp;&nbsp;&nbsp;';
		echo '<a href="'.site_url('admin/edit_information/'.$title_tag.'/'.$row['id']).'" target="main-frame" title="更改内容">更改内容</a>&nbsp;&nbsp;&nbsp;';
		echo '<a href="'.site_url('admin/del_information/'.$title_tag.'/'.$row['id']).'" target="main-frame" title="删除内容">删除内容</a>';
		echo '<img src="'.base_url().'images/empty.gif" width="16" height="16" border="0" /> </td></tr>';  
  }
  ?>


  </table>
<!-- end goods list -->

<!-- 分页 -->
<table id="page-table" cellspacing="0">
  <tr>
    <td align="right" nowrap="true">
        <div id="turn-page">
       <span id="totalRecords"><?php  echo $pagination; ?></span>
      </div>
    </td>
  </tr>
</table>
</div>


</form>

</html>