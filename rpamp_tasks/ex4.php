<?php   
    $title = "Exercise 4:  Control flow and loops" ;
include 'header.php'; ?>

<div style="padding-left: 20px; padding-top: 20px; padding-bottom: 20px">

<h5>4.1 Create a file (ex4.php): Create a file named ex4.php in your exercise folder. Ensure that it uses the same layout as your other pages and that your navigation bar includes a link to this exercise.</h5>

<h5>4.2 If-Else: Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting. (18 or more than 18 years is eligible for voting, use form to get user input).</h5>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 50vh;">
<form name="vote_eligibility" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="text-center">
        <div class="mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control" name="name" required style="width: 700px;">
        </div>

        <div class="mb-3">
            <label for="age" class="form-label">Age:</label>
            <input type="text" class="form-control" name="age" required style="width: 700px;">
        </div>

        <button type="submit" class="btn btn-primary">Check</button>
    </form>
</div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["name"]) && isset($_POST["age"])) {
    $name = isset($_POST["name"]) ? $_POST["name"] : "";
    $age = isset($_POST["age"]) ? $_POST["age"] : "";

    if (!is_numeric($age)) {
        echo "<h3>Hello $name, age should be a valid number.</h3>";
    } elseif ($age >= 18) {
        echo "<h3>Hello $name, You are eligible for voting.</h3>";
    } elseif ($age < 18) {
        echo "<h3>Hello $name, You are not eligible for voting.</h3>";
    } else {
        echo "<h3>Hello $name, age or name is invalid.</h3>";
    }
}
?>
<h5>4.3 Switch Case: Write a PHP script that gets the current month and prints one of the following responses, depending on whether it's August or not:</h5>
<H6>It's August, so it's still holiday.<br>
Not August, this is Month-name so I don't have any holidays<br>
Hint: You can use date(F) function to get the current month name. Check Date function from the php manual page.</h6></h5>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 50vh;">
<form name="month" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="text-center">
        <div class="mb-3">
            <label for="month" class="form-label">
                <?php 
                $month = date("F"); 
                echo "<p>Current Month: $month</p>";
                ?> 
                </label>            
        </div>
        <button type="submit" class="btn btn-primary">Check the month</button>
    </form>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $month = date("F");

    switch ($month) {
        case "August":
            echo "<h3>It's August, so it's still a holiday.</h3>";
            break;
        default:
            echo "<h3>Not August, this is $month, so I don't have any holidays.</h3>";
    }
}
?>
<h5>4.4 For Loop: Write a PHP script that will print the multiplication table of a number (n, use form to get user input).</h5>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 50vh;">
<form name="multiplicationTable" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="text-center">
        <div class="mb-3">
            <label for="number1" class="form-label">Insert the Number:</label>
            <input type="text" class="form-control" name="number1" required style="width: 700px;">
        </div>
       <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["number1"])) {
    $number1 = isset($_POST["number1"]) ? $_POST["number1"] : "";

    for($i=0; $i<=$number1; $i++){
        echo "$i * $number1 = " . $i * $number1 . "<br>";

    }
}
?>
<h5>4.5 While Loop: Write a PHP script that will print all the numbers from 1 to n. (use form to get user input)</h5>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 50vh;">
<form name="numberPrint" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="text-center">
        <div class="mb-3">
            <label for="number2" class="form-label">Insert the Number:</label>
            <input type="text" class="form-control" name="number2" required style="width: 700px;">
        </div>
       <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["number2"])) {
    $number2 = isset($_POST["number2"]) ? $_POST["number2"] : "";
    $i=1;
    while($i<=$number2){
        echo "number is " .$i . "<br>";
        $i++;
    }
}
?>
<h5>4.6 Foreach Loop: Write a PHP script that will print all the elements of an array. $myarray=("HTML", "CSS", "PHP", "JavaScript").</h5>
<div class="container d-flex justify-content-center align-items-center" style="min-height: 50vh;">
<form name="printArray" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="text-center">
        <div class="mb-3">
       <button type="submit" class="btn btn-primary">Print</button>
</form>
        </div>
</div>        

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $myarray=array("HTML", "CSS", "PHP", "JavaScript");
    foreach($myarray as $value){
    echo  $value."<br />";
    }
}
?>
</div>

<?php include 'footer.php' ; ?>

