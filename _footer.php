      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 1.0
        </div>
        Made by <strong>Domenico Dicuonzo, Walter Dipace</strong>.
      </footer>
    </div><!-- ./wrapper -->

    
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    
    <!-- datepicker 
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
    <!-- ClockPicker -->
    <script src="plugins/clockpicker/clockpicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    
    <!-- AdminLTE App -->
    <!-- v 2.1 <script src="dist/js/app.min.js" type="text/javascript"></script>
    

    <!-- AdminLTE dashboard demo (This is only for demo purposes) 
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes 
    <script src="dist/js/demo.js" type="text/javascript"></script>
    -->
    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.4.2/js/adminlte.min.js" type="text/javascript"></script>
    

   
    
    <style>
      table {background-color:#fff;}
	</style>
    
    <script>
		$(document).ready(function(){
		  $('input').iCheck({
			checkboxClass: 'icheckbox_flat-green',
			radioClass: 'iradio_minimal-green',
		  });
		});
	</script>
    
    <script> 
    
    $('table').floatThead();
	
	
	
	$('.datepicker input').datepicker({
		orientation: 'bottom auto',
		todayBtn: "linked",
		keyboardNavigation: false,
		autoclose: true,
		format: 'dd/mm/yyyy',
		language: "it"
	});
    $('.datepicker input').val('');
	$('.datepicker .input-group-addon').click(function() {
		$(this).parent().find('input').focus();
	});

	
	$('.has-tooltip').tooltip(); 
	
	
    $('.clockpicker').clockpicker({
		autoclose: true,
		//donetext: 'Done'
		placement: 'top'
	});
	
	</script>
    
  </body>
</html>