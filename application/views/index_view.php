<!DOCTYPE form PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head></head>
<body>
<form name="main_search" method="get" action="<?php echo site_url('welcome/search');?>">
			<tr>
				<td><b>搜索：</b>
					<select name="main_search_type">
						<option value="0">所有分类</option>
						<OPTION value="1">业务名</OPTION>
						<OPTION value="2">商店名</OPTION>
					</select>
				</td>
				<td>
					<input type="text" name="main_search_value" size="30"/>
				</td>
				<td><input type="submit" value="搜我所想"></td>
			</tr>
		</form>
</body>
</html>
