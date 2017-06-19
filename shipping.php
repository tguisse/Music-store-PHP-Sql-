
<?php
//A function has been used to protect against injection attack here
?>
<?php
function shipping(){
    $address = $_POST['address'];
    $username = $_SESSION['username'];
    $town = $_POST['town'];
    $country = $_POST['country'];

    $con = mysqli_connect("Localhost", "root", "root", "music");
    if ($con) {
        $sql = "INSERT into SHIPPING  (username, address, town, country) VALUES('$username', '$address', '$town', '$country')";
        if (mysqli_query($con, $sql)) {
            echo "Successful added shipping info";
        } else {
            echo mysqli_error($con);
        }

    }
}
if(isset($_POST['shipping'])) {
shipping();
}else{

?>
<form action="shipping.php" method="post">
    <label for="username">Username</label>  <input type="text" id="username" name="username"/><br><br>
  <label for="address">Address</label>  <input type="text" id="address" name="address"/><br><br>
    <label for="town" >Town</label><input type="text" id="town" name="town"/><br><br>
    <label for="country" >Country</label><input type="text" id="country" name="country"/><br><br>
    <input type="submit" value="Shipping" name="shipping">
</form>


<?php
}


?>