<!DOCTYPE html>
<html>
<head>
<!--<link rel="stylesheet" href="http://localhost/LAMP4/resources/styles/style1.css"/>
<script type='text/javascript' src="http://localhost/LAMP4/resources/js/js1.js">
</script>-->
</head>
<body>

<h1 align="center">Contact Page</h1>
<form method="post" action="http://localhost/LAMP4/index.php/Ctrl_contact/insert_contact">
<table align="center">
<tr><td><input type='text' name='txtName' placeholder='Name'></td></tr>
<tr><td><input type='email' name='txtEmail' placeholder='Email'></td></tr>
<tr><td><input type='text' name='txtMobile' placeholder='Mobile'></td></tr>
<tr><td><input type='submit' value='Enter'></td></tr>
</table>
</form>
<table align="center" border="1">
<tr><td>SlNo</td><td>Name</td><td>Email</td><td>Mobile</td><td>Operation</td></tr>
<?php
foreach($contacts as $item)
{
?>
<tr>
<td><?php echo $item['cid'];?></td>
<td><?php echo $item['name'];?></td>
<td><?php echo $item['email'];?></td>
<td><?php echo $item['mobile'];?></td>
<td><a href="http://localhost/LAMP4/index.php/Ctrl_contact/delete_contact/<?php echo $item['cid'];?>">Delete</a>/<a href="http://localhost/LAMP4/index.php/Ctrl_contact/edit_contact/<?php echo $item['cid'];?>">Edit</a></td>
</tr>
<?php
}
?>

</table>
</body>
</html>