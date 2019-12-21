<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="../../style/style.css" rel="stylesheet" type="text/css" />
</head>

<body style="background-image:url(<?php echo base_url();?>/image/vichy.png)">
<p>&nbsp;</p>
<table width="90%" height="551" border="0" cellpadding="5" cellspacing="5" style="margin:auto">
  <tr>
    <td height="89" colspan="2" bgcolor="#CCCCCC" style="direction:rtl; padding-right:30px">میز کار مدیر گروه:</td>
  </tr>
  <tr>
    <td width="84%" height="447" align="right" valign="top" bgcolor="#CCCCCC"  style=" padding-top:50px; line-height:30px ;padding-right:50px">
   <?php
   if($test==1)
   {
	   echo '<div><h3 style="color:#FFFFFF">خبر با موفقیت درج شد با آرزوی موفقیت</h3></div>';
   }
   
   ?>
    <table width="42%" border="0" cellspacing="5" cellpadding="5">
      <tr>
        <td align="right" width="81%"><a href="http://localhost:81/university/index.php/uni/insert_news_page">درج خبر جدید</a></td>
        <td width="19%"><img src="<?php echo base_url();?>/image/office-domain.png" /></td>
      </tr>
      <tr>
        <td align="right"><a href="<?php echo base_url();?>/index.php/uni/edit_news_page">ویرایش اخبار</a></td>
        <td><img src="<?php echo base_url();?>/image/form-sabtenam.png"/></td>
      </tr>
    </table></td>
    <td width="16%" align="right" valign="top" bgcolor="#CCCCCC">
    <ul style="line-height:40px">
    <li style="direction:rtl; margin-right:20px" ><a href="<?php echo base_url();?>/index.php/uni/heaadmaster_list">امورآمورشی</a></li>
    
    
    <li style="direction:rtl; margin-right:20px"><a href="<?php echo base_url();?>/index.php/uni/return_master">میزکار</a></li>
    <li style="direction:rtl; margin-right:20px"><a href="<?php echo base_url();?>/index.php/uni/news_page">درج اخبار و اطلاعیه ها</a></li>
    
    </ul>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>