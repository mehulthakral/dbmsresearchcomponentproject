<?php
$connect = mysqli_connect('localhost', 'root', '123', 'research');
mysqli_set_charset( $connect, 'utf8');
switch($_POST["sel"])
{
    case 'publication': $columns = array('pid', 'title','year','type','details');$pk='pid';break;
    case 'fpublication': $columns = array('fid', 'pid');$pk='pid';break;
    case 'spublication': $columns = array('sname', 'pid');$pk='pid';break;
    case 'activity' : $columns = array('activity_id','dname', 'session','detail');$pk='activity_id';break;
    case 'domain': $columns = array('dname','head_id');$pk='dname';break;
    case 'faculty' : $columns = array('fid', 'fname','doj','role');$pk='fid';break; 
    case 'grants' : $columns = array('grant_id', 'title','agency','year','amount','duration','investigator1','investigator2');$pk='grant_id';break;  
    case 'mou' : $columns = array('mou_id', 'dname','area','org_name','date');$pk='mou_id';break;
    case 'patent' : $columns = array('pnum', 'fid','title','staus');$pk='pnum';break; 
    case 'proposals' : $columns = array('project_id', 'project_name','p_investigator_fid','cp_investigator_fid','amount','agency','status','year');$pk='project_id';break; 
}
if(($_POST["sel"]=='fpublication') || ($_POST["sel"]=='spublication'))
{
    $temp = mysqli_real_escape_string($connect, $_POST[$columns[0]]);
    $temp1 = mysqli_real_escape_string($connect, $_POST[$columns[1]]);
    $query = "INSERT INTO ".$_POST["sel"]." (".$columns[0].",".$columns[1].") VALUES('$temp','$temp1')";
}
else{
$c=0;
$temp = mysqli_real_escape_string($connect, $_POST[$pk]);
$query = "INSERT INTO ".$_POST["sel"]." (".$pk.") VALUES('$temp')";
if(mysqli_query($connect, $query))
{
    $c++;
}


for($i=1;$i<count($columns);$i++)
{
        if(isset($_POST[$columns[$i]]))
        {
            $temp = mysqli_real_escape_string($connect, $_POST[$columns[$i]]);
            $query = "UPDATE ".$_POST["sel"]." SET ".$columns[$i]."='".$temp."' WHERE ".$pk." = '".$_POST[$pk]."'";
            if(mysqli_query($connect, $query))
              {
                  $c++;
              }
        }
}
}
echo 'Data Inserted';


?>