
<?php
	$CI = get_instance();
	$CI->load->model('Advertiser_model');
	$address_name=$CI->Advertiser_model->show_parent($row['location_id']);
	$business=$CI->Advertiser_model->separate($row['business']); 
	$phone=$CI->Advertiser_model->separate($row['phone']); 
	$qq=$CI->Advertiser_model->separate($row['qq']); 
	$website=$CI->Advertiser_model->separate($row['website']); 
	$img=$CI->Advertiser_model->get_img($row['id']);
?>   

	<div>
		<h1><?php echo $row['name'];?></h1>
		<ul><h4>
           <li>
               <span>主营业务：</span><em><b><?php for($i=0;$i<count($business);$i++) echo $business[$i].'&nbsp;&nbsp;&nbsp;'; ?></b></em>
           </li>
           <?php if($row['linkman']!=''){echo '<li><span>联  系  人：</span><em>'.$row['linkman'].'</em></li>';}?>
           <?php if($row['scale']!=''){echo '<li><span>公司规模：</span><em>'.$row['linkman'].'</em>人</li>';}?>
           <?php if($row['open_time']!='' && $row['open_time']!='0'){echo '<li><span>创店时间：</span><em>'.$row['open_time'].'</em>年</li>';}?>
           
           <?php 
           		if(count($phone)>0)
           		{ 	
           			echo '<li><span>联系电话：</span><em>';
           			for($i=0;$i<count($phone);$i++) 
           				echo $phone[$i].'&nbsp;&nbsp;&nbsp;'; 
           			echo '</em></li>';
           		}
   				if($row['qq']!='')
   				{
   					echo '<li><span>在线联系：</span><em>';
     				for($i=0;$i<count($qq);$i++) 
     					echo '<span><a href="http://wpa.qq.com/msgrd?V=1&amp;Uin='.$qq[$i].'amp;Site=QQ咨询&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:'.$qq[$i].':4"  border="0" alt="点击这里发送信息" />'.$qq[$i].'</a></span>&nbsp;&nbsp;'; 
   					echo '</em></li>';
   				}
   				if ($row['website']!='') {
   					echo '<li><span>公司网址：</span><em>';
   					for($i=0;$i<count($website);$i++) 
   						echo '<a title="'.$website[$i].'" href="http://'.$website[$i].'" target="_blank">'.$website[$i].'</a>&nbsp;&nbsp;&nbsp;&nbsp;';
   					echo '</em></li>';
   				}
     		?>
   			<?php if(count($img)>0){?>
   			<li>
   			<?php 
   				for($i=0;$i<count($img);$i++)
   				{
   				//	echo base_url().$img[$i];
   					echo ' <img width="160" height="120" src="'.base_url().$img[$i].'" alt="'.$row['name'].'" title="'.$row['name'].'" />';
   				} 
   			?>
            </li> 
            <?php }?>
			 <li><span>店铺地址：</span><em><?php echo $address_name[2].'--'.$address_name[1].'-'.$address_name[0];?></em></li>
   		</h4></ul>             
	</div>
	<?php
		for($i=0;$i<10;$i++)
		{
			echo '<br>'; 
		}
		
	?>
