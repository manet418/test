<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background-image:url(<?php echo base_url();?>/image/vichy.png)">
<form id="form1" name="form1" method="post" action="<?php echo base_url();?>index.php/uni/checklogin">
<table width="785" height="473" border="0" cellspacing="5" cellpadding="5" style="margin:auto; margin-top:70px">
  <tr>
    <td height="70" colspan="2" bgcolor="#CCCCCC"style=" text-align:justify; direction:rtl; font-family:Tahoma, Geneva, sans-serif">سایت دانشگاه شریعتی لطفا نام کاربری و پسورد خود راوارد کنید:
    <h5><?php $this->load->library('form_validation'); echo validation_errors(); ?></h5></td>
  </tr>
  <tr>
    <td width="643" height="80" align="right" bgcolor="#CCCCCC"><label for="username"></label>
      <input align="right" style=" background-color:#CCC" type="text" name="username" id="username" value="<?php echo set_value('username') ?>" /></td>
    <td width="107" height="70"  bgcolor="#CCCCCC" style=" text-align:justify; direction:rtl; font-family:Tahoma, Geneva, sans-serif" > نام کاربری</td>
  </tr>
  <tr>
    <td width="643" height="70" align="right" bgcolor="#CCCCCC" ><label for="password"></label>
      <input align="right"  style=" background-color:#CCC"type="password" name="password" id="password" value="<?php echo set_value('username') ?>" /></td>
    <td width="107" height="70" bgcolor="#CCCCCC" style=" text-align:justify; direction:rtl; font-family:Tahoma, Geneva, sans-serif">پسورد</td>
  </tr>
  <tr>
    <td height="94" colspan="2" bgcolor="#CCCCCC"><input height="100" width="100" type="submit" name="button" id="button" value="ورود به سامانه" /></td>
  </tr>
</table>
<p style="direction:rtl">اینجا با زدن نام کاربری و پسورد به سیستم لاگین میکنید که دوقسمت مدیر گروه و دانشجو وجود دارد مدیر گروه درس هارا ارایه میکند و اخبار مربوط به دانشگاه را درج میکند هر دانشجو در صفحه خود میتواند دروسی که ارایه شده اخذ کند و ببیند واخبار به صورت خودکار در صفحه دانشجو وجود دارد .یک مدیر گروه وچند دانشجو وجود دارد که نام کاربری و پسورد در جدول لاگین قرار دارد .(نام کاربری سطح دسترسی که مثلا برای دانشجو ها studentوبرای مدیر headmasterاست ولی پسورد یکتا ست مثلا مدیر گروه1234ودانشجوها 1478یا 5678یا1234 میتواند باشد البته خوب مسلما رمز ها خیلی ساده هستند و hashنشده در dbذخیره شده و این صرفا جهت تست است)</p>
<p style="direction:rtl">&nbsp;</p>
<p style="direction:rtl">&nbsp;</p>
<p style="direction:rtl">&nbsp;</p>

</form>
</body>
</html>