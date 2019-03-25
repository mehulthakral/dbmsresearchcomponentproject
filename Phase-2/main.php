<?php

session_start();
?>
<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<!-- Meta, title, CSS, favicons, etc. -->

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">

<title>Dashboard | PESU Academy</title>


<link href="./Dashboard _ PESU Academy_files/bootstrap.min.css" rel="stylesheet">
<link href="./Dashboard _ PESU Academy_files/font-awesome.min.css" rel="stylesheet">
<link href="./Dashboard _ PESU Academy_files/jasny-bootstrap.min.css" rel="stylesheet">
<link href="./Dashboard _ PESU Academy_files/bootstrap-table.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./Dashboard _ PESU Academy_files/bootstrap-datetimepicker.min.css">
<link rel="stylesheet" type="text/css" href="./Dashboard _ PESU Academy_files/datatables.min.css">
<link rel="stylesheet" type="text/css" href="./Dashboard _ PESU Academy_files/buttons.bootstrap.min.css">
<link rel="stylesheet" href="./Dashboard _ PESU Academy_files/daterangepicker.css">
<link href="./Dashboard _ PESU Academy_files/fullcalendar.css" rel="stylesheet">
<link href="./Dashboard _ PESU Academy_files/style.css" rel="stylesheet">
<link href="./Dashboard _ PESU Academy_files/prettify.css" rel="stylesheet">
<link href="./Dashboard _ PESU Academy_files/profile.css" rel="stylesheet">
<script async="" src="./Dashboard _ PESU Academy_files/f.txt"></script>
<link href="./Dashboard _ PESU Academy_files/croppie.css" rel="stylesheet">
<script src="./Dashboard _ PESU Academy_files/jquery.min.js.download"></script>
<script src="./Dashboard _ PESU Academy_files/jquery-ui.min.js.download"></script>

	
	
<script src="./Dashboard _ PESU Academy_files/bootbox.min.js.download"></script>
<script src="./Dashboard _ PESU Academy_files/jquery.circliful.min.js.download"></script>
<script src="./Dashboard _ PESU Academy_files/datatables.min.js.download"></script> 
<script src="./Dashboard _ PESU Academy_files/dataTables.buttons.min.js.download"></script> 
<script src="./Dashboard _ PESU Academy_files/buttons.bootstrap.min.js.download"></script>
<script src="./Dashboard _ PESU Academy_files/prettify.js.download"></script>
<script src="./Dashboard _ PESU Academy_files/jquery.scrollbar.min.js.download"></script>
<script src="./Dashboard _ PESU Academy_files/croppie.js.download" type="text/javascript" charset="utf-8"></script>

<style type="text/css" id="notify-bootstrap">

select.inputs, select#soflow-color {
   -webkit-appearance: button;
   -webkit-border-radius: 2px;
   -webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
   -webkit-padding-end: 20px;
   -webkit-padding-start: 2px;
   -webkit-user-select: none;
   background-image: url(http://i62.tinypic.com/15xvbd5.png), -webkit-linear-gradient(#FAFAFA, #F4F4F4 40%, #E5E5E5);
   background-position: 97% center;
   background-repeat: no-repeat;
   border: 1px solid #AAA;
   color: #555;
   font-size: inherit;
   overflow: hidden;
   padding: 5px 10px;
   text-overflow: ellipsis;
   white-space: nowrap;
   width: 500px;
}

</style>

</head>
<body>

	<header role="banner">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
				
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar" aria-expanded="false">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
				<a class="navbar-brand" href=""><img alt="Assessment" src="./Dashboard _ PESU Academy_files/logoPesu.png" style="margin-top: -12px; width: 66%;" class="img-responsive"> </a>
			
						
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="pesu-std-profile-main-menu">

					<ul class="nav navbar-nav navbar-right">
						
					<li class="dropdown"><div class="drpdwn-menu drpdwn-meditsaveenu-right"><ul><li class="dropdown adjustgap"><a href="https://pesuacademy.com/Academy/a/studentProfile#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <?php echo($_SESSION["user_name"]); ?> <span class="caret"></span></a>
							<ul class="dropdown-menu drpdwn-meditsaveenu-right col-menu-0" role="menu">
								<li><a href="logout.php" id="logoutInfo">Logout</a></li>

							</ul></li></ul></div></li></ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
	</header>
	
	





<div class="col-sm-3 col-md-2 sidebar-offcanvas collapse" id="sidebar" role="navigation" aria-expanded="false">
	<div class="profile-userpic">
		<img src="./images/loginavatar.png">
	</div>
	
	<div class="profile-usertitle">
		<div id="fname" class="profile-usertitle-name"><?php echo($_SESSION["user_name"]); ?></div>
		
		
		<div id="fid" class="profile-usertitle-name"><?php echo($_SESSION["user_id"]); ?></div>
		
		<div id="role" class="profile-usertitle-name"><?php echo($_SESSION["role"]); ?></div>
		
		<div class="profile-usertitle-class">Computer Science and Engineering </div>
		

	</div>

		<ul class="nav nav-sidebar" id="studentProfileHomeMenu">
		
			<li id="menuTab_1" class="nav-item active" ><a class="nav-link active" data-toggle="tab" href="#view" role="tab" aria-controls="home" aria-selected="true">View</a></li>
		
			<li id="menuTab_2" class="nav-item" ><a class="nav-link" data-toggle="tab" href="#edit" role="tab" aria-controls="profile" aria-selected="false">Input</a></li>
			
			<li id="menuTab_2" class="nav-item" ><a class="nav-link" data-toggle="tab" href="#update" role="tab" aria-controls="profile" aria-selected="false">Update</a></li>

			<li id="menuTab_2" class="nav-item" ><a class="nav-link" data-toggle="tab" href="#delete" role="tab" aria-controls="profile" aria-selected="false">Delete</a></li>
		
		</ul>
		</div><div class="scroll-element scroll-x scroll-scrolly_visible"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar" style="width: 89px;"></div></div></div>

<div id="StudentProfileContent" class="col-sm-9 col-md-10 main">
	<div class="tab-content">
  	<div class="tab-pane active" id="view" role="tabpanel" aria-labelledby="home-tab">
					<div class="col-md-8 col-md-offset-2">
							<h3><center>Search</center></h3><br>
							<div class="form-group">
  								<label for="usr">Name:</label>
 									<input type="text" class="form-control" id="usr">
							</div>
					</div>

					<div class="col-md-8 col-md-offset-2">
										<h3><center>Results</center></h3><br>
					
										<table class="table">
												<thead class="thead-dark">
													<tr>
														<th scope="col">#</th>
														<th scope="col">Name</th>
														<th scope="col">FID</th>
														<th scope="col">Role</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Mamatha H R</td>
														<td>01UF11430</td>
														<td>admin</td>
													</tr>
													<tr>
														<th scope="row">2</th>
														<td>N S Kumar</td>
														<td>WF1120</td>
														<td>user</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td>Preet Kanwal</td>
														<td>01UF11194</td>
														<td>admin</td>
													</tr>
												</tbody>
											</table>
											<br>
										<table class="table">
												<thead class="thead-dark">
													<tr>
														<th scope="col">#</th>
														<th scope="col">Name</th>
														<th scope="col">FID</th>
														<th scope="col">Role</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th scope="row">1</th>
														<td>Mamatha H R</td>
														<td>01UF11430</td>
														<td>admin</td>
													</tr>
													<tr>
														<th scope="row">2</th>
														<td>N S Kumar</td>
														<td>WF1120</td>
														<td>user</td>
													</tr>
													<tr>
														<th scope="row">3</th>
														<td>Preet Kanwal</td>
														<td>01UF11194</td>
														<td>admin</td>
													</tr>
												</tbody>
											</table>
					</div>
		</div>
  	<div class="tab-pane" id="edit" role="tabpanel" aria-labelledby="profile-tab">
				<div class="col-md-8 col-md-offset-2">
							<h3>Manual Input</h3>
							<br>
							<form class="form-inline"  enctype="multipart/form-data">
											<select  class="inputs" id="soflow" onchange="myFunction()">
												<option value="0" selected disabled hidden>Choose...</option>
												<?php if($_SESSION["role"]=='admin') 
												{
																	echo("<option value='activity'>Activities</option>");
												 					echo("<option value='domain'>Domains</option>");
																	echo("<option value='faculty'>Faculty</option>");
																	echo("<option value='mou'>MOUs</option>");
												} ?>
												<option value="publication">Publications</option>
												<option value="patent">Patents</option>
												<option value="proposals">Proposals</option>
											</select>
											<br><br>
											<div class="container" id="append"></div>
											<button type="reset" class="btn btn-danger" onclick="myFunction2()">Reset</button>
                    	<button type="submit" class="btn btn-primary pull-right">Submit</button>
							</form>
							<script>
								  function myFunction2() {
												var div=document.getElementById("append");
												div.innerHTML="";
									}
									function myFunction() {
												var x = document.getElementById("soflow").value;
												var div=document.getElementById("append");
												div.innerHTML="";
															switch(x)
															{
																case 'activity':
																			labels=[document.createTextNode('Domain Name'),document.createTextNode('Session'),document.createTextNode('Details ')];
																			for(i=0;i<3;i+=1)
																			{
																			var ip=document.createElement("INPUT");
																			ip.setAttribute("type", "text");
																			var row=document.createElement("div");
																			row.className="row";
																			var col1=document.createElement("div");
																			col1.className="col-md-2";
																			var col2=document.createElement("div");
																			col2.className="col-md-2";
																			col1.appendChild(labels[i]);
																			col2.appendChild(ip);
																			row.appendChild(col1);
																			row.appendChild(col2);
																			div.appendChild(row);
																			var row=document.createElement("br");
																			div.appendChild(row);
																			}
																			break;
																case 'domain':
																			labels=[document.createTextNode('Domain Name'),document.createTextNode('Domain Head ID')];
																			for(i=0;i<2;i+=1)
																			{
																			var ip=document.createElement("INPUT");
																			ip.setAttribute("type", "text");
																			var row=document.createElement("div");
																			row.className="row";
																			var col1=document.createElement("div");
																			col1.className="col-md-2";
																			var col2=document.createElement("div");
																			col2.className="col-md-2";
																			col1.appendChild(labels[i]);
																			col2.appendChild(ip);
																			row.appendChild(col1);
																			row.appendChild(col2);
																			div.appendChild(row);
																			var row=document.createElement("br");
																			div.appendChild(row);
																			}
																			break;
																case 'faculty':
																			labels=[document.createTextNode('Faculty ID'),document.createTextNode('Faculty Name'),document.createTextNode('Date of Joining'),document.createTextNode('Password')];
																			for(i=0;i<4;i+=1)
																			{
																			var ip=document.createElement("INPUT");
																			ip.setAttribute("type", "text");
																			var row=document.createElement("div");
																			row.className="row";
																			var col1=document.createElement("div");
																			col1.className="col-md-2";
																			var col2=document.createElement("div");
																			col2.className="col-md-2";
																			col1.appendChild(labels[i]);
																			col2.appendChild(ip);
																			row.appendChild(col1);
																			row.appendChild(col2);
																			div.appendChild(row);
																			var row=document.createElement("br");
																			div.appendChild(row);
																			}

																			break;
																case 'publication':
																			labels=[document.createTextNode('Publication ID'),document.createTextNode('Title'),document.createTextNode('Session'),document.createTextNode('Type'),document.createTextNode('details'),document.createTextNode('students')];
																			for(i=0;i<6;i+=1)
																			{
																			var ip=document.createElement("INPUT");
																			ip.setAttribute("type", "text");
																			var row=document.createElement("div");
																			row.className="row";
																			var col1=document.createElement("div");
																			col1.className="col-md-2";
																			var col2=document.createElement("div");
																			col2.className="col-md-2";
																			col1.appendChild(labels[i]);
																			col2.appendChild(ip);
																			row.appendChild(col1);
																			row.appendChild(col2);
																			div.appendChild(row);
																			var row=document.createElement("br");
																			div.appendChild(row);
																			}
																			break;
																case 'mou':
																			labels=[document.createTextNode('Domain Name'),document.createTextNode('Area'),document.createTextNode('Organization Name'),document.createTextNode('Date')];
																			for(i=0;i<4;i+=1)
																			{
																			var ip=document.createElement("INPUT");
																			ip.setAttribute("type", "text");
																			var row=document.createElement("div");
																			row.className="row";
																			var col1=document.createElement("div");
																			col1.className="col-md-2";
																			var col2=document.createElement("div");
																			col2.className="col-md-2";
																			col1.appendChild(labels[i]);
																			col2.appendChild(ip);
																			row.appendChild(col1);
																			row.appendChild(col2);
																			div.appendChild(row);
																			var row=document.createElement("br");
																			div.appendChild(row);
																			}
																			break;
																case 'patent':
																			labels=[document.createTextNode('Faculty ID'),document.createTextNode('Title'),document.createTextNode('Status'),document.createTextNode('Patent Number')];
																			for(i=0;i<4;i+=1)
																			{
																			var ip=document.createElement("INPUT");
																			ip.setAttribute("type", "text");
																			var row=document.createElement("div");
																			row.className="row";
																			var col1=document.createElement("div");
																			col1.className="col-md-2";
																			var col2=document.createElement("div");
																			col2.className="col-md-2";
																			col1.appendChild(labels[i]);
																			col2.appendChild(ip);
																			row.appendChild(col1);
																			row.appendChild(col2);
																			div.appendChild(row);
																			var row=document.createElement("br");
																			div.appendChild(row);
																			}
																			break;
																case 'proposals':
																			labels=[document.createTextNode('Project Name'),document.createTextNode('Project Investigator 1'),document.createTextNode('Project Investigator 2'),document.createTextNode('Amount'),document.createTextNode('Agency'),document.createTextNode('Status'),document.createTextNode('Year')];
																			for(i=0;i<7;i+=1)
																			{
																			var ip=document.createElement("INPUT");
																			ip.setAttribute("type", "text");
																			var row=document.createElement("div");
																			row.className="row";
																			var col1=document.createElement("div");
																			col1.className="col-md-2";
																			var col2=document.createElement("div");
																			col2.className="col-md-2";
																			col1.appendChild(labels[i]);
																			col2.appendChild(ip);
																			row.appendChild(col1);
																			row.appendChild(col2);
																			div.appendChild(row);
																			var row=document.createElement("br");
																			div.appendChild(row);
																			}
																			break;
															}
												}
							</script>
				</div>
				<div class="col-md-8 col-md-offset-2"><br><hr class="style13"><br></div>
									<div class="col-md-8 col-md-offset-2">
							<h3>Script Input</h3>
			 				<br>
            	<form method="POST" action="#" enctype="multipart/form-data">
                <!-- COMPONENT START -->
                <div class="form-group">
                    <div class="input-group input-file" name="Fichier1">
											  <span class="input-group-btn">
														<input type="text" class="form-control" placeholder='Choose a file...' style="width: 500px; height: 34px;"/>
                            <button class="btn btn-default btn-choose" type="button">Choose</button>
                        </span>
                    </div>
                </div>
                <!-- COMPONENT END -->
                <div class="form-group">
                    <button type="submit" class="btn btn-primary pull-right">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            	</form>
					</div>
		</div>
		<div class="tab-pane" id="update" role="tabpanel" aria-labelledby="profile-tab">
				<div class="col-md-8 col-md-offset-2">
							<h3>Update</h3>
							<br>
							<form class="form-inline"  id="form2" enctype="multipart/form-data">
											<select  id="soflow1" class="inputs" onchange="myFunction4()">
												<option value="0" selected disabled hidden>Choose...</option>
												<?php if($_SESSION["role"]=='admin') 
												{
																	echo("<option value='activity'>Activities</option>");
												 					echo("<option value='domain'>Domains</option>");
																	echo("<option value='mou'>MOUs</option>");
												} ?>
												<option value='faculty'>Faculty</option>
												<option value="publication">Publications</option>
												<option value="patent">Patents</option>
												<option value="proposals">Proposals</option>
											</select>
											<br><br>
											<div class="container" id="append1"></div>
											<button type="reset" class="btn btn-danger" onclick="myFunction3()">Reset</button>
                    	<button type="submit" class="btn btn-primary pull-right">Submit</button>
							</form>
							<script>
									$('#form2').submit(function (e) {
											var fid=document.getElementById("fid");
											// Get the Login Name value and trim it
											var sel = $('#soflow1').val();
											if(sel=='faculty')
											{
													var ele=document.getElementById("faculty_id");
													if(ele.value!=fid.innerHTML)
													{
														alert("Cannot Edit Other's Details !");
														ele.value="";
														e.preventDefault();
													}

											}
									});
								  function myFunction3() {
												var div=document.getElementById("append1");
												div.innerHTML="";
									}
									function myFunction4() {
												var x = document.getElementById("soflow1").value;
												var div=document.getElementById("append1");
												div.innerHTML="";
															switch(x)
															{
																case 'activity':
																			labels=[document.createTextNode('Domain Name'),document.createTextNode('Session'),document.createTextNode('Details ')];
																			for(i=0;i<3;i+=1)
																			{
																			var ip=document.createElement("INPUT");
																			ip.setAttribute("type", "text");
																			var row=document.createElement("div");
																			row.className="row";
																			var col1=document.createElement("div");
																			col1.className="col-md-2";
																			var col2=document.createElement("div");
																			col2.className="col-md-2";
																			col1.appendChild(labels[i]);
																			col2.appendChild(ip);
																			row.appendChild(col1);
																			row.appendChild(col2);
																			div.appendChild(row);
																			var row=document.createElement("br");
																			div.appendChild(row);
																			}
																			break;
																case 'domain':
																			labels=[document.createTextNode('Domain Name'),document.createTextNode('Domain Head ID')];
																			for(i=0;i<2;i+=1)
																			{
																			var ip=document.createElement("INPUT");
																			ip.setAttribute("type", "text");
																			var row=document.createElement("div");
																			row.className="row";
																			var col1=document.createElement("div");
																			col1.className="col-md-2";
																			var col2=document.createElement("div");
																			col2.className="col-md-2";
																			col1.appendChild(labels[i]);
																			col2.appendChild(ip);
																			row.appendChild(col1);
																			row.appendChild(col2);
																			div.appendChild(row);
																			var row=document.createElement("br");
																			div.appendChild(row);
																			}
																			break;
																case 'faculty':
																			type="text"
																			labels=[document.createTextNode('Faculty ID'),document.createTextNode('Faculty Name'),document.createTextNode('Date of Joining'),document.createTextNode('Password')];
																			for(i=0;i<4;i+=1)
																			{
																			if(i==3)
																			{
																				type="password"
																			}
																			var ip=document.createElement("INPUT");
																			ip.setAttribute("type", type);
																			if(i==0)
																			{
																				ip.setAttribute("id", "faculty_id");
																			}
																			var row=document.createElement("div");
																			row.className="row";
																			var col1=document.createElement("div");
																			col1.className="col-md-2";
																			var col2=document.createElement("div");
																			col2.className="col-md-2";
																			col1.appendChild(labels[i]);
																			col2.appendChild(ip);
																			row.appendChild(col1);
																			row.appendChild(col2);
																			div.appendChild(row);
																			var row=document.createElement("br");
																			div.appendChild(row);
																			}

																			break;
																case 'publication':
																			labels=[document.createTextNode('Publication ID'),document.createTextNode('Title'),document.createTextNode('Session'),document.createTextNode('Type'),document.createTextNode('details'),document.createTextNode('students')];
																			for(i=0;i<6;i+=1)
																			{
																			var ip=document.createElement("INPUT");
																			ip.setAttribute("type", "text");
																			var row=document.createElement("div");
																			row.className="row";
																			var col1=document.createElement("div");
																			col1.className="col-md-2";
																			var col2=document.createElement("div");
																			col2.className="col-md-2";
																			col1.appendChild(labels[i]);
																			col2.appendChild(ip);
																			row.appendChild(col1);
																			row.appendChild(col2);
																			div.appendChild(row);
																			var row=document.createElement("br");
																			div.appendChild(row);
																			}
																			break;
																case 'mou':
																			labels=[document.createTextNode('Domain Name'),document.createTextNode('Area'),document.createTextNode('Organization Name'),document.createTextNode('Date')];
																			for(i=0;i<4;i+=1)
																			{
																			var ip=document.createElement("INPUT");
																			ip.setAttribute("type", "text");
																			var row=document.createElement("div");
																			row.className="row";
																			var col1=document.createElement("div");
																			col1.className="col-md-2";
																			var col2=document.createElement("div");
																			col2.className="col-md-2";
																			col1.appendChild(labels[i]);
																			col2.appendChild(ip);
																			row.appendChild(col1);
																			row.appendChild(col2);
																			div.appendChild(row);
																			var row=document.createElement("br");
																			div.appendChild(row);
																			}
																			break;
																case 'patent':
																			labels=[document.createTextNode('Faculty ID'),document.createTextNode('Title'),document.createTextNode('Status'),document.createTextNode('Patent Number')];
																			for(i=0;i<4;i+=1)
																			{
																			var ip=document.createElement("INPUT");
																			ip.setAttribute("type", "text");
																			var row=document.createElement("div");
																			row.className="row";
																			var col1=document.createElement("div");
																			col1.className="col-md-2";
																			var col2=document.createElement("div");
																			col2.className="col-md-2";
																			col1.appendChild(labels[i]);
																			col2.appendChild(ip);
																			row.appendChild(col1);
																			row.appendChild(col2);
																			div.appendChild(row);
																			var row=document.createElement("br");
																			div.appendChild(row);
																			}
																			break;
																case 'proposals':
																			labels=[document.createTextNode('Project Name'),document.createTextNode('Project Investigator 1'),document.createTextNode('Project Investigator 2'),document.createTextNode('Amount'),document.createTextNode('Agency'),document.createTextNode('Status'),document.createTextNode('Year')];
																			for(i=0;i<7;i+=1)
																			{
																			var ip=document.createElement("INPUT");
																			ip.setAttribute("type", "text");
																			var row=document.createElement("div");
																			row.className="row";
																			var col1=document.createElement("div");
																			col1.className="col-md-2";
																			var col2=document.createElement("div");
																			col2.className="col-md-2";
																			col1.appendChild(labels[i]);
																			col2.appendChild(ip);
																			row.appendChild(col1);
																			row.appendChild(col2);
																			div.appendChild(row);
																			var row=document.createElement("br");
																			div.appendChild(row);
																			}
																			break;
															}
												}
							</script>
				</div>
		</div>
				<div class="tab-pane" id="delete" role="tabpanel" aria-labelledby="profile-tab">
				<div class="col-md-8 col-md-offset-2">
							<h3>Delete</h3>
							<br>
							<form class="form-inline"  id="form3" enctype="multipart/form-data">
											<select  id="soflow3" class="inputs" onchange="myFunction6()">
												<option value="0" selected disabled hidden>Choose...</option>
												<?php if($_SESSION["role"]=='admin') 
												{
																	echo("<option value='activity'>Activities</option>");
												 					echo("<option value='domain'>Domains</option>");
																	echo("<option value='mou'>MOUs</option>");
												} ?>
												<option value='faculty'>Faculty</option>
												<option value="publication">Publications</option>
												<option value="patent">Patents</option>
												<option value="proposals">Proposals</option>
											</select>
											<br><br>
											<div class="container" id="append3"></div>
											<button type="reset" class="btn btn-danger" onclick="myFunction5()">Reset</button>
                    	<button type="submit" class="btn btn-primary pull-right">Submit</button>
							</form>
							<script>
									$('#form3').submit(function (e) {
											var role=document.getElementById("role");
											// Get the Login Name value and trim it
											var fid=document.getElementById("fid");
											var ele=document.getElementById("faculty_id");
											// Get the Login Name value and trim it
											var sel = $('#soflow3').val();
											if(sel=='faculty' && role.innerHTML!='admin')
											{
												if(ele.value!=fid.innerHTML)
												{
														alert("Only Admins can Delete Other's Details !");
														ele.value="";
														e.preventDefault();
												}

											}
									});
								  function myFunction5() {
												var div=document.getElementById("append3");
												div.innerHTML="";
									}
									function myFunction6() {
												var x = document.getElementById("soflow3").value;
												var div=document.getElementById("append3");
												div.innerHTML="";
															switch(x)
															{
																case 'activity':
																			labels=[document.createTextNode('Domain Name'),document.createTextNode('Session'),document.createTextNode('Details ')];
																			for(i=0;i<3;i+=1)
																			{
																			var ip=document.createElement("INPUT");
																			ip.setAttribute("type", "text");
																			var row=document.createElement("div");
																			row.className="row";
																			var col1=document.createElement("div");
																			col1.className="col-md-2";
																			var col2=document.createElement("div");
																			col2.className="col-md-2";
																			col1.appendChild(labels[i]);
																			col2.appendChild(ip);
																			row.appendChild(col1);
																			row.appendChild(col2);
																			div.appendChild(row);
																			var row=document.createElement("br");
																			div.appendChild(row);
																			}
																			break;
																case 'domain':
																			labels=[document.createTextNode('Domain Name'),document.createTextNode('Domain Head ID')];
																			for(i=0;i<2;i+=1)
																			{
																			var ip=document.createElement("INPUT");
																			ip.setAttribute("type", "text");
																			var row=document.createElement("div");
																			row.className="row";
																			var col1=document.createElement("div");
																			col1.className="col-md-2";
																			var col2=document.createElement("div");
																			col2.className="col-md-2";
																			col1.appendChild(labels[i]);
																			col2.appendChild(ip);
																			row.appendChild(col1);
																			row.appendChild(col2);
																			div.appendChild(row);
																			var row=document.createElement("br");
																			div.appendChild(row);
																			}
																			break;
																case 'faculty':
																			type="text"
																			labels=[document.createTextNode('Faculty ID'),document.createTextNode('Faculty Name'),document.createTextNode('Date of Joining'),document.createTextNode('Password')];
																			for(i=0;i<4;i+=1)
																			{
																			if(i==3)
																			{
																				type="password"
																			}
																			var ip=document.createElement("INPUT");
																			ip.setAttribute("type", type);
																			if(i==0)
																			{
																				ip.setAttribute("id", "faculty_id");
																			}
																			var row=document.createElement("div");
																			row.className="row";
																			var col1=document.createElement("div");
																			col1.className="col-md-2";
																			var col2=document.createElement("div");
																			col2.className="col-md-2";
																			col1.appendChild(labels[i]);
																			col2.appendChild(ip);
																			row.appendChild(col1);
																			row.appendChild(col2);
																			div.appendChild(row);
																			var row=document.createElement("br");
																			div.appendChild(row);
																			}

																			break;
																case 'publication':
																			labels=[document.createTextNode('Publication ID'),document.createTextNode('Title'),document.createTextNode('Session'),document.createTextNode('Type'),document.createTextNode('details'),document.createTextNode('students')];
																			for(i=0;i<6;i+=1)
																			{
																			var ip=document.createElement("INPUT");
																			ip.setAttribute("type", "text");
																			var row=document.createElement("div");
																			row.className="row";
																			var col1=document.createElement("div");
																			col1.className="col-md-2";
																			var col2=document.createElement("div");
																			col2.className="col-md-2";
																			col1.appendChild(labels[i]);
																			col2.appendChild(ip);
																			row.appendChild(col1);
																			row.appendChild(col2);
																			div.appendChild(row);
																			var row=document.createElement("br");
																			div.appendChild(row);
																			}
																			break;
																case 'mou':
																			labels=[document.createTextNode('Domain Name'),document.createTextNode('Area'),document.createTextNode('Organization Name'),document.createTextNode('Date')];
																			for(i=0;i<4;i+=1)
																			{
																			var ip=document.createElement("INPUT");
																			ip.setAttribute("type", "text");
																			var row=document.createElement("div");
																			row.className="row";
																			var col1=document.createElement("div");
																			col1.className="col-md-2";
																			var col2=document.createElement("div");
																			col2.className="col-md-2";
																			col1.appendChild(labels[i]);
																			col2.appendChild(ip);
																			row.appendChild(col1);
																			row.appendChild(col2);
																			div.appendChild(row);
																			var row=document.createElement("br");
																			div.appendChild(row);
																			}
																			break;
																case 'patent':
																			labels=[document.createTextNode('Faculty ID'),document.createTextNode('Title'),document.createTextNode('Status'),document.createTextNode('Patent Number')];
																			for(i=0;i<4;i+=1)
																			{
																			var ip=document.createElement("INPUT");
																			ip.setAttribute("type", "text");
																			var row=document.createElement("div");
																			row.className="row";
																			var col1=document.createElement("div");
																			col1.className="col-md-2";
																			var col2=document.createElement("div");
																			col2.className="col-md-2";
																			col1.appendChild(labels[i]);
																			col2.appendChild(ip);
																			row.appendChild(col1);
																			row.appendChild(col2);
																			div.appendChild(row);
																			var row=document.createElement("br");
																			div.appendChild(row);
																			}
																			break;
																case 'proposals':
																			labels=[document.createTextNode('Project Name'),document.createTextNode('Project Investigator 1'),document.createTextNode('Project Investigator 2'),document.createTextNode('Amount'),document.createTextNode('Agency'),document.createTextNode('Status'),document.createTextNode('Year')];
																			for(i=0;i<7;i+=1)
																			{
																			var ip=document.createElement("INPUT");
																			ip.setAttribute("type", "text");
																			var row=document.createElement("div");
																			row.className="row";
																			var col1=document.createElement("div");
																			col1.className="col-md-2";
																			var col2=document.createElement("div");
																			col2.className="col-md-2";
																			col1.appendChild(labels[i]);
																			col2.appendChild(ip);
																			row.appendChild(col1);
																			row.appendChild(col2);
																			div.appendChild(row);
																			var row=document.createElement("br");
																			div.appendChild(row);
																			}
																			break;
															}
												}
							</script>
				</div>
		</div>
	</div>
</div>

<footer>
	<div class="footer" id="footer">
		<div class="container-fluid">
			<div class="row">

				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<p>To access your PESU Academy account everywhere, get the PESU
						app on your mobile device</p>

				</div>
				
				
				
			</div>
			<br>

		</div>
	</div>

</footer>
<script>

  $(function () {
    $('#myTab li:last-child a').tab('show')
	})
	function bs_input_file() {
	$(".input-file").before(
		function() {
			if ( ! $(this).prev().hasClass('input-ghost') ) {
				var element = $("<input type='file' class='input-ghost' name='fileToUpload' style='visibility:hidden; height:0'>");
				element.attr("name",$(this).attr("name"));
				element.change(function(){
					element.next(element).find('input').val((element.val()).split('\\').pop());
				});
				$(this).find("button.btn-choose").click(function(){
					element.click();
				});
				$(this).find("button.btn-reset").click(function(){
					element.val(null);
					$(this).parents(".input-file").find('input').val('');
				});
				$(this).find('input').css("cursor","pointer");
				$(this).find('input').mousedown(function() {
					$(this).parents('.input-file').prev().click();
					return false;
				});
				return element;
			}
		}
	);
}
$(function() {
	bs_input_file();
});
</script>
</body>
</html>