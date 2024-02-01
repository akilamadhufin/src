<?php

$title = "Your Information" ;
include 'header.php'; ?>

<div style="padding-left: 20px; padding-top: 20px; padding-bottom: 20px">
<?php
$fname = $_POST["fname"];
$lname = $_POST["lname"];

echo "<h3>Hello $fname $lname, You are welcome to my site.</h3>";
?>
</div>

<?php
include 'footer.php' ; ?>