<?php
include "includes/functions.php";
echo "<script>\n";
echo "var cook_email=\"" . valueOf('cookie', 'email') . "\";\n";
echo "var cook_pass=\"" . valueOf('cookie', 'password') . "\";\n";
echo "var cook_remember=\"" . valueOf('cookie', 'remember') . "\";\n";
echo "</script>\n";
?>
<html>

<head>
<title>Login</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script>
function login(){
	var xmlDoc = null;

	if (window.XMLHttpRequest)
	{
	    xmlDoc = new XMLHttpRequest(); //Newer browsers
	}
	else if (window.ActiveXObject) //IE 5, 6
	{
	    xmlDoc = new ActiveXObject("Microsoft.XMLHTTP");
	}
	
	xmlDoc.onreadystatechange = function() { 	window.close() };

    xmlDoc.open("POST", "savelogin.php?email=" + email.value + "&password=" + password.value + "&remember=" + rememberme.checked, true);
    xmlDoc.send();
}

function setValues(){
	document.all.email.value = cook_email;
	document.all.password.value = cook_pass;
	document.all.rememberme.checked = (cook_remember=="true") ? true : false;
}

</script>
</head>

<body onload="setValues();">
<table cellpadding="0" cellspacing="0"><tr height="7px"><td></td></tr><tr><td width="7px"></td><td>
<table border="0" cellpadding="0" cellspacing="0" width="325x">
	<tr>
		<td class="sectionheading">Login</td>
	</tr>
	<tr>
		<td>
		<table border="0" cellpadding="0" cellspacing="0" width="100%">
			<tr>
				<td class="red" width="300px">Email</td>
				<td><input type="text" id="email" size="30" value="">&nbsp;</td>
			</tr>
			<tr>
				<td class="red">Password</td>
				<td>
				<input type="password" id="password"  size="30" name="T1" size="20"></td>
			</tr>
			<tr>
				<td class="red"><nobr>Remember me</nobr></td>
				<td><input type="checkbox" id="rememberme" name="T2" size="20"></td>
			</tr>
		</table>
		</td>
	</tr>
	<tr>
		<td align="right"><input type="button" value="Login" onclick="javascript:login();" id="email2" name="T3" size="20"></td>
	</tr>
	<tr height="30px">
		<td>&nbsp;</td>
	</tr>
	<tr>
		<td class="sectionheading">Register</td>
	</tr>
	<tr>
		<td><a href="#" class="red">Talent</a> | <a href="#" class="red">Client</a></td>
	</tr>
	<tr>
		<td><a href="#" class="red">Forgot Password?</a></td>
	</tr>
	<tr height="30px">
		<td class="red">&nbsp;</td>
	</tr>
	<tr>
		<td style="border-top-style: solid; border-top-width: 2px;">
		<table border="0" width="100%" cellspacing="0" cellpadding="0">
			<tr>
				<td width="90%">&nbsp;</td>
				<td align="right"><nobr><a href="javascript:window.close();" class="hovertext">Close X</a></nobr></td>
			</tr>
		</table>
		</td>
	</tr>
</table>
</td></tr></table>
</body>

</html>