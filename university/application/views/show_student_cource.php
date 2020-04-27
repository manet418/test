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
    <td width="84%" height="447" align="right" valign="top" bgcolor="#CCCCCC" style="padding-top:30px">
   <?php
   
   if($test==1)
   echo '<p style=" color:#F69"><marquee>درس با موفقیت اخذ شد</marquee> </p>';
   $data=$pass;
   $pw=$pass;
   echo'<table border="1" cellpadding="5" cellspacing="5">';
   echo'
    <tr>
	    <td align="right">اخذدرس </td>
        <td align="right">ظرفیت کلاس</td>
        <td align="right">زمان امتحان</td>
        <td align="right">زمان کلاس</td>
        <td align="right" valign="top">نام استاد</td>
        <td align="right">نام درس </td>
		
      </tr>';
     
	  foreach($info as $row)
	  echo'
      <tr>
	  <td><a href="http://localhost:81/university/index.php/uni/give_course/'.$pw.'/'.$row['id'].'">اخذ درس</a></td>
        <td align="right">'.$row['max'].'</td>
        <td align="right">'.$row['exam_time'].'</td>
        <td align="right">'.$row['class_time'].'</td>
        <td align="right">'.$row['teacher_name'].'</td>
        <td align="right">'.$row['course_name'].'</td>
		
      </tr>';
	 echo '</table>';
   echo'
    </td>
    <td width="16%" align="right" valign="top" bgcolor="#CCCCCC">
    <ul style="line-height:40px">
    <li style="direction:rtl; margin-right:20px"><a href="http://localhost:81/university/index.php/uni/return_student/'.$data.'">میزکار</a></li>
    </ul>';
  ?>
    </td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>