<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<title>Dashboard</title>
	<meta name="description" content="Doodle is a Dashboard & Admin Site Responsive Template by hencework." />
	<meta name="keywords" content="admin, admin dashboard, admin template, cms, crm, Doodle Admin, Doodleadmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
	<meta name="author" content="hencework"/>
	@yield('csrf');
	<style>
		.steins {
		  position: relative;
		  width: 600px;
		  display: block; 
		  margin-left: auto; 
		  margin-right: auto;
		}
		
		.zero {
		  width: 600px; 
		  height: 300px; 
		  text-align: center; 
		  display: block; 
		  margin-left: auto; 
		  margin-right: auto;
		  
		}
		
		.gate {
		  position: absolute;
		  bottom: 0;
		  left: 0;
		  right: 0;
		  background-color: #008CBA;
		  overflow: hidden;
		  width: 100%;
		  height: 0;
		  transition: .5s ease;
		}
		
		.steins:hover .gate {
		  height: 15%;
		}
		
		.text {
		  color: white;
		  font-size: 20px;
		  position: absolute;
		  top: 50%;
		  left: 50%;
		  -webkit-transform: translate(-50%, -50%);
		  -ms-transform: translate(-50%, -50%);
		  transform: translate(-50%, -50%);
		  text-align: center;
		}
		.ilang {
				background-color: Transparent;
				background-repeat:no-repeat;
				border: none;
				cursor:pointer;
				overflow: hidden;
				outline:none;
				}
		.wryyy{
			padding:20px 0 0 10px;
			color: #337ab7;
			cursor: pointer;
		}
		.dowu {
		display: inline-block;
		width: 250px;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
		}
		.dowu2 {
		display: inline-block;
		width: 200px;
		white-space: nowrap;
		overflow: hidden;
		text-overflow: ellipsis;
		}
		.dm{
		background: rgb(184,225,252);
		background: -moz-linear-gradient(-45deg,  rgb(184,225,252) 0%, rgb(169,210,243) 10%, rgb(144,186,228) 25%, rgb(144,188,234) 37%, rgb(144,191,240) 50%, rgb(107,168,229) 51%, rgb(162,218,245) 83%, rgb(189,243,253) 100%);
		background: -webkit-linear-gradient(-45deg,  rgb(184,225,252) 0%,rgb(169,210,243) 10%,rgb(144,186,228) 25%,rgb(144,188,234) 37%,rgb(144,191,240) 50%,rgb(107,168,229) 51%,rgb(162,218,245) 83%,rgb(189,243,253) 100%);
		background: linear-gradient(135deg,  rgb(184,225,252) 0%,rgb(169,210,243) 10%,rgb(144,186,228) 25%,rgb(144,188,234) 37%,rgb(144,191,240) 50%,rgb(107,168,229) 51%,rgb(162,218,245) 83%,rgb(189,243,253) 100%);
		filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b8e1fc', endColorstr='#bdf3fd',GradientType=1 );

		}
	</style>
	
	<!-- Favicon -->
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	
	<!-- Morris Charts CSS -->
    <link href="{{asset('assets/template/vendors/bower_components/morris.js/morris.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('assets/template/vendors/bower_components/fullcalendar/dist/fullcalendar.css')}}" rel="stylesheet" type="text/css">
	<!-- Data table CSS -->
	<link href="{{asset('assets/template/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('assets/template/vendors/bower_components/fullcalendar/dist/fullcalendar.css')}}" rel="stylesheet" type="text/css"/>
	<!-- Bootstrap Dropify CSS -->
	<link href="{{asset('assets/template/vendors/bower_components/dropify/dist/css/dropify.min.css')}}" rel="stylesheet" type="text/css"/>
	<link href="{{asset('assets/template/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/template/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/template/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css')}}" rel="stylesheet" type="text/css">
	<!-- select2 CSS -->
	<link href="{{asset('assets/template/vendors/bower_components/select2/dist/css/select2.min.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/template/vendors/bower_components/select2/dist/js/select2.min.js')}}" rel="stylesheet" type="text/css">
	<!-- Custom CSS -->
	<link href="{{asset('assets/template/dist/css/style.css')}}" rel="stylesheet" type="text/css">
	<link href="{{asset('assets/template/dist/css/fancy-buttons.css')}}" rel="stylesheet" type="text/css">
	<!-- jQuery -->
    <script src="{{asset('assets/template/vendors/bower_components/jquery/dist/jquery.min.js')}}"></script>
</head>