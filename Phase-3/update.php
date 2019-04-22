
<?php
$connect = mysqli_connect('localhost', 'root', '123', 'research');
mysqli_set_charset( $connect, 'utf8');
switch($_POST["sel"])
{
    case 'publication': $pk='pid';break;
    case 'activity' : $pk='activity_id';break;
    case 'domain': $pk='dname';break;
    case 'faculty' : $pk='fid';break; 
    case 'grants' : $pk='grant_id';break;  
    case 'mou' : $pk='mou_id';break;
    case 'patent' : $pk='pnum';break; 
    case 'proposals' : $pk='project_id';break; 
    default : $pk="";
}
if(($_POST["sel"]=='fpublication') || ($_POST["sel"]=='spublication'))
{
        $value = mysqli_real_escape_string($connect, $_POST["value"]);
        $pk= explode('-',$_POST["id"]);
        if(($_POST["sel"]=='fpublication') )
        {
        $query = "UPDATE ".$_POST["sel"]." SET ".$_POST["column_name"]."='".$value."' WHERE pid = '".$pk[1]."' AND fid = '$pk[0]'";
        }
        else{
            $query = "UPDATE ".$_POST["sel"]." SET ".$_POST["column_name"]."='".$value."' WHERE pid = '".$pk[1]."' AND sname = '$pk[0]'";
        }
        if(mysqli_query($connect, $query))
        {
        echo 'Data Updated';
        }
}
else{
if(isset($_POST["id"]))
{
 $value = mysqli_real_escape_string($connect, $_POST["value"]);
 $query = "UPDATE ".$_POST["sel"]." SET ".$_POST["column_name"]."='".$value."' WHERE ".$pk." = '".$_POST["id"]."'";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Updated';
 }
}
}
?>

