<?php
//fetch.php
$connect = mysqli_connect('localhost', 'root', '123', 'research');

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
mysqli_set_charset( $connect, 'utf8');

$query = "SELECT * FROM ".$_POST["sel"]." ";
if(isset($_POST["search"]["value"]) && $_POST["search"]["value"]!="")
{
    $query .= 'WHERE ';
    for($i=0;$i<count($columns)-1;$i++)
    {
    $query .= 'lower('.$columns[$i].') LIKE "%'.$_POST["search"]["value"].'%" OR ';
    }
    $query .= 'lower('.$columns[count($columns)-1].') LIKE "%'.$_POST["search"]["value"].'%" ';
}

if(isset($_POST["order"]))
{
 $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']].' '.strtoupper($_POST['order']['0']['dir']).' ';
}
else
{
 $query .= 'ORDER BY '.$pk.' DESC ';
}
$query1 = '';

if($_POST["length"] != -1)
{
$query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}
$number_filter_row = mysqli_num_rows(mysqli_query($connect, $query));
$result = mysqli_query($connect, $query . $query1);

$data = array();
//echo $query . $query1;
while($row = mysqli_fetch_array($result))
{
 $sub_array = array();
     for($i=0;$i<count($columns);$i++)
    {
        if(($_POST["sel"]=='fpublication') || ($_POST["sel"]=='spublication'))
        {
            $sub_array[] = '<div contenteditable class="update" data-id="'.$row[$columns[0]]."-".$row[$columns[1]].'" data-column="'.$columns[$i].'">' .$row[$columns[$i]] . '</div>';
        }
        else{
        $sub_array[] = '<div contenteditable class="update" data-id="'.$row[$pk].'" data-column="'.$columns[$i].'">' .$row[$columns[$i]] . '</div>';
        }
    }
    $sub_array[] = '<button type="button" name="delete" class="btn btn-danger btn-xs delete" id="'.$row[$pk].'">Delete</button>';
    $data[] = $sub_array;
}

function get_all_data($connect)
{
 $query = "SELECT * FROM publication";
 $result = mysqli_query($connect, $query);
 return mysqli_num_rows($result);
}

$output = array(
 "draw"    => intval($_POST["draw"]),
 "recordsTotal"  =>  get_all_data($connect),
 "recordsFiltered" => $number_filter_row,
 "data"    => $data
);

echo(json_encode($output));
?>