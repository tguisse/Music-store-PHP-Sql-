<?php

include 'menu.php';



?>
<?php
//A function has been used to protect against injection attack here
?>
<?php
function register(){

$con = mysqli_connect("Localhost", "root", "", "music");
    if ($con) {
        $uname = $_POST['username'];
        $pw = $_POST['password'];
        $lname = $_POST['lastname'];
        $fname = $_POST['firstname'];


        $sql = "INSERT INTO users (username, password, lastname, firstname) values ('$uname','$pw', '$lname', '$fname')";
        if (mysqli_query($con, $sql)) {
            session_start();
            $_SESSION['username'] = $uname;
            header("Location: createpersonal.php");
        }
    } else {
        echo "error connecting to db";
    }
}

if(isset($_POST['register'])) {
register();
}else {

    ?>

    <form action="newuserregistrationpage.php" method="post">
        <label for="fname">First Name:</label><input id="fname" type="text" name="firstname"/><br><br>
        <label for="sname">Second Name:</label><input id="sname" type="text" name="lastname"/><br><br>
        <label for="username">Username:</label><input type="text" name="username" id="username" required/> <br><br>
        <label for="password">Password:</label><input type="password" name="password" id="password" required/> <br><br>
        <input type="submit" value="Submit" name="register">


    </form>
    <?php

}
?>