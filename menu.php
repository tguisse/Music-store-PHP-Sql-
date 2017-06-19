<head>

<html>

<head>
    <title>Music</title>


    <link href="https://fonts.googleapis.com/css?family=Alegreya" rel="stylesheet">
    <script src="js/jquery.js"></script>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <script src="js/bootstrap.min.js"></script>

    <script src="js/jquery.js"></script>

    <link href="css/custom.css" rel="stylesheet"/>
    <style>
        body {
            margin: 0;
        }

        #side {
            list-style-type: none;
            margin: 0;
            padding: 0;
          //  width: 25%;
            background-color: #f1f1f1;

            height: 100%;
            overflow: auto;
        }

        #side > li a {
            display: block;
            color: #000;
            padding: 8px 16px;
            text-decoration: none;
        }

        #side>  li a.active {
            background-color: #4CAF50;
            color: white;
        }

        #side>  li a:hover:not(.active) {
            background-color: #555;
            color: white;
        }
    </style>
</head>

<body>

<div class="jumbotron" style="display: block">
    <h3> Music Store</h3>
    <nav class="navbar navbar-default">
        <div class="">

            <ul class="nav navbar-nav">
                <li class="navbar-brand">
                    <a href="#"><image src="" /></a> </li>
                <li class="active">
                    <a href="index.php">Home</a>

                </li>

            </ul>

            <ul class=" nav navbar-nav navbar-right" style="margin-right: 50px;">

        <h2>  ...</h2>
            </ul>


        </div>


    </nav>
</div>
<div class="row">
    <div class="col-sm-2 col-md-2">
        <ul id="side" >
            <li><a href="index.php">Home</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="selection.php">Select Albums</a></li>
            <li><a href="personal.php">View Artists</a></li>
          <?php ini_set('display_errors', 0); session_start();  if (isset($_SESSION['username'])) {
              echo ' <li><a href="logout.php">Logout</a> </li> ';
          }else{

          }
    ?>
        </ul>

    </div>
    <div class="col-sm-10 col-md-10">

