<?php

include 'menu.php';



?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   <title>Form Login</title>
</head>

<h3> Thanks for shopping with us
 <?php session_start(); echo $_SESSION["username"]; ?></h3>
<form name='logout' method='post' action='logout.php'> 
        <input name='btnsubmit' type='submit' value='Logout'> 
</form>
</body>
</html>
