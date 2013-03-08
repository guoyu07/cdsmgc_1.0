
<div id="maincontent">
<?php 
$count=count($information_date);
for($i=0 ; $i < $count ; $i++)
{
	$CI = get_instance();
	$CI->load->model('Information_model');
	$content=$CI->Information_model->msubstr($information_date[$i]['content'],'0','200');
?>
<div class="idea">
	<h3><a href="<?php echo site_url('welcome/show_information/'.$tag.'/'.$information_date[$i]['id']);?>"><?php echo $information_date[$i]['title'];?></a></h3>
	<p><?php echo $content;?></p>
</div>
<?php
}
?>

</div>