<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background-image:url(<?php echo base_url();?>/image/vichy.png)">
<table width="73%" border="1" cellspacing="5" cellpadding="5" style="margin:auto; margin-top:50px">
<?php
$id=$pass['student_pass'];
foreach($info as $row)
{
	
	
echo'
  <tr>
    <td width="1057" align="right">'.$row['course_name'].'</td>
    <td width="269" height="70" align="center">نام درس</td>
  </tr>
  <tr>
    <td align="right">'.$row['teacher_name'].'</td>
    <td width="269" height="70" align="center">نام استاد</td>
  </tr>
  <tr>
    <td align="right">'.$row['class_time'].'</td>
    <td height="70" align="center">زمان کلاس</td>
  </tr>
  <tr>
    <td align="right">'.$row['exam_time'].'</td>
    <td height="70" align="center">زمان امتحان</td>
  </tr>
  <tr>
    <td align="right">'.$row['max'].'</td>
    <td height="70" align="center">ظرفیت</td>
  </tr>
  <tr>
    <td height="70" colspan="2"><form id="form1" name="form1" method="post" action="http://localhost:81/university/index.php/uni/return_student/'.$id.'">
      <input type="submit" name="button" id="button" value="بازگشت" />
    </form></td>

  </tr>';}
  ?>
</table>
</body>
</html>