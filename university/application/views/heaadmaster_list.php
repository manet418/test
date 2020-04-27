<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="../../style/style.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body style="background-image:url(<?php echo base_url();?>/image/vichy.png)">
<?php

if($test==1)
echo 'اطلاعات با موفقیت درج شد';

?>
<p>&nbsp;</p>
<table width="90%" height="581" border="0" cellpadding="5" cellspacing="5" style="margin:auto">
  <tr>
    <td height="89" colspan="2" bgcolor="#CCCCCC" style="direction:rtl; padding-right:30px">میز کار مدیر گروه:</td>
  </tr>
  <tr>
    <td width="84%" height="327" align="right" valign="top" bgcolor="#CCCCCC"><form id="form1" name="form1" method="post" action="<?php echo base_url();?>/index.php/uni/save_course">
      <table width="62%" border="0" align="right" cellspacing="5" cellpadding="5" style=" float:left">
        <tr>
          <td height="293" align="right" valign="top">
		  <?php if($test==2)
           {$this->load->library('form_validation');
            echo validation_errors();
            }?></td>
        </tr>
      </table>
      <p>:لطفا مشخصات درس جدید را وارد کنید   </p>
      <p>
        <label for="course_name"></label>
        <input type="text" name="course_name" id="course_name" />
        :نام درس </p>
      <p>
        <label for="teacher_name"></label>
        <input type="text" name="teacher_name" id="teacher_name" />
        :نام استاد</p>
      <p>
        <label for="class_time"></label>
        <input type="text" name="class_time" id="class_time" />
        :زمان کلاس</p>
      <p>
        <label for="exam_time"></label>
        <input type="text" name="exam_time" id="exam_time" />
        :زمان امتحان</p>
      <p>
        <label for="max"></label>
        <input type="text" name="max" id="max" />
        :ظرفیت کلاس</p>
      <p>
        <input type="submit" name="button" id="button" value="درس اضافه شود" />
      </p>
    </form></td>
    <td width="16%" rowspan="2" align="right" valign="top" bgcolor="#CCCCCC">
    <ul style="line-height:40px">
    <li style="direction:rtl; margin-right:20px" ><a href="<?php echo base_url();?>/index.php/uni/heaadmaster_list">امورآمورشی</a></li>
    
    <li style="direction:rtl; margin-right:20px"><a href="<?php echo base_url();?>/index.php/uni/news_page">درج اخبار و اطلاعیه ها</a></li>
    <li style="direction:rtl; margin-right:20px"><a href="<?php echo base_url();?>/index.php/uni/return_master">میزکار</a></li>
    </ul>
    </td>
  </tr>
  <tr>
    <td height="108" align="right" valign="top" bgcolor="#CCCCCC"><form id="form2" name="form2" method="post" action="<?php echo base_url();?>/index.php/uni/show_course_list">
      <input type="submit" name="button2" id="button2" value="مشاهده لیست دروس" />
    </form></td>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>