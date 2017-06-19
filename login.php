<?php include 'menu.php' ;
?>

<?php
//A function has been used to protect against injection attack here
?>

<?php
function processlogin(){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $con = mysqli_connect("Localhost", "root", "", "music");
    if ($con) {
    } else {
        echo "error connecting to db";
    }

    $sql = "SELECT * FROM users WHERE username = '$username' ";
    $res = mysqli_query($con, $sql);
    $count = mysqli_num_rows($res);
    if($count >= 1){
        $details = mysqli_fetch_array($res);
        if($password == $details['password']){
            session_start();
            $_SESSION['username'] = $username;
            header("Location: personal.php");
        }else{
            header("Location: login.php");
        }
    }else{echo 'No user exist with specified username';}
}

if (isset($_POST['username'])) {
    processlogin();
}else{?>


    <form action="login.php" method="post">
        <label for="username">Username:</label><input type="text" name="username" id="username" required/> <br><br>
        <label for="password">Password:</label><input type="password" name="password" id="password" required/> <br><br>
        <input type="submit" value="Submit">


    </form>

    <a href="newuserregistrationpage.php"> Do you need to Register ?</a>


    </body>
 <?php
}


?>