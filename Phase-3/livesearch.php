<?php
$conn = mysqli_connect('localhost', 'root', '123', 'research');
if(!$conn) {
  exit('Could not connect');
}
$p=$_GET['q'];// there are 12 queries. use switch-case or if-elseif-else to select the required query for that option. The serial numbers along with sql query and purpose are given in the final_queries.txt 
$q= $_GET['q']; //text typed in search box is sent by ajax via GET and $q has it
$sql = "SELECT fname FROM faculty WHERE fname LIKE '".$q."%'";  //sql query. will have to change it depending on the serial number.
$result =mysqli_query($conn, $sql); // execution of query
$hint="";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $hint .= $row["fname"].","; // join result strings with comma 
                                    // for 1. use dname instead of fname
                                    // for 2. use year 
                                    // for 3. use title
                                    // for 4. use dname and so on. See the WHERE clause and you will get an idea as to which column to use in $row[]
    }
} else {
    echo "0 results";
}
mysqli_close($conn);


// Set output to "" if no hint was found
// or to the correct values
if ($hint=="") {
  $response="";
} else {
  $response=$hint;
}
// similarly you will have to use switch-case or if-elseif-else and do it for the rest of the queries. Here in the above case the faculty names are sent based on the WHERE clause. 
//  LIKE is a key word used to specify the database to search for names which are similar to the one typed by the user and sent to variable $q. the . operator is used to concatenate strings.
//output the response
echo $response;
?>

