<?php
include "includes/functions.php";
?>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1252" x-undefined>
<title>Bartendertainment.net Template</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script src="js/fw_menu.js"></script>
<script src="js/functions.js"></script>
<script>
function modalWin(url, height, width) {
	if (window.showModalDialog) {
 		window.showModalDialog(url,"name", "dialogWidth:" + width + "px;dialogHeight:" + height + "px;");
 	} 
 	else {
 		window.open(url,"name", "height=" + height + ",width=" + width + ",toolbar=no,directories=no,status=no,menubar=no,scrollbars=no,resizable=no,modal=yes");
	}
} 
function fwLoadMenus() {
  if (window.empmenu) return;
  window.empmenu= new Menu("root",200,21,"Verdana, Arial, Helvetica, sans-serif",14,"#ffffff","#ffffff","#A00000","#000000");
  empmenu.addMenuItem("Benefiting Your Business","window.navigate('default.php')");
  empmenu.addMenuItem("Temp Employees","window.navigate('default.php')");
  empmenu.addMenuItem("Temp to Hire","window.navigate('default.php')");
  empmenu.addMenuItem("Direct Hire","window.navigate('default.php')");
  empmenu.addMenuItem("Payroll","window.navigate('default.php')");
  empmenu.addMenuItem("Testimonials","window.navigate('default.php')");
  empmenu.addMenuItem("Fees","window.navigate('default.php')");
  empmenu.addMenuItem("Place an Order!","window.navigate('default.php')");
  empmenu.hideOnMouseOut=true;

  if (window.jobmenu) return;
  window.jobmenu= new Menu("root",200,21,"Verdana, Arial, Helvetica, sans-serif",14,"#ffffff","#ffffff","#A00000","#000000");
  jobmenu.addMenuItem("Working With Us","window.navigate('default.php')");
  jobmenu.addMenuItem("Better Your Performance","window.navigate('default.php')");
  jobmenu.addMenuItem("Testimonials","window.navigate('default.php')");
  jobmenu.addMenuItem("Online Application","window.navigate('default.php')");
  jobmenu.hideOnMouseOut=true;

  if (window.aboutmenu) return;
  window.aboutmenu= new Menu("root",200,21,"Verdana, Arial, Helvetica, sans-serif",14,"#ffffff","#ffffff","#A00000","#000000");
  aboutmenu.addMenuItem("Our Story","window.navigate('default.php')");
  aboutmenu.addMenuItem("Mission, Vision, & Values","window.navigate('default.php')");
  aboutmenu.addMenuItem("Our Team","window.navigate('default.php')");
  aboutmenu.addMenuItem("Staffing News","window.navigate('default.php')");
  aboutmenu.addMenuItem("Work For Us","window.navigate('default.php')");
  aboutmenu.addMenuItem("Contact Us","window.navigate('default.php')");
  aboutmenu.addMenuItem("Calendar","window.navigate('calendar.php')");
  aboutmenu.hideOnMouseOut=true;

  if (window.faqmenu) return;
  window.faqmenu= new Menu("root",200,21,"Verdana, Arial, Helvetica, sans-serif",14,"#ffffff","#ffffff","#A00000","#000000");
  faqmenu.addMenuItem("For Employers","window.navigate('default.php')");
  faqmenu.addMenuItem("For Job Seekers","window.navigate('default.php')");
  faqmenu.hideOnMouseOut=true;
  
  faqmenu.writeMenus();
} // fwLoadMenus()

</script>
</head>

<body class="redbody">
<center>
<table border="0" width="100%" cellspacing="0" cellpadding="0" height=100% style="position: absolute; left: 0; top: 0; padding-left:0; padding-right:0; padding-top:0">
<tr><td valign=top><center>
<table border="0" width="1000px" cellspacing="0" cellpadding="0">
	<tr>
		<td align="right" class="login" height="30px"><a href="#" onclick="javascript:modalWin('login.php', '280', '350'); return false;">Login</a> | <a href="default.php">Register</a></td>
	</tr>
	<tr height="20px" class="mainbody">
		<td />
	</tr>
	<tr class="mainbody">
		<td>
			<table border="0" class="mainbody" width="1000px" cellspacing="0" cellpadding="0">
				<tr>
					<td width="25px"></td>
					<td width="220px"><a href="default.php"><img src="images/logo_white_background_216_x_95.jpg"  border="0px"/></a></td>
					<td width="300px"></td>
					<td>
						<table width="450px" cellspacing="0" cellpadding="0">
							<tr height="75px">
								<td class="bigbuttons"><a href="#" onclick="javascript:modalWin('login.php', '280', '350'); return false;">Employers</a></td>
								<td width="20px"/>
								<td class="bigbuttons"><a href="#" onclick="javascript:modalWin('login.php', '280', '350'); return false;">Job Seekers</a></td>
								<td width="20px"/>
							</tr>
						</table>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr height="20px" class="mainbody">
		<td />
	</tr>
	<tr height="12px" bgcolor=#000000>
		<td />
	</tr>
	<tr height="20px" class="mainbody">
		<td />
	</tr>
	<tr class="mainbody">
		<td>
			<table border="0" class="mainbody" width="1000px" cellspacing="0" cellpadding="0">
				<tr>
					<td width="12px"></td>
					<td valign="top">
						<table border="0" class="mainbody" width="160px" cellspacing="0" cellpadding="0">
							<tr id="tdEmp" onmouseout="FW_startTimeout();" onmouseover="window.FW_showMenu(window.empmenu,findLeft(this)+165,findTop(this));">
								<td class="menubuttons"><a href="default.php">Employers</a></td>
							</tr>
							<tr height="12px" class="mainbody">
								<td />
							</tr>
							<tr onmouseout="FW_startTimeout();" onmouseover="window.FW_showMenu(window.jobmenu,findLeft(this)+165,findTop(this));">
								<td class="menubuttons"><a href="default.php">Job Seekers</a></td>
							</tr>
							<tr height="12px" class="mainbody">
								<td />
							</tr>
							<tr onmouseout="FW_startTimeout();" onmouseover="window.FW_showMenu(window.aboutmenu,findLeft(this)+165,findTop(this));">
								<td class="menubuttons"><a href="default.php">About Us</a></td>
							</tr>
							<tr height="12px" class="mainbody">
								<td />
							</tr>
							<tr>
								<td class="menubuttons" onmouseout="FW_startTimeout();" onmouseover="window.FW_showMenu(window.faqmenu,findLeft(this)+165,findTop(this));">
								<a href="default.php">FAQ</a></td>
							</tr>
							<tr height="12px" class="mainbody">
								<td />
							</tr>
							<tr>
								<td class="menubuttons"><a href="default.php">Contact Us</a></td>
							</tr>
							<tr height="20px" class="mainbody">
								<td />
							</tr>
							<tr class="callnow">
								<td>Call Now!</td>
							</tr>
							<tr class="callnow">
								<td>(555) 123-1234</td>
							</tr>
							<tr class="callnow" height="15px">
								<td></td>
							</tr>
							<tr class="callnow">
								<td><img src="images/stock_photo_20656098_catering_service_waiter_waitress_business_event.jpg" width="130px"></td>
							</tr>
						</table>
					</td>
					<td width="20px"></td>
