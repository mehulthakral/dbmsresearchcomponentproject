<?php
session_start();
?>
<!-- saved from url=(0032)https://pesuacademy.com/Academy/ -->
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
<style>
#formStatus, #formStatus1 {
    color: #a93400;
 }
.login-msg {
	background-color: #ffeeee;
    margin-left: -31px;
    margin-right: -31px;
    margin-top: -50px;
    margin-bottom: 10px;
    padding: 15px 30px;
    color: #a93400;
    font-size: 14px;
}
</style>

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>PES University</title>

<link href="./PESU/bootstrap.css" rel="stylesheet">
<link href="./PESU/font-awesome.css" rel="stylesheet">

<link href="./PESU/style.css" rel="stylesheet">
<link href="./PESU/academy_login.css" rel="stylesheet">
</head>


<body>

<div class="login-header">
        <div class="col-md-12 col-sm-12">
                <img src="./PESU/logoPesu.png" alt="PES University">
        </div>
    </div>
    <div class="login-body">
            <div class="col-sm-6 col-md-6 col-lg-6 lgn-wrapper-half">
                <div class="col-sm-offset-1 col-md-offset-1 col-lg-offset-2 col-sm-10 col-md-10 col-lg-8 lgn-form-wrap">
                        <h2 id="HeaderId" class="lgn_link_title">Sign in</h2>
                        <div class="login-msg" hidden="">&nbsp;</div>
                        <div class="login-form">
                                    <form role="form" method="post" autocomplete="off" action="authen_login.php">
                                        <fieldset>
                                            <div class="form-group">
                                                <input class="form-control login-form-control" placeholder="Username" name="user_id" id="j_user_id" type="text" required="" autofocus="">
                                            </div>
                                            <div class="form-group">
                                                <input class="form-control login-form-control" placeholder="Password" name="user_pass" type="password" value="" required="">
<!--                                                 <input name="bmode" type="hidden" id="bmode"> -->
                                            </div>
                                            <div class="form-group">
                                                <button id="postloginf" class="btn btn-lg btn-primary btn-block">Sign In</button>
											</div>

                                        </fieldset>
                                    </form>
                                    
                                    
                                </div>
                </div>
				</div>
		
		<!--Below ones not related to project-->

		<div class="col-sm-6 col-md-6 col-lg-6 lgn-wrapper-half">
			<div class="col-sm-offset-1 col-md-offset-1 col-lg-offset-2 col-sm-10 col-md-10 col-lg-8 lgn-support-lnk" id="lgnSupportLinks">
				<div class="lgn_link_wrapper">
					<a href="https://pesuacademy.com/Academy/r/ar" id="forgotPass"><span class="pesu-ico-file" aria-hidden="true"></span> New Admission</a>
					
					<a href="javascript:void(0)" id="knowClsSection"><span class="pesu-ico-id-card" aria-hidden="true"></span> Know your Class &amp; Section</a>
					
					<a href="https://pesuacademy.com/Academy/gethelppage" id="forgotPass11"><span class="pesu-ico-chat" aria-hidden="true"></span> Grievances</a>
					<a href="javascript:void(0)" id="trbLogIn"><span class="pesu-ico-help" aria-hidden="true"></span> FAQs</a>
				    <a href="https://forum.pesu.io/" id="forumId"><span class="pesu-ico-group" aria-hidden="true"></span>Sign In PESU Forums</a>
					
					
					<!-- <a href="javascript:void(0)" id="visitorDetails"><span class="pesu-ico-user-no-circle" aria-hidden="true"></span> Visitor</a> -->
				</div>
			</div>
			
		</div>
	</div>

	<div class="login-footer">
        <div class="container-fluid">
            <div class="row">
                <p class="pull-left">Copyright � PES University, Bengaluru, India.</p>
            </div>
        </div>
    </div>
	
	<script src="./PESU/jquery.v1.12.4.js.download"></script>
	
	<script src="./PESU/bootstrap.min.js.download"></script>
	<script src="./PESU/bootstrapValidator.js.download"></script>

	<script>
		$(document).ready(function() {
			var isso=null;
			
			if(isso==1)
				{
				var title='';
				$("#HeaderId").html(title);
				$("#forumId").hide();
				$("#googleSignUp").hide();
				$("#ordiv").hide();

				}
			else
				{
				$("#HeaderId").html("Sign in");
				$("#forumId").show();
				$("#googleSignUp").show();
				$("#ordiv").show();

                }

			$('#forgotPass1').click(function() {
				$('#formStatus').text('');
				$('#loginId').val('');
				$('#forgotPassModal').modal('show');
			});

			$('#validatePass').click(function() {
				$('#email_Id').val('');
				$('#validatePassModal').modal('show');
			});

			$('#googleSignUp').on('click', function() {
				handleGoogleSignUp();
			});

		});
	</script>

	<div class="modal fade" id="forgotPassModal">
		<div class="modal-dialog" style="max-width: 400px">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" id="forgotPassModelClose" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">�</span>
					</button>
					<h4 class="modal-title">Forgot Password</h4>
				</div>
				<div class="modal-body">
					<div>
						<p id="formStatus" class="text-left" style="padding-left:48px;"></p>
					</div>
					<form id="forgotPassForm" method="post" class="form-horizontal">
						<div class="form-group">
							<label class="col-xs-4 control-label">Login Id</label>
							<div class="col-xs-7">
								<input type="text" class="form-control" name="loginId" id="loginId" required="required">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-4 col-xs-offset-4">

								<!-- Initially, the submit button is disabled -->
								<button type="submit" class="btn btn-default" id="saveForgotPass_forgotPassword">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="validatePassModal">
		<div class="modal-dialog" style="max-width: 400px">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" id="forgotPassModelClose" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">�</span>
					</button>
					<h4 class="modal-title">Verify Your Account</h4>
				</div>
				<div class="modal-body">
					<div>
						<p id="formStatus1" class="text-center"></p>
					</div>
					<form id="validatePassForm" method="post" class="form-horizontal">
						<div class="form-group" id="validatePassModalemaildiv">
							<label class="col-xs-4 control-label">Email Id</label>
							<div class="col-xs-7">
								<input type="text" class="form-control" name="email_Id" id="email_Id" required="required">
							</div>
						</div>
						<div class="form-group">
							<div class="col-xs-4 col-xs-offset-4">

								<!-- Initially, the submit button is disabled -->
								<button type="submit" class="btn btn-default" id="saveValidatePass_reSendVerificationMail">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<div class="modal fade" id="respModal">
		<div class="modal-dialog" style="max-width: 400px">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">�</span>
					</button>
					<h4 class="modal-title">Forgot Password</h4>
				</div>
												
<!-- PESU Student with the best educational platform available today. -->

<!-- Your Account Needs to Be Verified Click Here to verify account -->
				<div class="modal-body">

					<h5 class="text-success" id="respStatus" style="word-break: break-all; line-height: 1.8;">Email has been sent to registered Email Id</h5>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">Ok</button>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="modal fade" id="respModal1">
		<div class="modal-dialog" style="max-width: 400px">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">�</span>
					</button>
					<h4 class="modal-title">Verify Your Account</h4>
				</div>				
				<div class="modal-body">
					<h5 class="modal-title" id="respStatus1">Verification mail has been sent to your email address.</h5>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">Ok</button>
				</div>
			</div>
		</div>
	</div>

	<div class="bootbox modal fade" id="knowClsSectionModal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" id="forgotPassModelClose" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">�</span>
					</button>
					<h4 class="modal-title">Class &amp; Section Info</h4>
				</div>
				<div class="modal-body">
					<div class="bootbox-body">
					<div class="form-horizontal">
						<fieldset class="grp_frmfld">
							<legend>Search</legend>
							<div class="form-group">
								<label class="control-label col-md-5">SRN or Dept Id or Mobile No.
									or Email Id <span class="error" id="">*</span>
									<br><small style="color: #575656;font-size: 11px;overflow: hidden;display: block;">(SRN for 2018 batch students begins with <br> PES12018XXXXX for PES Ring Road Campus <br> PES22018XXXXX for PES Electronic City Campus))</small>
								</label>
								<div class="col-md-4">
									<input type="text" class="form-control input-md" id="knowClsSectionModalLoginId" name="knowClsSectionModalLoginId" autocomplete="off" autofocus="">
								<span class="error" id="knowClsSectionModalLoginError"></span>
								</div>
								<div class="col-md-2">
									<button class="btn btn-sm btn-default" id="knowClsSectionModalSearch" name="knowClsSectionModalLoginId">Search</button>
								</div>
							</div>


						</fieldset>
						</div>
						<div id="knowClsSectionModalTable">
						</div>
						</div>
						
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">Close</button>
				</div>
			</div>
		</div>
	</div>
	
	
	<div class="bootbox modal fade" id="faqsSectionModal">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" id="faqsModelClose" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">�</span>
					</button>
					<h4 class="modal-title">Frequently Asked Questions</h4>
				</div>
				<div class="modal-body">
					<div class="bootbox-body">
				<!-- 	<div class="form-horizontal">
						
						</div> -->
						<div id="faqsSectionModalTable" style="max-height: 500px; overflow-x: hidden;overflow-y: auto;">
						</div>
						</div>
						
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal" aria-label="Close">Close</button>
				</div>
			</div>
		</div>
	</div>
	

<style type="text/css">
.bootbox .form-horizontal .form-group {
    margin-bottom: 15px;
}

.bootbox .form-horizontal .control-label {
	text-align: right;
    line-height: 16px;
}

.bootbox .table {
	width:100%;
}

.bootbox .modal-body .btn {
    padding: 5px 20px;
}
</style>


</body></html>