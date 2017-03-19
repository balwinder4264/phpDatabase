<?php
### function for genration the dynamic option list #####
function get_option_list($table,$col_id,$col_value,$sel=0)
{
$sql="select * from $table";
$rs=mysqli_query($sql) or die (mysqli_error($db));
$option_list="<option value=0>please select</option>";
while ($data=mysqli_fetch_assoc($rs))
{
$option_list.="<option value='$data[$col_id]'>
$data[$col_value] </option>";
}
return $option_list;
}
?>
