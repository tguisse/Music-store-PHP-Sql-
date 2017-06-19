
<?php
//A function has been used to protect against injection attack here
?>
<?php

include 'menu.php';



?>
<?php
if(isset($_GET['albums'])){
    echo "<a href='clearinformation.php'>Clear My Cart </a> <br> ";
    if(!isset($_SESSION['selectedalbums'])){
        foreach ($_GET['albums'] as $selectedOption)
            echo $selectedOption."<br> ";
        $_SESSION['selectedalbums'] = array();
        array_push($_SESSION['selectedalbums'], $selectedOption);
    }

}



?>


<?php
error_reporting(E_ALL ^ E_WARNING);
if(isset($_GET['item'])){


    $sum = array_sum($_GET['item']);
//  echo "the sum is". $sum;


}



?>


<!DOCTYPE html>
<!-- Form.php.html -->
<!-- Jan 22, 2016 -->
<html>
<head>
    <title>Order Form</title>
</head>
<body>
Thank you, <?php session_start(); echo $_SESSION["username"]; ?> for Purchasing Our Products Worth <h3> The Total is  $<?php echo $sum; ?></h3><br>
<h3>Please Input All Information to Complete Your Order</h3>
<form action="thanks.php">
    Username:<br>
    <input type="text" name="username" value=""><br>
    Last name:<br>
    <input type="text" name="password" value=""><br>
    Street Address:<br>
    <input type="text" name="address" value=""><br>



    First name:<br>
    <input type="text" name="firstname" value=""><br>
    Last name:<br>
    <input type="text" name="lastname" value=""><br>
    Street Address:<br>
    <input type="text" name="address" value=""><br>
    City:<br>
    <input type="text" name="city" value=""><br>

    <br>

    <select name="state" size="1">
        <option value="AK">AK</option>
        <option value="AL">AL</option>
        <option value="AR">AR</option>
        <option value="AZ">AZ</option>
        <option value="CA">CA</option>
        <option value="CO">CO</option>
        <option value="CT">CT</option>
        <option value="DC">DC</option>
        <option value="DE">DE</option>
        <option value="FL">FL</option>
        <option value="GA">GA</option>
        <option value="HI">HI</option>
        <option value="IA">IA</option>
        <option value="ID">ID</option>
        <option value="IL">IL</option>
        <option value="IN">IN</option>
        <option value="KS">KS</option>
        <option value="KY">KY</option>
        <option value="LA">LA</option>
        <option value="MA">MA</option>
        <option value="MD">MD</option>
        <option value="ME">ME</option>
        <option value="MI">MI</option>
        <option value="MN">MN</option>
        <option value="MO">MO</option>
        <option value="MS">MS</option>
        <option value="MT">MT</option>
        <option value="NC">NC</option>
        <option value="ND">ND</option>
        <option value="NE">NE</option>
        <option value="NH">NH</option>
        <option value="NJ">NJ</option>
        <option value="NM">NM</option>
        <option value="NV">NV</option>
        <option value="NY">NY</option>
        <option value="OH">OH</option>
        <option value="OK">OK</option>
        <option value="OR">OR</option>
        <option value="PA">PA</option>
        <option value="RI">RI</option>
        <option value="SC">SC</option>
        <option value="SD">SD</option>
        <option value="TN">TN</option>
        <option value="TX">TX</option>
        <option value="UT">UT</option>
        <option value="VA">VA</option>
        <option value="VT">VT</option>
        <option value="WA">WA</option>
        <option value="WI">WI</option>
        <option value="WV">WV</option>
        <option value="WY">WY</option>
    </select>
    <br>
    <br>
    Zipcode:<br>
    <input type="text" name="zip" value=""><br><br>
    <input type="radio" name="credit_card" value="visa" checked> Visa<br>
    <input type="radio" name="credit_card" value="master"> MasterCard<br>
    <input type="radio" name="credit_card" value="american"> American Express<br>
    <input type="radio" name="credit_card" value="discover"> Discover<br>
    <input type="radio" name="credit_card" value="paypal"> Pay Pal<br><br>
    Phone Number:<br>
    <input type="text" name="phone" valur""><br>
    Credit Card Number:<br>
    <input type="text" name="card_number" value=""><br>
    Expiration Date (Mon/Year):<br>
    <input type="text" name="expire" value=""><br>
    Security Code:<br>
    <input type="text" name="code" value=""><br><br>
    <input type="submit" value="Submit">

</form>
</body>



<a href="shipping.php"> Shipping   </a>
