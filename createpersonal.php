<?php

include 'menu.php';



?>
<?php
//A function has been used to protect against injection attack here
?>


<?php
function update(){
    if (isset($_POST['personal'])){
        $artist = $_POST['artist'];
        session_start();
        $username = $_SESSION['username'];
        $con = mysqli_connect("Localhost", "root", "", "music");
        if ($con) {
            $sql = "UPDATE  USERS set artists = '$artist' WHERE username = '$username'";
           // $sql = 'UPDATE `users` SET `artists` = \'abc\' WHERE `users`.`id` = 5';
            if(mysqli_query($con, $sql)){
                header("Location: selection.php");
            }else{
                echo mysqli_error($con);
            }
        }
    }
}
if (isset($_POST['personal'])){
update();
}else{


}


?>