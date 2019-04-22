<?php



    $conn = mysqli_connect('localhost', 'root', '123', 'research');
    mysqli_set_charset( $conn, 'utf8');
	//check connection
	if(!$conn)
	{
		die("Connection failed: ".mysqli_connect_error());
	}
    
    $p=$_GET['q']; // there are 10 queries. use switch-case or if-elseif-else to select the required query for that option
    $q=$_GET['d'];
    //echo "First arg " .$p ." Second arg " . $q ;
    if($p=='1'){
        //for publications
        $sql = "SELECT p.pid,p.title,p.year,p.type,p.details FROM publication as p,fpublication as fp, faculty as f WHERE p.pid=fp.pid and fp.fid=f.fid and lower(f.fname) Like '%".$q."%' ORDER BY `p`.`year`  DESC";
        $result = mysqli_query($conn,$sql);
        echo "Publications:";
        echo "<table class='table table-bordered'>"; 
        echo "<thead>";

        echo "<tr>";
        echo "<th>PID</th>";
        echo "<th>Title</th>";   
        echo "<th>Year</th>";
        echo "<th>Type</th>";
        echo "</tr>";
        echo "</thead>";
        if (mysqli_num_rows($result)>0) {
            while($row = mysqli_fetch_assoc($result)) {        
                echo "<tr>";                              
                echo "<td>" . $row['pid'] . "</td>";          
                echo "<td>" . $row['title'] . "</td>";        
                echo "<td>" . $row['year'] . "</td>";        
                echo "<td>" . $row['type'] . "</td>";        
                echo "</tr>";
            }
        }
        echo "</table><br><br>";

        //for patents
        $sql = "SELECT patent_id,title,status from patent as p,faculty as f where LOWER(fname) LIKE '%".$q."%' AND p.fid=f.fid";
        $result = mysqli_query($conn,$sql);
        echo "Patents:";
        echo "<table class='table table-bordered'>"; 
        echo "<thead>";

        echo "<tr>";
        echo "<th>PatentID</th>";
        echo "<th>Title</th>";   
        echo "<th>Status</th>";
        echo "</tr>";
        echo "</thead>";
        if (mysqli_num_rows($result)>0) {
            while($row = mysqli_fetch_assoc($result)) {        
                echo "<tr>";                              
                echo "<td>" . $row['patent_id'] . "</td>";          
                echo "<td>" . $row['title'] . "</td>";        
                echo "<td>" . $row['status'] . "</td>";        
                        
                echo "</tr>";
            }
        }
        echo "</table><br><br>";

        //for grants
        $sql = "SELECT * FROM grants where title in (SELECT title from grants where LOWER(investigator1) LIKE '%".$q."%') or (SELECT title from grants where LOWER(investigator2) LIKE '%".$q."%') ORDER BY year DESC";
        $result = mysqli_query($conn,$sql);
        echo "Grants:";
        echo "<table class='table table-bordered'>"; 
        echo "<thead>";

        echo "<tr>";
        echo "<th>Grant_ID</th>";
        echo "<th>Title</th>";   
        echo "<th>Agency</th>";
        echo "<th>Year</th>";
        echo "<th>Amount</th>";
        echo "<th>Duration</th>";

        echo "</tr>";
        echo "</thead>";
        if (mysqli_num_rows($result)>0) {
            while($row = mysqli_fetch_assoc($result)) {        
                echo "<tr>";                              
                echo "<td>" . $row['grant_id'] . "</td>";          
                echo "<td>" . $row['title'] . "</td>";        
                echo "<td>" . $row['agency'] . "</td>";        
                echo "<td>" . $row['year'] . "</td>"; 
                echo "<td>" . $row['amount'] . "</td>";
                echo "<td>" . $row['duration'] . "</td>";   
                echo "<td>" . $row['investigator1'] . "</td>"; 
                echo "<td>" . $row['investigator2'] . "</td>";   
                echo "</tr>";
            }
        }
        echo "</table><br><br>";
        $escapedArgumment = escapeshellarg($q);
        $output=shell_exec("C:\\xampp\\htdocs\\DBMS\\python\\python3.exe C:\\xampp\\htdocs\\DBMS\\graphs.py $escapedArgumment");
        $q=implode("",explode(" ",$q));
        echo "<center>Graph</center><br>";
        echo "<center><img src='./images/publication_".$q.".png'></center>";

    }
    else if($p=='2'){
        //for detail
        $sql = "SELECT dname ,fname FROM domain as d,faculty as f WHERE LOWER(d.dname) LIKE '%".$q."%' and d.head_id=f.fid";
        $result = mysqli_query($conn,$sql);
        echo "Head:";
        echo "<table class='table table-bordered'>"; 
        echo "<thead>";

        echo "<tr>";
        echo "<th>Domain Name</th>";
        echo "<th>Head Name</th>";   
        echo "</tr>";
        echo "</thead>";
        if (mysqli_num_rows($result)>0) {
            while($row = mysqli_fetch_assoc($result)) {        
                echo "<tr>";                              
                echo "<td>" . $row['dname'] . "</td>";          
                echo "<td>" . $row['fname'] . "</td>";               
                echo "</tr>";
            }
        }
        echo "</table><br><br>";

        //for Activities
        $sql = "SELECT detail,session from activity where LOWER(dname) LIKE '%".$q."%'";
        $result = mysqli_query($conn,$sql);
        echo "Activities:";
        echo "<table class='table table-bordered'>"; 
        echo "<thead>";

        echo "<tr>";
        echo "<th>Detail</th>";
        echo "<th>Session</th>";   
        echo "</tr>";
        echo "</thead>";
        if (mysqli_num_rows($result)>0) {
            while($row = mysqli_fetch_assoc($result)) {        
                echo "<tr>";                              
                echo "<td>" . $row['detail'] . "</td>";          
                echo "<td>" . $row['session'] . "</td>";              
                echo "</tr>";
            }
        }
        echo "</table><br><br>";

        //for MOUs
        $sql = "SELECT area,org_name,date from mou where LOWER(dname) LIKE '%".$q."%' ORDER BY date DESC";
        $result = mysqli_query($conn,$sql);
        echo "MOUs:";
        echo "<table class='table table-bordered'>"; 
        echo "<thead>";

        echo "<tr>";
        echo "<th>Area</th>";
        echo "<th>Organization Name</th>";   
        echo "<th>Date</th>";
        echo "</tr>";
        echo "</thead>";
        if (mysqli_num_rows($result)>0) {
            while($row = mysqli_fetch_assoc($result)) {        
                echo "<tr>";                              
                echo "<td>" . $row['area'] . "</td>";          
                echo "<td>" . $row['org_name'] . "</td>";        
                echo "<td>" . $row['date'] . "</td>";           
                echo "</tr>";
            }
        }
        echo "</table><br><br>";
    }
    else if($p=='3'){
        //for detail
        $sql = "SELECT * FROM publication where lower(title) LIKE '%".$q."%'";
        $result = mysqli_query($conn,$sql);
        echo "Detail:";
        echo "<table class='table table-bordered'>"; 
        echo "<thead>";

        echo "<tr>";
        echo "<th>PID</th>";
        echo "<th>Title</th>";
        echo "<th>Year</th>";
        echo "<th>Type</th>"; 
        echo "<th>Details</th>";  
        echo "</tr>";
        echo "</thead>";
        if (mysqli_num_rows($result)>0) {
            while($row = mysqli_fetch_assoc($result)) {        
                echo "<tr>";                              
                echo "<td>" . $row['pid'] . "</td>";          
                echo "<td>" . $row['title'] . "</td>";  
                echo "<td>" . $row['year'] . "</td>";
                echo "<td>" . $row['type'] . "</td>";
                echo "<td>" . $row['details'] . "</td>";             
                echo "</tr>";
            }
        }
        echo "</table><br><br>";

        //for Faculties
        $sql = "SELECT fname FROM `publication` as p,fpublication as fp,faculty as f WHERE p.pid=fp.pid and fp.fid=f.fid and LOWER(p.title) LIKE '%".$q."%'";
        $result = mysqli_query($conn,$sql);
        echo "Faculties:";
        echo "<table class='table table-bordered'>"; 
        echo "<thead>";

        echo "<tr>";
        echo "<th>Faculty Name</th>";   
        echo "</tr>";
        echo "</thead>";
        if (mysqli_num_rows($result)>0) {
            while($row = mysqli_fetch_assoc($result)) {        
                echo "<tr>";                              
                echo "<td>" . $row['fname'] . "</td>";                        
                echo "</tr>";
            }
        }
        echo "</table><br><br>";

        //for Student
        $sql = "SELECT sname FROM `publication` as p,`spublication` as sp WHERE p.pid=sp.pid and LOWER(p.title) LIKE '%".$q."%'";
        $result = mysqli_query($conn,$sql);
        echo "Students:";
        echo "<table class='table table-bordered'>"; 
        echo "<thead>";

        echo "<tr>";
        echo "<th>Student Name</th>";
        echo "</tr>";
        echo "</thead>";
        if (mysqli_num_rows($result)>0) {
            while($row = mysqli_fetch_assoc($result)) {        
                echo "<tr>";                              
                echo "<td>" . $row['sname'] . "</td>";       
                echo "</tr>";
            }
        }
        echo "</table><br><br>";
    }
    else{
        echo "Query No. ".$q;
    }
    mysqli_close($conn);
?>