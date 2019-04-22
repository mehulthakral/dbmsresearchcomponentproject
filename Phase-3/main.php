<?php

session_start();
?>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<!-- Meta, title, CSS, favicons, etc. -->

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">

<title>Dashboard | PESU Academy</title>


<link href="./PESU/bootstrap.min.css" rel="stylesheet">
<link href="./PESU/bootstrap-table.min.css" rel="stylesheet">
<link href="./PESU/datatables.min.css" rel="stylesheet">
<link href="./PESU/profile.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-2.1.3.min.js" integrity="sha256-ivk71nXhz9nsyFDoYoGf2sbjrR9ddh+XDkCcfZxjvcM=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="./PESU/datatables.min.js.download"></script> 
<script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>


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
.modal-dialog{
 
          width: 360px;
 
        }
 
.modal-header {
 
    background-color: #337AB7;
 
    padding:16px 16px;
 
    color:#FFF;
 
    border-bottom:2px dashed #337AB7;
} 
</style>
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 style="color:red;"><span class="glyphicon glyphicon-lock"></span>Change Pasword</h4>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span>Current Password</label>
              <input type="password" class="form-control" id="usrname" placeholder="Enter Current Password">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>New Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter New password">
						</div>
						<div class="form-group">
              <label for="psw2"><span class="glyphicon glyphicon-eye-open"></span>Confirm Password</label>
              <input type="password" class="form-control" id="psw2" placeholder="Confirm Password">
            </div>
            <button type="submit" class="btn btn-default btn-success btn-block" id="change"><span class="glyphicon glyphicon-off"></span> Change</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>
    </div>
  </div> 

</head>
<body>
	
<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>
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
				<a class="navbar-brand" href=""><img alt="Assessment" src="./PESU/logoPesu.png" style="margin-top: -12px; width: 66%;" class="img-responsive"> </a>
	
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="pesu-std-profile-main-menu">

					<ul class="nav navbar-nav navbar-right">
						
					<li class="dropdown"><div class="drpdwn-menu drpdwn-meditsaveenu-right"><ul><li class="dropdown adjustgap"><a href="https://pesuacademy.com/Academy/a/studentProfile#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <?php echo($_SESSION["user_name"]); ?> <span class="caret"></span></a>
							<ul class="dropdown-menu drpdwn-meditsaveenu-right col-menu-0" role="menu">
								<li><a href="logout.php" id="logoutInfo"> Logout</a></li>
								<li><button type="button" class="btn btn-link" id="myBtn">Change Password</button></li>
								</ul></li></ul></div></li></ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
		</nav>
	</header>
	
	<script>

</script>





<div class="col-sm-3 col-md-2 sidebar-offcanvas collapse" id="sidebar" role="navigation" aria-expanded="false">
	<div class="profile-userpic">
	<?php echo '<img class="profile-pic"  src="'.$_SESSION["user_photo"].'" id="upfile1" style="cursor:pointer">' ; ?>
	</div>
	
	<div class="profile-usertitle">
	<form action="" method="post" enctype="multipart/form-data" id="myform">
	<input type="file" id="file1" class="file-upload" name="image" accept="image/*" capture style="display:none"/>
	<input type="button" class="btn btn-danger" value="Upload" id="but_upload"></form>
		
		<div id="fname" class="profile-usertitle-name"><?php echo($_SESSION["user_name"]); ?></div>
		
		
		<div id="fid" class="profile-usertitle-name"><?php echo($_SESSION["user_id"]); ?></div>
		
		<div id="role" class="profile-usertitle-name"><?php echo($_SESSION["role"]); ?></div>
		
		<div class="profile-usertitle-class">Computer Science and Engineering </div>
		

	</div>

		<ul class="nav nav-sidebar" id="studentProfileHomeMenu">
			<li id="menuTab_1" class="nav-item active" ><a class="nav-link active" data-toggle="tab" href="#overview" role="tab" aria-controls="profile" aria-selected="true"><span class="glyphicon glyphicon-home"></span>Overview</a></li>
			<li id="menuTab_2" class="nav-item" ><a class="nav-link" data-toggle="tab" href="#view" role="tab" aria-controls="home" aria-selected="false"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;&nbsp;View</a></li>
			<li id="menuTab_3" class="nav-item" ><a class="nav-link" data-toggle="tab" href="#edit" role="tab" aria-controls="profile" aria-selected="false"><span class="glyphicon glyphicon-pencil"></span> Edit</a></li>

		
		</ul>
		</div><div class="scroll-element scroll-x scroll-scrolly_visible"><div class="scroll-element_outer"><div class="scroll-element_size"></div><div class="scroll-element_track"></div><div class="scroll-bar" style="width: 89px;"></div></div></div>

<div id="StudentProfileContent" class="col-sm-9 col-md-10 main">
	<div class="tab-content">
		<div class="tab-pane active" id="overview" role="tabpanel" aria-labelledby="home-tab">
				<h3><center>Research Overview</center></h3><br>
				<?php 
				$output=shell_exec("C:\\xampp\\htdocs\\DBMS\\python\\python3.exe C:\\xampp\\htdocs\\DBMS\\graphs.py");

				?>
				<div class="w3-container" style="margin-left: 170px;">
					<div class="w3-row-padding">
						<div class="col-md-4" >
							<img src="./images/publication.png" style="width:100%">
						</div>
						<div class="col-md-4 col-md-offset-2" >
							<img src="./images/fpublications.png" style="width:90%">
						</div>
					</div >
					<div class="w3-row-padding" >
							<div class="col-md-4" style="margin-top:5%">
							<img src="./images/grantsAndProposals.png" style="width:100%">
						</div>
						<div class="col-md-4 col-md-offset-2" style="margin-top:5%">
							<img src="./images/mous.png" style="width:100%">
						</div>
					</div>
				</div>
		</div>
  	<div class="tab-pane" id="view" role="tabpanel" aria-labelledby="view-tab">
					<h3><center>Search By</center></h3><br>
					<div class="col-md-4 col-md-offset-2">
										<input type="text" class="form-control" id="usr" onkeypress="liveSearch(this.value) " style="width:500px">
					</div>
					<div class="col-md-3 col-md-offset-1">
										<select id="chosen" class="inputs" style="width:280px">
												<option value=1>Faculty</option>
												<option value=2>Domain</option>
												<option value=3>Publication</option>
										</select>
										<br><br>
										<button class="btn btn-danger pull-right" id="showTablebtn" >Submit</button>
					</div>
						
					<div class="col-md-8 col-md-offset-2">
										<h3><center>Results</center></h3><br>
										<div id="showtable1">info will be listed here...</div>
					</div>
		</div>
		  	<div class="tab-pane" id="edit" role="tabpanel" aria-labelledby="profile-tab">
				<div class="col-md-8 col-md-offset-2">
							<h3>Manual Input</h3>
							<br>
									<select  class="inputs" id="selection" onchange="generateTableTemplate()">
												<option value="0" selected disabled hidden>Choose...</option>
												<?php if($_SESSION["role"]=='admin') 
												{
																	echo("<option value='activity'>Activities</option>");
												 					echo("<option value='domain'>Domains</option>");
																	echo("<option value='mou'>MOUs</option>");
																	echo("<option value='grants'>Grants</option>");
												} ?>
												<option value='faculty'>Faculty</option>
												<option value="publication">Publications</option>
												<option value="fpublication">Faculty Publications</option>
												<option value="spublication">Other's Publications</option>
												<option value="patent">Patents</option>
												<option value="proposals">Proposals</option>
									</select>
									<div align="right">
     							<button type="button" name="add" id="add" class="btn btn-info">Add</button>
									</div>
									<br />
									<div id="alert_message"></div>
									<br><br>
									<div id="showtable2">    
										<table id="user_data" class="table table-bordered table-striped">
												<thead id="insertion">
												</thead>
										</table>
									</div>
				</div>
				<div class="col-md-8 col-md-offset-2"><br><hr class="style13"><br></div>
									<div class="col-md-8 col-md-offset-2">
							<h3>Script Input For Publications</h3>
			 				<br>
            	<form method="POST" action="#" enctype="multipart/form-data">
                <!-- COMPONENT START -->
                <div class="form-group">
                    <div class="input-group input-file" name="Fichier1">
											  <span class="input-group-btn">
														<input type="text" class="form-control" placeholder='Choose a file...' style="width: 500px; height: 34px;"/>
                            <button class="btn btn-default btn-choose" type="button" >Choose</button>
                        </span>
                    </div>
                </div>
                <!-- COMPONENT END -->
                <div class="form-group">
                    <button type="submit" id="scip" class="btn btn-primary pull-right">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            	</form>
					</div>
		</div>
	</div>
</div>

							<script>
									$(document).ready(function(){$("#but_upload").hide();});

									$('#change').click(function(){
											if($('#psw').val()==$('#psw2').val())
											{
												$.post(
													"change.php",
													{ 'fid': $('#fid').text(),'passwd':$('#psw').val() },
													function(data) {
															alert(data)
													}
												);  
											}
										});
									$("#scip").click(function(){

													var fd = new FormData();
													var files = $('.input-ghost')[0].files[0];
													alert(files['name'])
													fd.append('file',files);
													$.ajax({
															url: 'script.php',
															type: 'post',
															data: fd,
															contentType: false,
															processData: false,
															success: function(response){
																	if(response != 0){
																			alert(response);
																			$("#but_upload").hide();
																	}else{
																			alert('file not uploaded');
																	}
															},
													});
											});
									function generateTableTemplate()
									{		
										if ( $.fn.DataTable.isDataTable('#user_data') )
										$('#user_data').DataTable().clear().destroy();			
										$('#insertion').empty();
										switch($('#selection').val())
										{
											case 'publication': document.getElementById("insertion").insertRow(-1).innerHTML = '<th>pid</th><th>title</th><th>year</th><th>type</th><th>details</th><th>operation</th>';break;
											case 'fpublication': document.getElementById("insertion").insertRow(-1).innerHTML = '<th>fid</th><th>pid</th>';break;
											case 'spublication': document.getElementById("insertion").insertRow(-1).innerHTML = '<th>sname</th><th>pid</th>';break;
											case 'activity' : document.getElementById("insertion").insertRow(-1).innerHTML = '<th>activity_id</th><th>dname</th><th>session</th><th>detail</th><th>operation</th>';break;
											case 'domain': document.getElementById("insertion").insertRow(-1).innerHTML = '<th>dname</th><th>head_id</th><th>operation</th>';break;
											case 'faculty' : document.getElementById("insertion").insertRow(-1).innerHTML = '<th>fid</th><th>fname</th><th>doj</th><th>role</th><th>operation</th>';break;
											case 'grants' : document.getElementById("insertion").insertRow(-1).innerHTML = '<th>grant_id</th><th>title</th><th>agency</th><th>year</th><th>amount</th><th>duration</th><th>investigator1</th><th>investigator2</th><th>operation</th>';break;
											case 'mou' : document.getElementById("insertion").insertRow(-1).innerHTML = '<th>mou_id</th><th>dname</th><th>area</th><th>org_name</th><th>date</th><th>operation</th>';break;
											case 'patent' : document.getElementById("insertion").insertRow(-1).innerHTML = '<th>pnum</th><th>fid</th><th>title</th><th>status</th><th>operation</th>';break;
											case 'proposals' : document.getElementById("insertion").insertRow(-1).innerHTML = '<th>project_id</th><th>project_name</th><th>p_investigator_fid</th><th>cp_investigator_fid</th><th>amount</th><th>agency</th><th>status</th><th>year</th><th>operation</th>';break;	
										}
										fetch_data($('#selection').val())
									} 
							    function liveSearch(str) {
											if (window.XMLHttpRequest) {
												xmlhttp=new XMLHttpRequest();
											} else { 
												xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
											}
											xmlhttp.onreadystatechange=function() {
												var arr=this.responseText.split(",");
												if (this.readyState==4 && this.status==200) {
															$( "#usr" ).autocomplete({
																  source: function( request, response ) {
																		var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( request.term ), "i" );
																		response( $.grep( arr, function( item ){
																				return matcher.test( item );
																		}) );
																}
															});
												}
											}
											xmlhttp.open("GET","livesearch.php?q="+str,true);
											xmlhttp.send();
									}
									$("#showTablebtn").click(function(){
										$.ajax({url: "fetch.php",
										
														data :{'q':$("#chosen").val(),'d':$('#usr').val()},
														success: function(result){
																				$("#showtable1").html(result);
														}});
									});
									function deleteAlert(num) {
											var role=document.getElementById("role");
											// Get the Login Name value and trim it
											var fid=document.getElementById("fid");
											var ele=document.getElementById("faculty_id");
											// Get the Login Name value and trim it
											var sel = $('#soflow'+num).val();
											if(sel=='faculty' && role.innerHTML!='admin')
											{
												if(ele.value!=fid.innerHTML)
												{
														alert("Only Admins can Delete Other's Details !");
														ele.value="";
														e.preventDefault();
												}

											}
									}
									function editAlert(num) {
											var role=document.getElementById("role");
											// Get the Login Name value and trim it
											var fid=document.getElementById("fid");
											var ele=document.getElementById("faculty_id");
											// Get the Login Name value and trim it
											var sel = $('#soflow'+num).val();
											if(sel=='faculty')
											{
												if(ele.value!=fid.innerHTML)
												{
														alert("Cannot Edit other's details !");
														ele.value="";
														e.preventDefault();
												}

											}
									}

									function fetch_data(sel)
									{
									  var dataTable = $('#user_data').DataTable({
										"processing" : true,
										"serverSide" : true,
										"order" : [],
										retrieve: true,
										"ajax" : {
										url:"editTabledetails.php",
										type:"POST",
										data : { "sel" : sel}
										}
									});

									}
									
									function update_data(id, column_name, value)
									{
									$.ajax({
										url:"update.php",
										method:"POST",
										data:{id:id, column_name:column_name, value:value,sel:$('#selection').val()},
										success:function(data)
										{
										$('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
										$('#user_data').DataTable().destroy();
										fetch_data($('#selection').val())
										}
									});
									setInterval(function(){
										$('#alert_message').html('');
									}, 5000);
									}

									$(document).on('blur', '.update', function(){
									var id = $(this).data("id");
									var column_name = $(this).data("column");
									var value = $(this).text();
									update_data(id, column_name, value);
									});
									
									$('#add').click(function(){
									var html = '<tr>';
									switch($('#selection').val())
										{
												case 'publication': columns = ['pid', 'title','year','type','details'];pk='pid';break;
												case 'activity' : columns = ['activity_id','dname', 'session','detail'];pk='activity_id';break;
												case 'domain': columns = ['dname','head_id'];pk='dname';break;
												case 'faculty' : columns = ['fid', 'fname','doj','role'];pk='fid';break; 
												case 'grants' : columns = ['grant_id', 'title','agency','year','amount','duration','investigator1','investigator2'];pk='grant_id';break;  
												case 'mou' : columns = ['mou_id', 'dname','area','org_name','date'];pk='mou_id';break;
												case 'patent' : columns = ['pnum', 'fid','title','staus'];pk='pnum';break; 
												case 'proposals' : columns = ['project_id', 'project_name','p_investigator_fid','cp_investigator_fid','amount','agency','status','year'];pk='project_id';break; 
										}
									for(i=1;i<=columns.length;i++)
									{
									html += '<td contenteditable id="data'+i+'"></td>';
									}
									html += '<td><button type="button" name="insert" id="insert" class="btn btn-success btn-xs">Insert</button></td>';
									html += '</tr>';
									$('#user_data tbody').prepend(html);
									});
									
									$(document).on('click', '#insert', function(){
									var last_name = $('#data2').text();
									switch($('#selection').val())
									{
												case 'publication': columns = {'pid':$('#data1').text(), 'title':$('#data2').text(),'year':$('#data3').text(),'type':$('#data4').text(),'details':$('#data5').text(),'sel':$('#selection').val()};pk='pid';break;
												case 'activity' : columns = {'activity_id':$('#data1').text(),'dname':$('#data2').text(), 'session':$('#data3').text(),'detail':$('#data4').text(),'sel':$('#selection').val()};pk='activity_id';break;
												case 'domain': columns = {'dname':$('#data1').text(),'head_id':$('#data2').text(),'sel':$('#selection').val()};pk='dname';break;
												case 'faculty' : columns = {'fid':$('#data1').text(), 'fname':$('#data2').text(),'doj':$('#data3').text(),'role':$('#data4').text(),'sel':$('#selection').val()};pk='fid';break; 
												case 'grants' : columns = {'grant_id':$('#data1').text(), 'title':$('#data2').text(),'agency':$('#data3').text(),'year':$('#data4').text(),'amount':$('#data5').text(),'duration':$('#data6').text(),'investigator1':$('#data7').text(),'investigator2':$('#data8').text(),'sel':$('#selection').val()};pk='grant_id';break;  
												case 'mou' : columns = {'mou_id':$('#data1').text(), 'dname':$('#data2').text(),'area':$('#data3').text(),'org_name':$('#data4').text(),'date':$('#data5').text(),'sel':$('#selection').val()};pk='mou_id';break;
												case 'patent' : columns = {'pnum':$('#data1').text(), 'fid':$('#data2').text(),'title':$('#data3').text(),'staus':$('#data4').text(),'sel':$('#selection').val()};pk='pnum';break; 
												case 'proposals' : columns = {'project_id':$('#data1').text(), 'project_name':$('#data2').text(),'p_investigator_fid':$('#data3').text(),'cp_investigator_fid':$('#data4').text(),'amount':$('#data5').text(),'agency':$('#data6').text(),'status':$('#data7').text(),'year':$('#data8').text(),'sel':$('#selection').val()};pk='project_id';break; 
									}
									if(( ('pid' in columns) && (columns['pid']!="")) || ( ('activity_id' in columns) && (columns['activity_id']!="")) || ( ('dname' in columns) && (columns['dname']!="")) || ( ('fid' in columns) && (columns['fid']!="")) || ( ('grant_id' in columns) && (columns['grant_id']!="")) || ( ('mou_id' in columns) && (columns['mou_id']!="")) || ( ('pnum' in columns) && (columns['pnum']!="")) || ( ('project_id' in columns) && (columns['project_id']!="")) )
									{
										$.ajax({
										url:"insert.php",
										method:"POST",
										data:columns,
										success:function(data)
										{
											$('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
											$('#user_data').DataTable().destroy();
											fetch_data($('#selection').val())
										}
										});
										setInterval(function(){
										$('#alert_message').html('');
										}, 5000);
									}
									else
									{
										alert("Both Fields is required");
									}
									});
									
									$(document).on('click', '.delete', function(){
									var id = $(this).attr("id");
									if(confirm("Are you sure you want to remove this?"))
									{
										$.ajax({
										url:"delete.php",
										method:"POST",
										data:{id:id,sel:$('#selection').val()},
										success:function(data){
											$('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
											$('#user_data').DataTable().destroy();
											fetch_data($('#selection').val())
										}
										});
										setInterval(function(){
										$('#alert_message').html('');
										}, 5000);
									}
									});

										
										var readURL = function(input) {
												if (input.files && input.files[0]) {
														var reader = new FileReader();

														reader.onload = function (e) {
																$('.profile-pic').attr('src', e.target.result);
														}
										
														reader.readAsDataURL(input.files[0]);
												}
										}
										

										$(".file-upload").on('change', function(){
												readURL(this);
										});
										
										$(".upload-button").on('click', function() {
											$(".file-upload").click();
										});
										var input = document.querySelector('input[type=file]'); // see Example 4

input.onchange = function () {
  var file = input.files[0];

  //drawOnCanvas(file);   // see Example 6
  displayAsImage(file); // see Example 7
};



function displayAsImage(file) {
  var imgURL = URL.createObjectURL(file),
      img = document.createElement('img');

  img.onload = function() {
    URL.revokeObjectURL(imgURL);
  };

  img.src = imgURL;
  document.body.appendChild(img);
	$("#but_upload").show();
}

$("#upfile1").click(function () {
    $("#file1").trigger('click');
});


$("#but_upload").click(function(){

        var fd = new FormData();
        var files = $('#file1')[0].files[0];
				fd.append('new_name',$('#fid').text())
        fd.append('file',files);
        $.ajax({
            url: 'upload.php',
            type: 'post',
            data: fd,
            contentType: false,
            processData: false,
            success: function(response){
                if(response != 0){
                    alert(response);
										$("#but_upload").hide();
                }else{
                    alert('file not uploaded');
                }
            },
        });
    });
							</script>
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