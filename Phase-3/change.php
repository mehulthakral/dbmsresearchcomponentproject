<?php
$connect = mysqli_connect('localhost', 'root', '123', 'research');
mysqli_set_charset( $connect, 'utf8');
if(isset($_POST["fid"]))
{
 $value = mysqli_real_escape_string($connect, $_POST["passwd"]);
 $query = "UPDATE faculty SET password='".$value."' WHERE fid = '".$_POST["fid"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Password Successfully Updated !';
 }
}
?>