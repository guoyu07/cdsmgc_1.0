
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta charset="utf-8">
<title><?php echo $row['name'];?></title>
<link href="<?php echo base_url();?>css/style.css" type="text/css" rel="stylesheet">
<style type="text/css" media="screen">#fmp1323602196388mapObj {visibility:hidden}</style></head>
<body>
<link type="text/css" rel="stylesheet" href="<?php echo base_url();?>css/module.css">
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

<div class="div_body">

  <div class="main clearfix">
    <div>
    <h2 class="tit_nr"><?php echo $row['name'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;【<a href="javascript:history.back(-1);">返回</a>】</h2>
      <ul class="shop_info clearfix">  
             <li>
                <span>主营业务：</span><em>
            <b><?php for($i=0;$i<count($business);$i++) echo $business[$i].'&nbsp;&nbsp;&nbsp;'; ?></b>  </em>
            </li>
           <li><span>联  系  人：</span><em><?php echo $row['linkman'];?></em></li>
           <li><span>联系电话：</span><em>
          <?php for($i=0;$i<count($phone);$i++) echo $phone[$i].'&nbsp;&nbsp;&nbsp;'; ?></em></li>
         <li><span>店铺地址：</span><em><?php echo $address_name[2].'--'.$address_name[1].'-'.$address_name[0];?></em></li>
                     <li><span>在线联系：</span><em>
                         <?php 
     				for($i=0;$i<count($qq);$i++) 
     				echo '<span><a href="http://wpa.qq.com/msgrd?V=1&amp;Uin='.$qq[$i].'amp;Site=QQ咨询&amp;Menu=yes" target="_blank"><img src="http://wpa.qq.com/pa?p=1:'.$qq[$i].':4"  border="0" alt="点击这里发送信息" />'.$qq[$i].'</a></span>&nbsp;&nbsp;'; 
    			?>
                                                                </em></li>
                 <li><span>公司网址：</span><em><?php 
   				for($i=0;$i<count($website);$i++) 
   					echo '<a title="'.$website[$i].'" href="http://'.$website[$i].'" target="_blank">'.$website[$i].'</a>&nbsp;&nbsp;&nbsp;&nbsp;';
   			?></em></li>
			<li><span>公司规模：</span><em><?php echo $row['scale'];?></em></li>
			<li><span>创店时间：</span><em><?php echo $row['open_time'];?></em></li>
    </ul>
      <ul class="shop_pic_ul clearfix">
          <?php if(count($img)>0){?>
   			
   			<?php 
   				for($i=0;$i<count($img);$i++)
   				{
   				//	echo base_url().$img[$i];
   					echo ' <li><img width="160" height="120" src="'.base_url().$img[$i].'" alt="'.$row['name'].'" title="'.$row['name'].'" /></li> ';
   				} 
   			?>
            
            <?php }?>
               </ul>


<font color="Black"><font color="Red">
          </font></font></div><font color="Black"><font color="Red">
    <!--end right-->
  </font></font></div>

   </body></html>