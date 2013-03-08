
<div id="maincontent">
<?php 
foreach ($information->result_array() as $row)
{
	if($id == $row['id'])
	{	
	//	$CI = get_instance();
	//	$CI->load->model('Information_model');
	//	$content=$CI->Information_model->msubstr($row['content'],'0','200');
?>
	<div class="idea">
		<h3><a href="#"><?php echo $row['title'];?></a></h3>
		<p><?php echo $row['content'];?></p>
	</div>
<?php
	}
}
?>

</div>