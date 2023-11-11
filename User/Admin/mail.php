
<!DOCTYPE html>
<html dir="" lang="en" >
<head>
    <meta content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
	<meta name="csrf-token" content="hdpHlgMNjnehaWMGPTO5yVObUWPwC98jI3okPlWa">

	
	<link rel="icon" href="http://localhost/php_practicle/garage/fevicol.png" type="image/gif" sizes="16x16">
	
	
    <!-- Bootstrap -->
    <link href= "http://localhost/php_practicle/garage/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="http://localhost/php_practicle/garage/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="http://localhost/php_practicle/garage/vendors/nprogress/nprogress.css" rel="stylesheet">
	 <!-- iCheck -->
    <link href="http://localhost/php_practicle/garage/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- bootstrap-wysiwyg -->
    <!-- <link href="http://localhost/php_practicle/garage/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet"> -->
    <!-- Select2 -->
    <link href="http://localhost/php_practicle/garage/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
   
    
	<!-- FullCalendar -->
    <link href="http://localhost/php_practicle/garage/vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="http://localhost/php_practicle/garage/vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">
	<!-- bootstrap-daterangepicker -->
    <link href="http://localhost/php_practicle/garage/vendors/bootstrap-daterangepicker/daterangepicker.css " rel="stylesheet">
    <link href="http://localhost/php_practicle/garage/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
	<!-- dropify CSS -->
	<link rel="stylesheet" href="http://localhost/php_practicle/garage/vendors/dropify/dist/css/dropify.min.css">
	
    <!-- Custom Theme Style -->
    <link href="http://localhost/php_practicle/garage/build/css/custom.min.css " rel="stylesheet">
	
	 <!-- Own Theme Style -->
    <link href="http://localhost/php_practicle/garage/build/css/own.css " rel="stylesheet">
	

	<!-- Our Custom stylesheet -->
	<link rel="stylesheet" type="text/css" href="http://localhost/php_practicle/garage/public/css/responsive_styles.css">

	<!-- MoT Custom stylesheet -->
	<link rel="stylesheet" type="text/css" href=" http://localhost/php_practicle/garage/public/css/custom_mot_styles.css ">
   <!-- Datatables -->
    
    <link href="http://localhost/php_practicle/garage/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
	<link href="http://localhost/php_practicle/garage/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
	 <link href="http://localhost/php_practicle/garage/build/css/dataTables.responsive.css " rel="stylesheet">
	 <link href="http://localhost/php_practicle/garage/build/css/dataTables.tableTools.css " rel="stylesheet">
    <!-- <link href="http://localhost/php_practicle/garage/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet"> -->
    
    <link href="http://localhost/php_practicle/garage/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
	
	 <!-- AutoComplete CSS -->
	<link href="http://localhost/php_practicle/garage/build/css/themessmoothness.css" rel="stylesheet">
	 <!-- Multiselect CSS -->
	<link href="http://localhost/php_practicle/garage/build/css/multiselect.css" rel="stylesheet">
	 <!-- Slider Style -->
	<!-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> -->
	<link rel="stylesheet" type="text/css" href="http://localhost/php_practicle/garage/public/css/google_api_font.css">
			
		
	<!-- sweetalert -->
	<link href="http://localhost/php_practicle/garage/vendors/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
	
	<!-- <link href="http://localhost/php_practicle/garage/build/dist/css/select2.min.css" rel='stylesheet' type='text/css'> -->
	<style>
	@media  print
   {
     
      .noprint
      {
        display:none
      }
   }
	</style>
  </head>

<body id="app-layout" class="nav-md">
   <div class="container body">
    <div class="main_container">
            

           
            <!-- /menu footer buttons -->
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
         
        <!-- /top navigation -->
		<style>
.panel{border: 1px solid transparent!important; margin:0px;}
.panel-default {
    border-color: #ddd!important;
.x_panel{padding:0px}
}
</style>
<?php require "Partial/_navadminscroll.html"; ?>

<!-- page content -->
					<div class="main" style="width:1000px;margin-left:220px;">
					<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_content">
						<ul class="nav nav-tabs bar_tabs" role="tablist">
															<li role="presentation" class="active"><a href="http://localhost/php_practicle/garage/mail/mail"><span class="visible-xs"></span><i class="fa fa-list fa-lg">&nbsp;</i><b>Mail Templates</b></a></li>
													</ul>
					</div>
					<div class="x_panel">
						<div class="container ">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">  
																	<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapseOne" class="emailacordin">
												<h4 class="panel-title">	<i class="plus-minus glyphicon glyphicon-plus pull-right"></i>
													Email notification for users registration
												
											</h4></a>
										</div>
										<div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												<form class="form-horizontal" method="post" action="mail/emailformat/1" name="parent_form">
												
												<input type="hidden" name="_token" value="hdpHlgMNjnehaWMGPTO5yVObUWPwC98jI3okPlWa">
												
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Email Subject <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<input class="form-control validate[required]" name="subject" id="Member_Registration" placeholder="Enter email subject" value="Welcome to { system_name }" required>
														</div>
													</div>
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Sender email <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<input class="form-control validate[required]" name="send_from" id="Member_Registration" placeholder="Enter Sender Email" value="yatin.patel@dasinfomedia.com" required>
														</div>
													</div>
													<input class="form-control validate[required]" type="hidden" name="mail_id" id="mail_id"  value="">
														
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Registration Email Template <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<textarea style="min-height:200px;" name="notification_text" class="form-control validate[required] txt_area" required>Dear { user_name },

          You are successfully registered at { system_name }. Your username: { email } and password: { Password }. 
system link { system_link }

Regards From { system_name }.</textarea>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-8 col-sm-8 col-xs-12 col-sm-offset-4 col-md-offset-4">
															You can use following variables in the email template<br>
															<label><strong>{ system_name } = System Name <br/> 
{ user_name } = Add user Name<br/> 
{ email } = user Email Address<br/>
{ Password } = user Password 
 <br></strong></label>
														</div>
													</div>
																									</form>
											</div>
										</div>
									</div><br>
																		<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapseOne" class="emailacordin">
												<h4 class="panel-title">	<i class="plus-minus glyphicon glyphicon-plus pull-right"></i>
													Sales invoice mail notification
												
											</h4></a>
										</div>
										<div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												<form class="form-horizontal" method="post" action="mail/emailformat/2" name="parent_form">
												
												<input type="hidden" name="_token" value="hdpHlgMNjnehaWMGPTO5yVObUWPwC98jI3okPlWa">
												
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Email Subject <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<input class="form-control validate[required]" name="subject" id="Member_Registration" placeholder="Enter email subject" value="Thanks for your recent business with  { system_name } Invoice { invoice_ID } is due for the same." required>
														</div>
													</div>
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Sender email <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<input class="form-control validate[required]" name="send_from" id="Member_Registration" placeholder="Enter Sender Email" value="yatin.patel@dasinfomedia.com" required>
														</div>
													</div>
													<input class="form-control validate[required]" type="hidden" name="mail_id" id="mail_id"  value="">
														
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Registration Email Template <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<textarea style="min-height:200px;" name="notification_text" class="form-control validate[required] txt_area" required>Dear { Customer_name },

         Thank You for your recent business with us. Please Find attached a detailed copy of the invoice for your Perusal. 

The total amount due is { amount } to be salesed by { date }.

{ invoice }

Regards From  { system_name }.</textarea>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-8 col-sm-8 col-xs-12 col-sm-offset-4 col-md-offset-4">
															You can use following variables in the email template<br>
															<label><strong>{ Customer_name } = Customer name <br/> { amount } = Total amount of sales <br/> { date } = sales date <br/> { invoice } = Invoice print <br/>  { system_name } = System Name <br></strong></label>
														</div>
													</div>
																									</form>
											</div>
										</div>
									</div><br>
																		<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapseOne" class="emailacordin">
												<h4 class="panel-title">	<i class="plus-minus glyphicon glyphicon-plus pull-right"></i>
													Generating free service coupons
												
											</h4></a>
										</div>
										<div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												<form class="form-horizontal" method="post" action="mail/emailformat/3" name="parent_form">
												
												<input type="hidden" name="_token" value="hdpHlgMNjnehaWMGPTO5yVObUWPwC98jI3okPlWa">
												
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Email Subject <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<input class="form-control validate[required]" name="subject" id="Member_Registration" placeholder="Enter email subject" value="You are entitled to Free service for your recent purchase of { manufacturer } { model_Number }" required>
														</div>
													</div>
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Sender email <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<input class="form-control validate[required]" name="send_from" id="Member_Registration" placeholder="Enter Sender Email" value="yatin.patel@dasinfomedia.com" required>
														</div>
													</div>
													<input class="form-control validate[required]" type="hidden" name="mail_id" id="mail_id"  value="">
														
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Registration Email Template <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<textarea style="min-height:200px;" name="notification_text" class="form-control validate[required] txt_area" required>Dear { Customer_name },

You are entitled for Free service for your recent purchase of { manufacturer } { model_Number }.
 Here are the couponst:{ coupon_list }


Regards From { system_name }.</textarea>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-8 col-sm-8 col-xs-12 col-sm-offset-4 col-md-offset-4">
															You can use following variables in the email template<br>
															<label><strong>{ Customer_name } = Customer name </br>
{ manufacturer } = Vehicle brand name </br>
{ model_Number } = Vehicle name </br>
{ coupon_list } = Coupon number </br>
{ system_name } = System name<br></strong></label>
														</div>
													</div>
																									</form>
											</div>
										</div>
									</div><br>
																		<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapseOne" class="emailacordin">
												<h4 class="panel-title">	<i class="plus-minus glyphicon glyphicon-plus pull-right"></i>
													On successful job card creation
												
											</h4></a>
										</div>
										<div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												<form class="form-horizontal" method="post" action="mail/emailformat/4" name="parent_form">
												
												<input type="hidden" name="_token" value="hdpHlgMNjnehaWMGPTO5yVObUWPwC98jI3okPlWa">
												
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Email Subject <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<input class="form-control validate[required]" name="subject" id="Member_Registration" placeholder="Enter email subject" value="Your recent Vehicle service request is successful and jobcard { jobcard_number } is created for you." required>
														</div>
													</div>
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Sender email <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<input class="form-control validate[required]" name="send_from" id="Member_Registration" placeholder="Enter Sender Email" value="yatin.patel@dasinfomedia.com" required>
														</div>
													</div>
													<input class="form-control validate[required]" type="hidden" name="mail_id" id="mail_id"  value="">
														
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Registration Email Template <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<textarea style="min-height:200px;" name="notification_text" class="form-control validate[required] txt_area" required>Dear { Customer_name },

         Thank you for bringing your vehicle to our service center.Your Jobcard Number is { jobcard_number } on { service_date }  for { detail }
     
Regards From { system_name }. </textarea>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-8 col-sm-8 col-xs-12 col-sm-offset-4 col-md-offset-4">
															You can use following variables in the email template<br>
															<label><strong>{ customer_name } = Customer name </br>
{ jobcard_number } = Jobcard number </br>
{ service_date } = Service date </br>
{ detail } = Service details </br>
{ system_name } = System name 
<br></strong></label>
														</div>
													</div>
																									</form>
											</div>
										</div>
									</div><br>
																		<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapseOne" class="emailacordin">
												<h4 class="panel-title">	<i class="plus-minus glyphicon glyphicon-plus pull-right"></i>
													Service done status Invoice notification of customer
												
											</h4></a>
										</div>
										<div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												<form class="form-horizontal" method="post" action="mail/emailformat/5" name="parent_form">
												
												<input type="hidden" name="_token" value="hdpHlgMNjnehaWMGPTO5yVObUWPwC98jI3okPlWa">
												
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Email Subject <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<input class="form-control validate[required]" name="subject" id="Member_Registration" placeholder="Enter email subject" value="Your recent Vehicle service request is successful and jobcard { jobcard_no } is created for you." required>
														</div>
													</div>
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Sender email <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<input class="form-control validate[required]" name="send_from" id="Member_Registration" placeholder="Enter Sender Email" value="yatin.patel@dasinfomedia.com" required>
														</div>
													</div>
													<input class="form-control validate[required]" type="hidden" name="mail_id" id="mail_id"  value="">
														
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Registration Email Template <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<textarea style="min-height:200px;" name="notification_text" class="form-control validate[required] txt_area" required>Dear { Customer_name },

         Your services { service_title }  has been completed on { service_date }.
     The total amount due is { total_amount }.
   { Invoice }
Regards From { system_name }. </textarea>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-8 col-sm-8 col-xs-12 col-sm-offset-4 col-md-offset-4">
															You can use following variables in the email template<br>
															<label><strong>{ customer_name } = Customer name </br>
{ service_title } = Service title </br>
{ service_date } = Service date </br>
{ total_amount } = Total amount sales </br>
{ Invoice } = Invoice service </br>
{ system_name } = system name </br>
{ jobcard_number } = Service jobcard number <br></strong></label>
														</div>
													</div>
																									</form>
											</div>
										</div>
									</div><br>
																		<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="true" aria-controls="collapseOne" class="emailacordin">
												<h4 class="panel-title">	<i class="plus-minus glyphicon glyphicon-plus pull-right"></i>
													Service Due notification  before next week, next month,  admin,customer, employee
												
											</h4></a>
										</div>
										<div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												<form class="form-horizontal" method="post" action="mail/emailformat/6" name="parent_form">
												
												<input type="hidden" name="_token" value="hdpHlgMNjnehaWMGPTO5yVObUWPwC98jI3okPlWa">
												
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Email Subject <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<input class="form-control validate[required]" name="subject" id="Member_Registration" placeholder="Enter email subject" value="   Next { month_week } service Due on summery for { system name  }  for   { month } - { year } ." required>
														</div>
													</div>
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Sender email <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<input class="form-control validate[required]" name="send_from" id="Member_Registration" placeholder="Enter Sender Email" value="yatin.patel@dasinfomedia.com" required>
														</div>
													</div>
													<input class="form-control validate[required]" type="hidden" name="mail_id" id="mail_id"  value="">
														
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Registration Email Template <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<textarea style="min-height:200px;" name="notification_text" class="form-control validate[required] txt_area" required>Dear { user_name },

          Your Pre approved free services is Coming up on  { month } - { year } This is Just a Reminder mail.
    
{ service_list }
     
Regards From { system_name }. </textarea>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-8 col-sm-8 col-xs-12 col-sm-offset-4 col-md-offset-4">
															You can use following variables in the email template<br>
															<label><strong>{ user_name } = User name </br>
{ service_date } = Service date </br>
{ service_list } = Service List </br>
{ system_name } = System name 
<br></strong></label>
														</div>
													</div>
																									</form>
											</div>
										</div>
									</div><br>
																		<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="true" aria-controls="collapseOne" class="emailacordin">
												<h4 class="panel-title">	<i class="plus-minus glyphicon glyphicon-plus pull-right"></i>
													Monthly service list notification to admin
												
											</h4></a>
										</div>
										<div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												<form class="form-horizontal" method="post" action="mail/emailformat/7" name="parent_form">
												
												<input type="hidden" name="_token" value="hdpHlgMNjnehaWMGPTO5yVObUWPwC98jI3okPlWa">
												
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Email Subject <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<input class="form-control validate[required]" name="subject" id="Member_Registration" placeholder="Enter email subject" value="Monthly service completion summary for { system_name } for { month } - { year }" required>
														</div>
													</div>
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Sender email <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<input class="form-control validate[required]" name="send_from" id="Member_Registration" placeholder="Enter Sender Email" value="yatin.patel@dasinfomedia.com" required>
														</div>
													</div>
													<input class="form-control validate[required]" type="hidden" name="mail_id" id="mail_id"  value="">
														
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Registration Email Template <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<textarea style="min-height:200px;" name="notification_text" class="form-control validate[required] txt_area" required>Dear { admin },

         Monthly Services list attached.


 { service_list }


Regards From ,{ system_name }.</textarea>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-8 col-sm-8 col-xs-12 col-sm-offset-4 col-md-offset-4">
															You can use following variables in the email template<br>
															<label><strong>{ admin } = admin name </br>
{ service_list } = Service List Month </br>
{ system_name } = System name<br></strong></label>
														</div>
													</div>
																									</form>
											</div>
										</div>
									</div><br>
																		<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="true" aria-controls="collapseOne" class="emailacordin">
												<h4 class="panel-title">	<i class="plus-minus glyphicon glyphicon-plus pull-right"></i>
													Weekly services list notification to employee
												
											</h4></a>
										</div>
										<div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												<form class="form-horizontal" method="post" action="mail/emailformat/8" name="parent_form">
												
												<input type="hidden" name="_token" value="hdpHlgMNjnehaWMGPTO5yVObUWPwC98jI3okPlWa">
												
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Email Subject <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<input class="form-control validate[required]" name="subject" id="Member_Registration" placeholder="Enter email subject" value="Weekly service completetion summry for { system_name } for { month } { year }" required>
														</div>
													</div>
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Sender email <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<input class="form-control validate[required]" name="send_from" id="Member_Registration" placeholder="Enter Sender Email" value="yatin.patel@dasinfomedia.com" required>
														</div>
													</div>
													<input class="form-control validate[required]" type="hidden" name="mail_id" id="mail_id"  value="">
														
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Registration Email Template <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<textarea style="min-height:200px;" name="notification_text" class="form-control validate[required] txt_area" required>Dear { employee },

         Weekly Services list attached.


 { service_list }


Regards From ,
{ system_name }.</textarea>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-8 col-sm-8 col-xs-12 col-sm-offset-4 col-md-offset-4">
															You can use following variables in the email template<br>
															<label><strong>{ employee } = Employee name </br>
{ service_list } = Weekly service list </br>
{ system_name } = system name<br></strong></label>
														</div>
													</div>
																									</form>
											</div>
										</div>
									</div><br>
																		<div class="panel panel-default">
										<div class="panel-heading" role="tab" id="headingOne">
											
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="true" aria-controls="collapseOne" class="emailacordin">
												<h4 class="panel-title">	<i class="plus-minus glyphicon glyphicon-plus pull-right"></i>
													Send quotation mail to customer for accept or declined
												
											</h4></a>
										</div>
										<div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
											<div class="panel-body">
												<form class="form-horizontal" method="post" action="mail/emailformat/9" name="parent_form">
												
												<input type="hidden" name="_token" value="hdpHlgMNjnehaWMGPTO5yVObUWPwC98jI3okPlWa">
												
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Email Subject <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<input class="form-control validate[required]" name="subject" id="Member_Registration" placeholder="Enter email subject" value="Quotation mail for your vehicle { vehicle_name } service" required>
														</div>
													</div>
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Sender email <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<input class="form-control validate[required]" name="send_from" id="Member_Registration" placeholder="Enter Sender Email" value="yatin.patel@dasinfomedia.com" required>
														</div>
													</div>
													<input class="form-control validate[required]" type="hidden" name="mail_id" id="mail_id"  value="">
														
													<div class="form-group">
														<label for="first_name" class="col-md-4 col-sm-4 col-xs-12 control-label">Registration Email Template <span class="color-danger">*</span> </label>
														<div class="col-md-8 col-sm-8 col-xs-12">
															<textarea style="min-height:200px;" name="notification_text" class="form-control validate[required] txt_area" required>Dear { customer_name },<br><br>
        &emsp;Thank you for bringing your vehicle to our service center.
<br>
We have checked your vehicle for service and create quotation.

<br><br>Please see the attached service quotation of your vehicle <span style="color:red;">{ vehicle_name }</span>

<br><br>
<a href="{ download_file_url }" download="{ download_file_name }" target="_self" style="background-color:#007bff; border-radius: 5px; color:#ffffff; padding: 8px 10px; border:none; text-decoration: none;">Download Quotation Pdf</a>


<br><br>
Regards From
<br>
{ system_name }</textarea>
														</div>
													</div>
													<div class="form-group">
														<div class="col-md-8 col-sm-8 col-xs-12 col-sm-offset-4 col-md-offset-4">
															You can use following variables in the email template<br>
															<label><strong>{ customer_name } = Customer name </br>
{ jobcard_number } = Jobcard number </br>
{ service_date } = Service date </br>
{ detail } = Service details </br>
{ system_name } = System name </br>
{ vehicle_name } = Vehicle name </br>
{ invoice_number } = Invoice number</br>
{ currency_symbol } = Currency Symbol</br>
{ total_amount } = Total Amount </br>
{ paid_amount } = Total Paid Amount </br>
{ due_amount } = Total Due Amount </br>
{ confirm_url } = Confirmation url for customer</br>
{ reject_url } = Reject url for customer</br>
{ download_file_url } = Quotation pdf file download url
{ download_file_name } = Quotation pdf file name<br></strong></label>
														</div>
													</div>
																									</form>
											</div>
										</div>
									</div><br>
																</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
					</div>
<!-- page content end -->


<script src="http://localhost/php_practicle/garage/vendors/jquery/dist/jquery.min.js"></script>
<script>

$(function() {
 
  function toggleIcon(e) {
      $(e.target)
          .prev('.panel-heading')
          .find(".plus-minus")
          .toggleClass('glyphicon-plus glyphicon-minus');
  }
  $('.panel-group').on('hidden.bs.collapse', toggleIcon);
  $('.panel-group').on('shown.bs.collapse', toggleIcon);
 
});
</script>	

		
   </div>
	
  </div>
 <!-- jQuery -->
    
    <script src="http://localhost/php_practicle/garage/vendors/jquery/dist/jquery.min.js"></script>
	<script src="http://localhost/php_practicle/garage/build/js/jquery-ui.js" defer="defer"></script>
    <!-- Bootstrap -->
    <script src="http://localhost/php_practicle/garage/vendors/bootstrap/dist/js/bootstrap.min.js" defer="defer"></script>
    <!-- FastClick -->
    <script src="http://localhost/php_practicle/garage/vendors/fastclick/lib/fastclick.js" defer="defer"></script>
    <!-- NProgress -->
    <script src="http://localhost/php_practicle/garage/vendors/nprogress/nprogress.js" defer="defer"></script>
    <!-- Chart.js -->
    <script src="http://localhost/php_practicle/garage/vendors/Chart.js/dist/Chart.min.js" defer="defer"></script>
    <!-- jQuery Sparklines -->
    <script src="http://localhost/php_practicle/garage/vendors/jquery-sparkline/dist/jquery.sparkline.min.js" defer="defer"></script>
    <!-- Flot -->
    <script src="http://localhost/php_practicle/garage/vendors/Flot/jquery.flot.js" defer="defer"></script>
    <script src="http://localhost/php_practicle/garage/vendors/Flot/jquery.flot.pie.js" defer="defer"></script>
    <script src="http://localhost/php_practicle/garage/vendors/Flot/jquery.flot.time.js" defer="defer"></script>
    <script src="http://localhost/php_practicle/garage/vendors/Flot/jquery.flot.stack.js" defer="defer"></script>
    <script src="http://localhost/php_practicle/garage/vendors/Flot/jquery.flot.resize.js" defer="defer"></script>
    <!-- Flot plugins -->
    <script src="http://localhost/php_practicle/garage/vendors/flot.orderbars/js/jquery.flot.orderBars.js" defer="defer"></script>
    <script src="http://localhost/php_practicle/garage/vendors/flot-spline/js/jquery.flot.spline.min.js" defer="defer"></script>
    <script src="http://localhost/php_practicle/garage/vendors/flot.curvedlines/curvedLines.js" defer="defer"></script>
    <!-- DateJS -->
    <script src="http://localhost/php_practicle/garage/vendors/DateJS/build/date.js" defer="defer"></script>
    <!-- FullCalendar -->
    <script src="http://localhost/php_practicle/garage/vendors/moment/min/moment.min.js" defer="defer"></script>
    <script src="http://localhost/php_practicle/garage/vendors/fullcalendar/dist/fullcalendar.min.js" defer="defer"></script>
    
    <!-- Custom Theme Scripts -->
    <script src="http://localhost/php_practicle/garage/build/js/custom.min.js" defer="defer"></script>
	<script src="http://localhost/php_practicle/garage/vendors/sweetalert/sweetalert.min.js" defer="defer"></script>
	
	<script src="http://localhost/php_practicle/garage/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
	
    <script src="http://localhost/php_practicle/garage/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js" defer="defer"></script>
    <script src="http://localhost/php_practicle/garage/vendors/datatables.net-buttons/js/dataTables.buttons.min.js" defer="defer"></script>
    <script src="http://localhost/php_practicle/garage/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js" defer="defer"></script>
    <script src="http://localhost/php_practicle/garage/vendors/datatables.net-buttons/js/buttons.flash.min.js" defer="defer"></script>
    <script src="http://localhost/php_practicle/garage/vendors/datatables.net-buttons/js/buttons.html5.min.js" defer="defer"></script>
    <script src="http://localhost/php_practicle/garage/vendors/datatables.net-buttons/js/buttons.print.min.js" defer="defer"></script>
    <script src="http://localhost/php_practicle/garage/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js" defer="defer"></script>
    <script src="http://localhost/php_practicle/garage/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js" defer="defer"></script>
    <script src="http://localhost/php_practicle/garage/vendors/datatables.net-responsive/js/dataTables.responsive.min.js" defer="defer"></script>
    <script src="http://localhost/php_practicle/garage/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js" defer="defer"></script>
    <script src="http://localhost/php_practicle/garage/vendors/datatables.net-scroller/js/dataTables.scroller.min.js" defer="defer"></script>
	<!-- dropify scripts-->
	<script src="http://localhost/php_practicle/garage/vendors/dropify/dist/js/dropify.min.js" defer="defer"></script>
	<script src="http://localhost/php_practicle/garage/vendors/iCheck/icheck.min.js" defer="defer"></script>
	<!-- slider scripts-->
	
	<script src="http://localhost/php_practicle/garage/vendors/slider/jssor.slider.mini.js" defer="defer"></script>
	<!-- bootstrap-daterangepicker -->
	<script src="http://localhost/php_practicle/garage/vendors/moment/min/moment.min.js" defer="defer"></script>
	<script src="http://localhost/php_practicle/garage/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js" defer="defer"></script>
    <script src="http://localhost/php_practicle/garage/vendors/bootstrap-daterangepicker/daterangepicker.js" defer="defer"></script>
    
	
	 <!-- Filter  -->
	
    <script src="http://localhost/php_practicle/garage/build/js/jszip.min.js" defer="defer"></script>
    
	 <!-- Autocomplete Js  -->
	<script src="http://localhost/php_practicle/garage/build/js/jquery.circliful.min.js" defer="defer"></script>
	
	<!-- Multiselect Js  -->
	<script src="http://localhost/php_practicle/garage/build/js/bootstrap-multiselect.js" defer="defer"></script>

	<script src="http://localhost/php_practicle/garage/build/dist/js/select2.min.js" type='text/javascript' defer="defer"></script>
	
	<!-- For form field validate Using Proengsoft -->
	<script type="text/javascript" src="http://localhost/php_practicle/garage/build/jquery-validate/1.19.2/jquery.validate.min.js"></script>


	<script type="text/javascript">
		$(document).ready(function(){
			$('form').bind("keypress", function(e) {
			  if (e.keyCode == 13) {               
				e.preventDefault();
				return false;
			  }
			});
		});
	</script>

	<script type="text/javascript">
	    var csrf_token = document.querySelector("meta[name='csrf-token']").getAttribute("content");
	    function csrfSafeMethod(method) {
	        // these HTTP methods do not require CSRF protection
	        return (/^(GET|HEAD|OPTIONS)$/.test(method));
	    }
	    var o = XMLHttpRequest.prototype.open;
	    XMLHttpRequest.prototype.open = function(){
	        var res = o.apply(this, arguments);
	        var err = new Error();
	        if (!csrfSafeMethod(arguments[0])) {
	            this.setRequestHeader('anti-csrf-token', csrf_token);
	        }
	        return res;
	    };
 	</script>
</body>
</html>
