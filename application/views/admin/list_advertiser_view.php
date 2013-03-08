
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>管理中心 - 商家列表 </title>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="<?php echo base_url();?>css/general.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>css/main.css" rel="stylesheet" type="text/css" />

</head>
<body>

<h1>
<span class="action-span"><a href="<?php echo site_url('admin/add_advertiser');?>" target=main-frame>添加新商家</a></span>
<span class="action-span1"><a href="#">管理中心</a> </span><span id="search_id" class="action-span1"> - 商家列表 </span>
<div style="clear:both"></div>
</h1>
<!-- 商品搜索 -->
<!--
<div class="form-div">
  <form action="javascript:searchGoods()" name="searchForm">
        
    <select name="cat_id"><option value="0">所有分类</option><option value="1" >笔记本</option><option value="6" >&nbsp;&nbsp;&nbsp;&nbsp;THINKPAD</option><option value="7" >&nbsp;&nbsp;&nbsp;&nbsp;戴尔</option><option value="47" >&nbsp;&nbsp;&nbsp;&nbsp;惠普</option><option value="4" >&nbsp;&nbsp;&nbsp;&nbsp;华硕</option><option value="8" >&nbsp;&nbsp;&nbsp;&nbsp;宏基</option><option value="5" >&nbsp;&nbsp;&nbsp;&nbsp;联想</option><option value="2" >电脑配件</option><option value="9" >&nbsp;&nbsp;&nbsp;&nbsp;鼠标</option><option value="21" >&nbsp;&nbsp;&nbsp;&nbsp;内存卡</option><option value="13" >&nbsp;&nbsp;&nbsp;&nbsp;移动硬盘</option><option value="37" >&nbsp;&nbsp;&nbsp;&nbsp;鼠标垫</option><option value="10" >&nbsp;&nbsp;&nbsp;&nbsp;键盘</option><option value="22" >&nbsp;&nbsp;&nbsp;&nbsp;耳机音响</option><option value="60" >&nbsp;&nbsp;&nbsp;&nbsp;其它</option><option value="23" >&nbsp;&nbsp;&nbsp;&nbsp;手柄</option><option value="38" >&nbsp;&nbsp;&nbsp;&nbsp;电脑包</option><option value="11" >&nbsp;&nbsp;&nbsp;&nbsp;键鼠套装</option><option value="35" >&nbsp;&nbsp;&nbsp;&nbsp;散热板</option><option value="62" >&nbsp;&nbsp;&nbsp;&nbsp;多合一读卡器</option><option value="16" >&nbsp;&nbsp;&nbsp;&nbsp;路由器</option><option value="12" >&nbsp;&nbsp;&nbsp;&nbsp;U盘</option><option value="25" >手机</option><option value="29" >&nbsp;&nbsp;&nbsp;&nbsp;摩托罗拉</option><option value="46" >&nbsp;&nbsp;&nbsp;&nbsp;LG</option><option value="43" >&nbsp;&nbsp;&nbsp;&nbsp;索爱</option><option value="27" >&nbsp;&nbsp;&nbsp;&nbsp;三星</option><option value="44" >&nbsp;&nbsp;&nbsp;&nbsp;夏普</option><option value="28" >&nbsp;&nbsp;&nbsp;&nbsp;HTC</option><option value="45" >&nbsp;&nbsp;&nbsp;&nbsp;苹果</option><option value="26" >&nbsp;&nbsp;&nbsp;&nbsp;诺基亚</option><option value="36" >数码相机</option><option value="40" >&nbsp;&nbsp;&nbsp;&nbsp;索尼</option><option value="41" >&nbsp;&nbsp;&nbsp;&nbsp;三星</option><option value="42" >&nbsp;&nbsp;&nbsp;&nbsp;尼康</option><option value="39" >&nbsp;&nbsp;&nbsp;&nbsp;佳能</option><option value="30" >THE FACE SHOP</option><option value="33" >&nbsp;&nbsp;&nbsp;&nbsp;男士护肤</option><option value="49" >MP3/MP4</option><option value="52" >&nbsp;&nbsp;&nbsp;&nbsp;艾利和</option><option value="59" >&nbsp;&nbsp;&nbsp;&nbsp;昂达</option><option value="56" >&nbsp;&nbsp;&nbsp;&nbsp;台电</option><option value="53" >&nbsp;&nbsp;&nbsp;&nbsp;爱欧迪</option><option value="57" >&nbsp;&nbsp;&nbsp;&nbsp;酷比魔方</option><option value="54" >&nbsp;&nbsp;&nbsp;&nbsp;歌美</option><option value="50" >&nbsp;&nbsp;&nbsp;&nbsp;蓝魔</option><option value="51" >&nbsp;&nbsp;&nbsp;&nbsp;艾诺</option><option value="58" >&nbsp;&nbsp;&nbsp;&nbsp;原道</option><option value="55" >&nbsp;&nbsp;&nbsp;&nbsp;驰为</option></select>
    
    <select name="brand_id"><option value="0">所有品牌</option><option value="43">新贵</option><option value="44">海威特</option><option value="31">惠普</option><option value="30">夏普</option><option value="29">苹果</option><option value="28">索尼爱立信</option><option value="27">LG</option><option value="26">佳能</option><option value="25">尼康</option><option value="24">索尼</option><option value="32">蓝魔</option><option value="33">艾诺</option><option value="34">艾利和</option><option value="42">新盟</option><option value="41">昂达</option><option value="40">原道</option><option value="39">酷比魔方</option><option value="38">台电</option><option value="37">驰为</option><option value="36">歌美</option><option value="35">艾欧迪</option><option value="23">PNY</option><option value="22">西部数据</option><option value="10">希捷</option><option value="9">雷柏</option><option value="8">金士顿</option><option value="7">双飞燕</option><option value="6">TP-Link</option><option value="5">宏基</option><option value="4">戴尔</option><option value="3">THINKPAD</option><option value="2">华硕</option><option value="11">SanDisk</option><option value="12">现代</option><option value="21">日立</option><option value="20">酷冷至尊</option><option value="19">HTC</option><option value="18">摩托罗拉</option><option value="17">三星</option><option value="16">诺基亚</option><option value="15">THE FACE SHOP</option><option value="14">雷蛇</option><option value="13">Wenger</option><option value="1">联想</option></select>
    
    <select name="intro_type"><option value="0">全部</option><option value="is_best">精品</option><option value="is_new">新品</option><option value="is_hot">热销</option><option value="is_promote">特价</option><option value="all_type">全部推荐</option></select>
         
      
      <select name="suppliers_id"><option value="0">全部</option><option value="1">1</option></select>
            
      <select name="is_on_sale"><option value=''>全部</option><option value="1">上架</option><option value="0">下架</option></select>
        
    关键字 <input type="text" name="keyword" size="15" />
    <input type="submit" value=" 搜索 " class="button" />
  </form>
</div>
  -->
<!-- 商品列表 -->
<form method="post" action="" name="listForm" onsubmit="return confirmSubmit(this)">
  <!-- start goods list -->
  <div class="list-div" id="listDiv">
<table cellpadding="3" cellspacing="1">
  <tr>
    
    <th>编号</th>
    <th>商店名称</th>
    <th>主营业务</th>
    <th>位置</th>
    <th>QQ</th>
    <th>操作</th>
  <tr>
<?php 
	$CI = get_instance();
	$CI->load->model('Advertiser_model');
	foreach ($advertiser->result_array() as $row){
		$address_name=$CI->Advertiser_model->show_parent($row['location_id']);
		$qq=$CI->Advertiser_model->separate($row['qq']);
		$business=$CI->Advertiser_model->separate($row['business']);
		echo ' <tr><td><input type="checkbox" name="checkboxes[]" value="'.$row['id'].'" /><span>'.$row['id'].'</span></td>';
		echo '<td align="center" class="first-cell" style="color:red;"><span>'.$row['name'].'</span></td>';       
?>
		<td align="center"><span><?php for($i=0;$i<count($business);$i++) echo $business[$i].'&nbsp;&nbsp;&nbsp;'; ?></span></td>
<?php	echo '<td align="center"><span>'.$address_name[2].'--'.$address_name[1].'-'.$address_name[0].'</span></td>';  ?>
		<td align="center"><span><?php for($i=0;$i<count($qq);$i++) echo $qq[$i].'&nbsp;&nbsp;&nbsp;'; ?></span></td>
<?php 
		echo '<td align="center"><a href="'.site_url('admin/show_advertiser/'.$row['location_id']).'" target="main-frame" title="查看"><img src="'.base_url().'images/icon_view.gif" width="16" height="16" border="0" /></a>';
		echo '<a href="'.site_url('admin/edit_advertiser/'.$row['location_id']).'" target="main-frame" title="编辑"><img src="'.base_url().'images/icon_edit.gif" width="16" height="16" border="0" /></a>';
		echo '<a href="'.site_url('admin/del_advertiser/'.$row['location_id']).'" target="main-frame" title="删除"><img src="'.base_url().'images/icon_trash.gif" width="16" height="16" border="0" /></a>';
		echo '<img src="'.base_url().'images/empty.gif" width="16" height="16" border="0" /> </td></tr>';
	}
//	echo $pagination;
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