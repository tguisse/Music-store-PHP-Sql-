<?php session_start();
ini_set('display_errors', 0);
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
} else {


    ?>
    <?php

    include 'menu.php';



    ?>

    <!DOCTYPE html>
    <!-- CNShome.html -->
    <!-- Jan 22, 2016 -->


    <html>

    <head>
        <title>The Music Store </title>
    </head>

    <head>
        <style>


            #header {
                background-color: black;
                color: white;
                text-align: center;
                padding: 5px;
            }

            #nav {
                line-height: 30px;
                background-color: #eeeeee;
                height: 300px;
                width: 100px;
                float: left;
                padding: 5px;
            }

            #section {
                width: 350px;
                float: left;
                padding: 10px;
            }

            #footer {
                background-color: black;
                color: white;
                clear: both;
                text-align: center;
                padding: 5px;
            }
        </style>
    </head>

    <style>

        p.inset {
            border-style: inset;
        }

    </style>

    <?php if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
        // last request was more than 30 minutes ago
        session_unset();     // unset $_SESSION variable for the run-time
        session_destroy();   // destroy session data in storage

        header("Location: login.php");
    }
    $_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp
    ?>

    <div id="header">
        <h1>Welcome to Our Music Store</h1>
    </div>

    <p>
    <h2>Take a look at our fine selection:</h2>
    </p>
    <a href="logout.php">Logout</a>
    <br>

    Welcome: <?php echo $_SESSION['username']; ?><br>
    <br>
    <br>
    <br>
    <br>

    <div id="section">
        <form action="Form.php" method="get">
            <img src="images/image1.jpg" alt="HTML 		tutorial" style="width:152px;height:172px;border:0;" align="right">
            <?php

            $item->name = '25 Minutes';
            $item->price = '89.99'; ?>
            <h4>25 Minutes</h4>
            <h6> $89.99 </h6>
            <br>
            <input type="checkbox" name="item[]" value="<?php echo $item->price ;?>">Buy

            </p>
            <br>
            <br>
            <br>
            <br>
            <img src="images/image2.jpg" alt="HTML tutorial" style="width:152px;height:172px;border:0;" align="right">
            <?php $item->name = 'Generations';
            $item->price = '499.99'; ?>
            <h4>Generations</h4>
            <h6> $99.99</h6>
            <br>
            <input type="checkbox" name="item[]"  value="<?php echo $item->price ;?>">Buy
            <br>
            <br>

            <br>
            <br>
            <img src="images/image3.jpg" alt="HTML 		tutorial" style="width:152px;height:172px;border:0;" align="right">
            <?php $item->name = 'Feeling Happy';
            $item->price = '19.99'; ?>
            <h4>Feeling Happy</h4>
            <h6> $19.99 </h6>
            <br>
            <input type="checkbox" name="item[]"  value="<?php echo $item->price ;?>">Buy


            <br>
            <br>


            <br>
            <br>
            <img src="images/image4.jpg" alt="HTML 		tutorial" style="width:152px;height:172px;border:0;" align="right">
            <?php $item->name = 'Rockstart';
            $item->price = '29.99'; ?>
            <h4>Rockstart</h4>
            <h6> $29.99 </h6>
            <br>
            <input type="checkbox" name="item[]"  value="<?php echo $item->price ;?>">Buy
            <br>
            <br>

            <br>
            <br>
            <img src="images/image5.jpg" alt="HTML 		tutorial" style="width:152px;height:172px;border:0;" align="right">
            <?php $item->name = 'The Meal';
            $item->price = '69.99'; ?>
            <h4>The Meal</h4>
            <h6> $69.99 </h6>
            <br>
            <input type="checkbox" name="item[]"  value="<?php echo $item->price ;?>">Buy
            <br>
            <br>

            <br>
            <br>
            <img src="images/image6.jpg" alt="HTML 		tutorial" style="width:152px;height:172px;border:0;" align="right">
            <?php $item->name = 'Body Behavior';
            $item->price = '39.99'; ?>
            <h4>Body Behavior</h4>
            <h6> $39.99 </h6>
            <br>
            <input type="checkbox" name="item[]" value="<?php echo $item->price ;?>">Buy
            <br>
            <br>

            <br>
            <br>
            <img src="images/image7.jpg" alt="HTML 		tutorial" style="width:152px;height:172px;border:0;" align="right">
            <?php $item->name = ' Medicine Ball';
            $item->price = '329.99'; ?>
            <h4>Medicine Ball</h4>
            <h6> $19.99 </h6>
            <br>
            <input type="checkbox" name="item[]""  value="<?php echo $item->price ;?>">Buy
            <br>
            <br>

            <br>
            <br>
            <img src="images/image8.jpg" alt="HTML 		tutorial" style="width:152px;height:172px;border:0;" align="right">
            <?php $item->name = 'Fit Active';
            $item->price = '37.99'; ?>
            <h4>Fit Active</h4>
            <h6> $19.99 </h6>
            <br>
            <input type="checkbox" name="item[]" value="<?php echo $item->price ;?>">Buy

            <br>
            <br>
            <br>
            <br>
            <img src="images/image9.jpg" alt="HTML 		tutorial" style="width:152px;height:172px;border:0;" align="right">
            <?php $item->name = ' Floorin';
            $item->price = '323.99'; ?>
            <h4> Flooring</h4>
            <h6> $49.99 </h6>
            <br>
            <input type="checkbox" name="item[]" value="<?php echo $item->price ;?>">Buy
            <br>
            <br>
            <br>
            <br>
            <img src="images/image10.jpg" alt="HTML 		tutorial" style="width:152px;height:172px;border:0;" align="right">
            <?php $item->name = 'Water bottle';
            $item->price = '320.99'; ?>
            <h4> Water bottle</h4>
            <h6> $5.99 </h6>
            <br>
            <input type="checkbox" name="item[]"  value="<?php echo $item->price ;?>">Buy
            <br>
            <input type="submit" value="Checkout">
        </form>
    </div>
    <div id="footer">
        Copyright &#169 Gilman Inc.
    </div>
    </body>
    </html>

    <?php
}
?>