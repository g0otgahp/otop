<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12">
    <div align="center">
    </div>
   </div>
</div>

<!--end-Footer-part-->

<script src="<?php echo BASE_URL('assets/assets/js/excanvas.min.js')?>"></script>

<script src="<?php echo BASE_URL('assets/assets/js/jquery.min.js')?>"></script>

<script src="<?php echo BASE_URL('assets/assets/js/jquery.ui.custom.js')?>"></script>

<script src="<?php echo BASE_URL('assets/assets/js/bootstrap.min.js')?>"></script>

<script src="<?php echo BASE_URL('assets/assets/js/jquery.flot.min.js')?>"></script>

<script src="<?php echo BASE_URL('assets/assets/js/jquery.flot.resize.min.js')?>"></script>

<script src="<?php echo BASE_URL('assets/assets/js/jquery.peity.min.js')?>"></script>

<script src="<?php echo BASE_URL('assets/assets/js/fullcalendar.min.js')?>"></script>

<script src="<?php echo BASE_URL('assets/assets/js/matrix.js')?>"></script>

<!-- <script src=" echo BASE_URL('assets/js/matrix.dashboard.js') "></script> -->
<!-- <script src=" echo BASE_URL('assets/js/matrix.form_common.js')?>"></script> -->
<!-- <script src=" echo BASE_URL('assets/js/jquery.gritter.min.js')?>"></script> -->
<!-- <script src=" echo BASE_URL('assets/js/matrix.interface.js')?>"></script> -->
<script src="<?php echo BASE_URL('assets/assets/js/matrix.chat.js')?>"></script>
<script src="<?php echo BASE_URL('assets/assets/js/jquery.validate.js')?>"></script>
<script src="<?php echo BASE_URL('assets/assets/js/matrix.form_validation.js')?>"></script>
<script src="<?php echo BASE_URL('assets/assets/js/jquery.wizard.js')?>"></script>
<script src="<?php echo BASE_URL('assets/assets/js/jquery.uniform.js')?>"></script>
<script src="<?php echo BASE_URL('assets/assets/js/select2.min.js')?>"></script>
<script src="<?php echo BASE_URL('assets/assets/js/matrix.popover.js')?>"></script>
<script src="<?php echo BASE_URL('assets/assets/js/jquery.dataTables.min.js')?>"></script>

<script src="<?php echo BASE_URL('assets/assets/js/matrix.tables.js')?>"></script>
<script type="text/javascript" src="<?php echo BASE_URL('assets/assets/js/jquery.datetimepicker.js')?>"> </script>
<script type="text/javascript">

  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {

          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();
          }
          // else, send page to designated URL
          else {
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>

<script type="text/javascript">
  jQuery('.datepicker').datetimepicker({
  lang:'th',
  timepicker:false,
  format:'Y-m-d'
  });
</script>








<!-- <script>
// Check browser support
if (typeof(Storage) !== "undefined") {
    // Store
    localStorage.setItem("token2", "0646dsf0a662ss");
    // Retrieve
    document.getElementById("token2").innerHTML = localStorage.getItem("token2");
} else {
    document.getElementById("token2").innerHTML = "Sorry, your browser does not support Web Storage...";
}
</script>



<script type="text/javascript">
				$(document).ready(function(){

					// get value from storage
					$("#token").html( localStorage.getItem("sName"));

					// button click
					$("#btnClear").click(function(){
						localStorage.removeItem("sName");
						localStorage.removeItem("sEmail");
						window.location.reload();
					});
				});
</script> -->






<ul class="typeahead dropdown-menu"></ul></body></html>
