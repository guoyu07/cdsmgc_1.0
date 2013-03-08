<div id="navsecond">
<?php
	if($location->num_rows()>0){
		$row_1=$location->row_array();
		echo '<h3>'.$row_1['name'].'</h3>';
	}
?>
<DIV id=menu-list>
	<UL> 
 			<P>
				<A href="javascript: exp.openAll();">全部展开</A> | 
				<A href="javascript: exp.closeAll();">全部收起</A>
			</P>
		<h5>
	<SCRIPT type=text/javascript>
		exp = new dTree('exp');
		exp.add(0,-1,"");
	<?php 
		$num=$location->num_rows();
		for ($i = 1; $i < $num+1; $i++) {
			$row_2=$location->row_array($i);
			if ($row_2['level']=='2') {
				echo 'exp.add('.$row_2['id'].',0,"'.$row_2['name'].'","","","");';
			}else if($row_2['level']=='3'){
				echo 'exp.add('.$row_2['id'].','.$row_2['parent_id'].',"'.$row_2['name'].'","","'.$row_2['name'].'","main-frame");' ;
			}else if($row_2['level']=='4'){
				echo 'exp.add('.$row_2['id'].','.$row_2['parent_id'].',"'.$row_2['name'].'","'.site_url('welcome/advertiser/'.$row_2['id']).'","'.$row_2['name'].'");' ;
			}
		}
	?>
	document.write(exp);
	</SCRIPT>
		</h5>
	</UL>
</DIV>
</div>