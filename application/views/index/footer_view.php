
<div id="footer">
	<div>
		<h4>&nbsp;&nbsp;&nbsp;友情链接</h4>
		<p class="partner">
<?php 
if($friendlink->num_rows()>0)
{
	foreach ($friendlink->result_array() as $row)
	{
		echo '<a href="'.$row['website'].'">'.$row['name'].'</a>&nbsp;&nbsp;&nbsp; ';
	}
}
?>
		</p>
	</div>
	<table name="form" align=center>
		<tr>
			<td align=center><hr size=-1>云计算服务商--
        <!--   Copyright @ 2011~2012 版权所有 <a href='http://smgc.in'>数码广场</a>      -->
   <a href="http://sae.sina.com.cn" target="_blank"><img src="http://static.sae.sina.com.cn/image/poweredby/117X12px.gif" title="Powered by Sina App Engine"></a>                
   <script src="http://s4.cnzz.com/stat.php?id=3836331&web_id=3836331&show=pic1" language="JavaScript"></script>
</td>
   <td align=center></td>
		</tr>
	</table>
</div>
</body>
</html>