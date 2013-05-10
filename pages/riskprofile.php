<?php
	set_include_path("../");
	include_once("inc/essentials.php");

?>
	
<script>
menuLink = new Array(); 
menuColor = new Array();
$mainNav.set("dashboard");
</script>

<link type="text/css" href="jqueryui/css/ui-metro/jquery-ui-1.8.24.custom.css" rel="stylesheet" />	<!-- CALLS THE THEME FILE -->
<link type="text/css" href="jqueryform/jquery.idealforms.min.css" rel="stylesheet" />	<!-- CALLS THE FORM THEME FILE -->
<link type="text/css" href="jqueryclone/jquery.sheepIt.css" rel="stylesheet" />	<!-- CALLS THE FORM THEME FILE -->
<script type="text/javascript" src="jqueryui/js/jquery-ui-1.8.24.custom.min.js"></script><!--CALLS THE JQUERY UI SOURCE FILE -->
<script type="text/javascript" src="jqueryform/jquery.idealforms.min.js"></script><!--CALLS THE JQUERY FORM SOURCE FILE -->
<script type="text/javascript" src="jqueryclone/jquery.sheepItPlugin.js"></script><!--CALLS THE JQUERY FORM SOURCE FILE -->

<h1 style='margin-top:0px;'>Risk Profile</h1>
<hr class="margin-t-0" />
  
<script>
$(function() {
	$( "#tabs" ).tabs();
});
</script>
<div id="tabs">
	<ul>
		<li><a href="#general-rp">General</a></li>
		<li><a href="#staffing-rp">Office Staffing</a></li>
		<li><a href="#revenue-rp">Revenue</a></li>
		<li><a href="#business-rp">Business</a></li>
		<li><a href="#policies-rp">E&O Policies</a></li>
		<li><a href="#procedures-rp">Office Procedures</a></li>
	</ul>
	<div id="general-rp">
			<?php  include_once("riskprofile/general.html"); ?>
	</div>
	<div id="staffing-rp">
			<?php  include_once("riskprofile/staffing.html"); ?>	
	</div>
	<div id="revenue-rp">
		<?php  include_once("riskprofile/revenue.html"); ?>	
	</div>
	<div id="business-rp">
		<?php  include_once("riskprofile/business.html"); ?>	
	</div>
	<div id="policies-rp">
		<?php  include_once("riskprofile/policies.html"); ?>	
	</div>
	<div id="procedures-rp">
		<?php  include_once("riskprofile/procedures.html"); ?>	
	</div>
</div>
