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
    <td width="84%" height="447" align="right" valign="top" bgcolor="#CCCCCC">
    <?php 
	foreach($info as $row)
	{ 
	echo'
	<form id="form1" name="form1" method="post" action="http://localhost:81/university/index.php/uni/final_edit_news/'.$row['id'].'">
	
      <table width="58%" height="337" border="0" cellpadding="5" cellspacing="5">
        <tr>
          <td height="70" colspan="2" align="right">:لطفا برای ویرایش خبر فیلد های لازم  را پر کنید </td>
          </tr>
        <tr>
          <td width="68%" align="right"><label for="title"></label>
            <input type="text" name="title" id="title" value="'.$row['title'].'" /></td>
          <td width="32%" height="70" align="center">:عنوان خبر</td>
        </tr>
        <tr>
          <td align="right"><label for="text"></label>
            <input type="text"  name="text" id="text" value="'.$row['text'].'"/></td>
          <td height="70" align="center">:متن خبر</td>
        </tr>
        <tr>
          <td align="right"><label for="data"></label>
            <input type="text" name="data" id="data" value="'.$row['date'].'" /></td>
          <td height="70" align="center">:تاریخ ثبت</td>
        </tr>
        <tr>
          <td height="70" colspan="2"><input type="submit" name="button" id="button" value="ویرایش " /></td>
          </tr>
      </table>';
	}
	  ?>
    </form></td>
    <td width="16%" align="right" valign="top" bgcolor="#CCCCCC">
    <ul style="line-height:40px">
    <li style="direction:rtl; margin-right:20px" ><a href="<?php echo base_url();?>/index.php/uni/heaadmaster_list">امورآمورشی</a></li>
   
   
    <li style="direction:rtl; margin-right:20px"><a href="<?php echo base_url();?>/index.php/uni/return_master">میزکار</a></li>
    </ul>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>