<?php

include 'menu.php';



?>

<?php
//A function has been used to protect against injection attack here
?>
<?php
session_start();
if(isset($_SESSION['username'])){
    echo " <h1> Welcome , " . $_SESSION['username'];
}else{
    header("Location: login.php");
}
?>

<form action="createpersonal.php" method="post">
<select name="artist" >
<option value="">Select your Favorite Artist </option>
<option value="Akon"> Akon </option>
<option value="Sarah Mrtin ">Sarah Martin</option>
<option value="Jeff Lincon ">Jeff Linkon</option>
<option value="Chris Brown ">Chris Brown</option>
<option value="Howard Hewes ">Howard Hewes</option>
<option value="Lil Wayne">lil Wayne</option>
<option value="Busta Rhymes">Busta Rhymes</option>
<option value="Damian Marley ">Damian Marley</option>
<option value="Kelly Clarkson ">Kelly Clarkson</option>
<option value="Justin Bieber ">MJustin Bieber</option>
<option value="Kelvin Ludorf ">Kelvin Ludorf</option>



</select>
<input type="submit" value="Submit" name="personal"/>

</form>




