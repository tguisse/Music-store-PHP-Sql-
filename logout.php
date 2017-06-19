
<?php
session_start();

session_destroy();
echo "All Session Data Cleared";

echo "<br> <a href='index.php'>Click Here to Go back</a>
";
header("Location: index.php");
?>