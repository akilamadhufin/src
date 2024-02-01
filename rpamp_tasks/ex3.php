<?php
$title = "Exercise 3: Variable, Strings & Operators";
include 'header.php';
?>
<div style="padding-left: 20px; padding-top: 20px; padding-bottom: 20px">

<h5>3.1 Create a file (ex3.php): Create a file named ex3.php in your exercise folder. Ensure that it uses the same layout as your other pages and that your navigation bar includes a link to this exercise.</h5>
<h5>3.2 Form Creation: Create a simple HTML form to collect the user’s Firstname and Lastname. Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag. Table & Form Guide </h5>
<h5>3.3 Bootstrap Styling: Apply Bootstrap styles to the form. Make sure to include the Bootstrap CSS link in your head tag. BootStrap Guide</h5>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 50vh;">
    <form name="userform" method="post" action="process1.php" class="text-center">
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name:</label>
            <input type="text" class="form-control" name="fname" required style="width: 700px;">
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name:</label>
            <input type="text" class="form-control" name="lname" required style="width: 700px;">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<br><br>
<h5>3.4 HTML Table: Prepare a simple HTML table and apply Bootstrap styles to it. Note, you have already done a table in Exercise 1. If you wish, you can use the same table. BootStrap Cheatsheet</h5>
<table class="table table-success table-striped table-bordered table table-hover table-sm" style="max-width: 600px;">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">email</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>mark@hamk.fi</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>jacob@hamk.fi</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td >Larry</td>
      <td>Bird</td>
      <td>larry@hamk.fi</td>
    </tr>
  </tbody>
</table>
<br><br>
<h5>3.5 String Variables: Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";). Join them together and print the length of the string.</h5>
<?php 
$str1 = "Hello"; 
$str2 = "World";
$joinedString = $str1 . $str2;
echo "Joined String: " . $joinedString . "<br>";
echo "Length of the String: " . strlen($joinedString);
?>    
<br><br>
<h5>3.6 Number Addition: Write a script to add up the numbers: 298, 234, 46. Use variables to store these numbers and an echo statement to output your answer.</h5>
<?php
$num1 = 298;
$num2 = 234;
$num3 = 46;
$sum = $num1 + $num2 + $num3;
echo "Sum of the Numbers: " . $sum;
?>
<br><br>
<h5>3.7 Browser Detection: Write a PHP script to detect the browser being used to view your pages. Hint: Use predefined variables: $_SERVER. Predefined Variables</h5>
<?php
$browser = $_SERVER['HTTP_USER_AGENT'];
echo "Your browser is: " . $browser;
?>
<br><br>
<h5>3.8 File Modification Time: Write a PHP script in the footer section of your universal footer to display the last modification time of a file. Hint: Use predefined variable $_SERVER, basename function  to get the filename , filetime function to get the last modified time & date function to print the date and time Predefined Variables</h5>
<br><br>
</div>

<?php $file_path = __FILE__; ?>
<?php
include 'footer.php';
?>
