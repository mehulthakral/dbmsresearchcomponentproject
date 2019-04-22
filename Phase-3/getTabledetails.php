<?php
$conn = new mysqli('localhost', 'root', '123', 'research');
if($conn->connect_error) {          // connection to database with database name, username and password.
  exit('Could not connect');
}
$p=$_GET['q']; // there are 10 queries. use switch-case or if-elseif-else to select the required query for that option
$q=$_GET['q']; //text typed in search box is sent by ajax via GET and $q has it
$sql = "SELECT p.pid,p.title,p.year,p.type,p.details FROM publication as p,fpublication as fp, faculty as f WHERE p.pid=fp.pid and fp.fid=f.fid and lower(f.fname) Like '".$q."'";
$result=$conn->query($sql); // execution of query

echo "<table class='table table-bordered'>"; 
echo "<thead>";

echo "<tr>";
echo "<th>PID</th>";
echo "<th>Title</th>";   // Now the table template is printed using echo. Again depending on parameter $p this has to change
echo "<th>Year</th>";
echo "<th>Type</th>";
echo "</tr>";
echo "</thead>";
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {        // $row has all the row values and is called each time to get one row at a time. It is an associative array
      echo "<tr>";                              
      echo "<td>" . $row['pid'] . "</td>";          //$row[columnname in database table] is the format. since pid is a column in publication, 
      echo "<td>" . $row['title'] . "</td>";        //  it has become $row['pid'] and is concatinated by . operator with <td> </td> respectively.
      echo "<td>" . $row['year'] . "</td>";        //this while loop prints the data row wise <tr> <td>...</td><td>...</td>... </tr>
      echo "<td>" . $row['type'] . "</td>";        // So this again will change depending on the columns in SELECT query
      echo "</tr>";
  }
}
echo "</table><br><br>";    // end of table
$conn->close();   // closing 
?>