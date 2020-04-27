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
    <td height="89" colspan="2" bgcolor="#CCCCCC" style="direction:rtl; padding-right:30px">میز کار دانشجو:</td>
  </tr>
  <tr>
    <td width="84%" height="447" align="right" valign="top" bgcolor="#CCCCCC">
    :اخبار مهم 
    <?php
	echo '
	<table border="1" cellpadding="5" cellspacing="5" >
	<tr>
	<td>تاریخ خبر</td>
	<td>متن خبر </td>
	<td>عنوان خبر</td>
	
	';
	foreach($news as $row)
	{
		echo '
	<tr>
	<td>'.$row['date'].'</td>
	<td>'.$row['text'].' </td>
	<td>'.$row['title'].'</td>
	
	';
	}
	echo '</table>';
    ?>
	
    </td>
    <td width="16%" align="right" valign="top" bgcolor="#CCCCCC">
    <?php
	
	foreach($info as $row)
    $pass=$row['user_pass'];
	
	echo '
    <ul style="line-height:40px">
    <li style="direction:rtl; margin-right:20px" ><a href="http://localhost:81/university/index.php/uni/show_course/'.$pass.'">امورآمورشی</a></li>
	<li style="direction:rtl; margin-right:20px" ><a href="http://localhost:81/university/index.php/uni/visit_saved_course/'.$pass.'">مشاهده دروس اخذ شده</a></li>
    
    </ul>';
	?>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>