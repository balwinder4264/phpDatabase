<?php include_once("includes/header.php"); ?>

<form action"" name="student_frm" enctype ="multitype/form-data">
<table width="90%" border="1" align="center">
  <th colspan="4" >Student registration form
  </th>

  <tr>
    <th >student</th>
    <td ><form action="" method="post" name="st_name" id="st_name">
      <input type="text" name="st_student" id="st_student">
    </form></td>
    <th >father</th>
    <td ><form name="form1" method="post" action="">
      <input type="text" name="st_father" id="st_father">
    </form></td>
  </tr>
  <tr>
    <th >adress</th>
    <td ><form name="form2" method="post" action="">
      <textarea name="st_address" id="st_address" cols="45" rows="5"></textarea>
    </form></td>
    <th >city</th>
    <td ><select name="st_city" id="st_city">
   <?php get_option_list("city","city_id"
,"city_name"); ?>    </select></td>
  </tr>
  <tr>
    <th >nationality</th>
    <td ><form action="" method="post" name="st_nationality" id="st_nationality">
      <input type="text" name="st_nationality" id="st_nationality">
    </form></td>
    <th >course</th>
    <td ><form name="form3" method="post" action="">
      <select name="st_course" id="st_course">
      </select>
    </form></td>
  </tr>
  <tr>
    <th >gender</th>
    <td ><form name="form4" method="post" action="">
      male
      <input type="checkbox" name="st_gender" id="st_gender">
    </form></td>
    <th >qulification</th>
    <td ><input type="radio" name="st_qualification" id="radio2" value="radio">
      mca</td>
  </tr>
  <tr>
    <th colspan="4" ><form id="form5" name="form5" method="post" action="">
      <input type="submit" name="st_submit" id="st_submit" value="Submit" />
      <input type="reset" name="st_Reset" id="button" value="Reset" />
    </form></th>
  </tr>
</table>
<?php include_once("includes/footer.php"); ?>