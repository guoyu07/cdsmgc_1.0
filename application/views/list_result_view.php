
<form name="listForm">
	<div class="list-div" id="listDiv">
		<table class="dataintable">
  			<tr>
    			<th>商店名称</th>
    			<th>主营业务</th>
    			<th>电话</th>
    			<th>QQ</th>
    			<th>位置</th>
  			<tr>
<?php 

	foreach ($advertiser->result_array() as $row){
		$CI = get_instance();
		$CI->load->model('Advertiser_model');
		$address_name=$CI->Advertiser_model->show_parent($row['location_id']);
		$business=$CI->Advertiser_model->separate($row['business']); 
		$phone=$CI->Advertiser_model->separate($row['phone']); 
		$qq=$CI->Advertiser_model->separate($row['qq']); 
?>
		<td align="center" class="first-cell" style="color:red;"><span><?php echo $row['name'];?></span></td>
		<td align="center"><span><?php for($i=0;$i<count($business);$i++) echo $business[$i].'&nbsp;&nbsp;'; ?></span></td>
		<td align="center"><span><?php for($i=0;$i<count($phone);$i++) echo $phone[$i].'&nbsp;&nbsp;'; ?></span></td>
		<td align="center">
		<?php 
     				for($i=0;$i<count($qq);$i++) 
     				echo '<span class="talk"> <a href="http://wpa.qq.com/msgrd?V=1&amp;Uin='.$qq[$i].'amp;Site=QQ咨询&amp;Menu=yes" target="_blank">'.$qq[$i].'</a></span>&nbsp;&nbsp;'; 
    	?>
    	</td>
		<td align="center"><span><?php echo $address_name[2].'-'.$address_name[1].'-'.$address_name[0];?></span></td>
		
		</tr>
	
<?php } 
?>


<tr><span id="totalRecords"><?php  echo $pagination; ?></span></tr>

       


  </table>
</div>
