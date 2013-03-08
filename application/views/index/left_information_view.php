<div id="navsecond">

<?php
	if('intelligence'==$tag){
		$type='谍报';
	}else if ('news'==$tag)
	{
		$type='新闻';
	}
?>
<p><h3><?php echo $type;?>归档</h3></p>


<DIV id=menu-list>
	<UL> 
		<h5>
		<?php 
	 $resultdates=array();   
	  foreach ($information->result_array() as $timearray) 
  {           
      $y=gmdate('Y', $timearray['date']);   
      $m=gmdate('n', $timearray['date']);   
      @ $resultdates[$y][$m] += 1;   
   }
	foreach ($resultdates as $k => $v)
	{
        foreach ($v as $k1 => $v1)
        {
                echo '<p><a href="'.site_url('welcome/get_date_information/'.$tag.'/'.$k.'/'.$k1).'">'.$k.'年'.$k1.'月('.$v1.')</a></p><br />';
        }
	}
	 
?>
		</h5>
	</UL>
</DIV>
</div>