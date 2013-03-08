<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
	<TITLE>更新文章 - 数码广场</TITLE>
	<META content="text/html; charset=UTF-8" http-equiv=Content-Type>
	<LINK rel=stylesheet type=text/css href="<?php echo base_url();?>css/reset.source.css">
	<LINK rel=stylesheet type=text/css href="<?php echo base_url();?>css/grid.source.css">
	<LINK rel=stylesheet type=text/css href="<?php echo base_url();?>css/typecho.source.css">
	<META name=GENERATOR content="MSHTML 9.00.8112.16440">
</HEAD>
<BODY>

<DIV class=main>
	<DIV class="body body-950">
		<DIV class="container typecho-page-title">
			<DIV class="column-24 start-01">
				<H2>更新文章</H2>
			</DIV>
		</DIV>
		<DIV class="container typecho-page-main typecho-post-option typecho-post-area">
			<FORM method=post name=write_post action="<?php echo site_url('admin/edit_information_action/'.$table.'/'.$id);?>">
				<DIV id=test class="column-18 suffix">
					<DIV class=column-18>
  	<LABEL class=typecho-label for=date>日期</LABEL> 
  	<P>
  		<SELECT id="month" name="month"> 
  			<option value="1" <?php if (1 == $time['month']): ?>selected="true"<?php endif; ?>>一月</option>
            <option value="2" <?php if (2 == $time['month']): ?>selected="true"<?php endif; ?>>二月</option>
            <option value="3" <?php if (3 == $time['month']): ?>selected="true"<?php endif; ?>>三月</option>
            <option value="4" <?php if (4 == $time['month']): ?>selected="true"<?php endif; ?>>四月</option>
            <option value="5" <?php if (5 == $time['month']): ?>selected="true"<?php endif; ?>>五月</option>
            <option value="6" <?php if (6 == $time['month']): ?>selected="true"<?php endif; ?>>六月</option>
            <option value="7" <?php if (7 == $time['month']): ?>selected="true"<?php endif; ?>>七月</option>
            <option value="8" <?php if (8 == $time['month']): ?>selected="true"<?php endif; ?>>八月</option>
            <option value="9" <?php if (9 == $time['month']): ?>selected="true"<?php endif; ?>>九月</option>
            <option value="10" <?php if (10 == $time['month']): ?>selected="true"<?php endif; ?>>十月</option>
            <option value="11" <?php if (11 == $time['month']): ?>selected="true"<?php endif; ?>>十一月</option>
            <option value="12" <?php if (12 == $time['month']): ?>selected="true"<?php endif; ?>>十二月</option>
    	</SELECT> 
    	<input size="4" maxlength="4" type="text" name="day" id="day" value="<?php echo $time['day'];?>" />
        ,
        <input size="4" maxlength="4" type="text" name="year" id="year" value="<?php echo $time['year'];?>" />
        @
        <input size="2" maxlength="2" type="text" name="hour" id="hour" value="<?php echo $time['hour'];?>" />
        :
        <input size="2" maxlength="2" type="text" name="minute" id="minute" value="<?php echo $time['minute'];?>" />
    </P>

						<LABEL class=typecho-label for=title>标题</LABEL> 
						<P class=title><INPUT id=title class="text title" name=title value="<?php echo $information['title'];?>"></P>
						<LABEL class=typecho-label for=text>内容 
						 
<?
$this->load->helper('form_helper');
$data = array(
              'name'        => 'content',
              'id'          => 'content',
              'toolbarset'  => 'Default',
              'basepath'    => '/plugins/FCKeditor_2.6.5/',
              'width'       => '100%',
              'height'      => '500'
    );
 
echo form_fckeditor($data,$information['content']); 
?>
</LABEL>
<P class=submit>
<BUTTON id=btn-submit 
type=submit>更新这篇文章 »</BUTTON> </P></DIV>
</DIV>

</FORM></DIV></DIV></DIV>




</BODY></HTML>
