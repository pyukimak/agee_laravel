
    </div>
    <!-- /#wrapper -->
	
	<!-- JavaScript -->

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('assets/template/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/template/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js')}}"></script>
	<script src="{{asset('assets/template//vendors/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
	<script src="{{asset('assets/template//vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js')}}"></script>
	<!-- Data table JavaScript -->
	<script src="{{asset('assets/template/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('assets/template/vendors/bower_components/moment/min/moment.min.js')}}"></script>
	<script src="{{asset('assets/template/vendors/jquery-ui.min.js')}}"></script>
	<script src="{{asset('assets/template/vendors/bower_components/fullcalendar/dist/fullcalendar.min.js')}}"></script>
	<script src="{{asset('assets/template/dist/js/fullcalendar-data.js')}}"></script>
	
	<!-- Slimscroll JavaScript -->
	<script src="{{asset('assets/template/dist/js/jquery.slimscroll.js')}}"></script>
	
	<!-- simpleWeather JavaScript -->
	<script src="{{asset('assets/template/vendors/bower_components/moment/min/moment.min.js')}}"></script>
	<script src="{{asset('assets/template/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js')}}"></script>
	<script src="{{asset('assets/template/dist/js/simpleweather-data.js')}}"></script>
	
	<!-- Progressbar Animation JavaScript -->
	<script src="{{asset('assets/template/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js')}}"></script>
	<script src="{{asset('assets/template/vendors/bower_components/jquery.counterup/jquery.counterup.min.js')}}"></script>
	
	<!-- Fancy Dropdown JS -->
	<script src="{{asset('assets/template/dist/js/dropdown-bootstrap-extended.js')}}"></script>
	
	<!-- Sparkline JavaScript -->
	<script src="{{asset('assets/template/vendors/jquery.sparkline/dist/jquery.sparkline.min.js')}}"></script>
	
	<!-- Owl JavaScript -->
	<script src="{{asset('assets/template/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js')}}"></script>
	
	<!-- ChartJS JavaScript -->
	<script src="{{asset('assets/template/vendors/chart.js/Chart.min.js')}}"></script>
	
	<!-- Morris Charts JavaScript -->
    <script src="{{asset('assets/template/vendors/bower_components/raphael/raphael.min.js')}}"></script>
    <script src="{{asset('assets/template/vendors/bower_components/morris.js/morris.min.js')}}"></script>
    <script src="{{asset('assets/template/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js')}}"></script>
	
	<!-- Switchery JavaScript -->
	<script src="{{asset('assets/template/vendors/bower_components/switchery/dist/switchery.min.js')}}"></script>
	<!-- Form Flie Upload Data JavaScript -->
	<script src="{{asset('assets/template/dist/js/form-file-upload-data.js')}}"></script>
	<!-- Init JavaScript -->
	<script src="{{asset('assets/template/dist/js/init.js')}}"></script>
	<script src="{{asset('assets/template/dist/js/dashboard-data.js')}}"></script>
	<script>
		
			$('a[rel=popover]').popover({
				html:true,
				trigger:'focus',
				placement:'top',
			
				content:function(){return '<img style="height:100px; width:200px" src="'+$(this).data('img')+'"/>'}
			});
		
	</script>
</body>

</html>