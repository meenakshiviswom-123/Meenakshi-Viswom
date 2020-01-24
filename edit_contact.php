<!DOCTYPE html>
<html>
<head>
<!--<link rel="stylesheet" href="http://localhost/LAMP4/resources/styles/style1.css"/>
<script type='text/javascript' src="http://localhost/LAMP4/resources/js/js1.js">
</script>-->
</head>
<body>
<h1 align="center">Contact Page</h1>
<form method="post" action="http://localhost/LAMP4/index.php/Ctrl_contact/update_contact">
<table align="center">
<input type='hidden' name='txtId' value="<?php echo $contact['cid'];?>">
<tr><td><input type='text' name='txtName' value="<?php echo $contact['name'];?>"></td></tr>
<tr><td><input type='email' name='txtEmail' value="<?php echo $contact['email'];?>"></td></tr>
<tr><td><input type='text' name='txtMobile' value="<?php echo $contact['mobile'];?>"></td></tr>
<tr><td><input type='submit' value='Enter'></td></tr>
</table>
</form>
</body>
</html>