<?php
// what to do with the data

if(isset($_POST['submit'])){ // without this code anyone can submit empty data to db
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];

    // connect to database server
    include 'db.php';

    //write sql statement to insert data
    // doesnot matter the order as we use the name. but in the sql code it should be in order.
    $sql = "insert into studentsinfo (first_name, last_name,city,groupid) 
    values('$fname','$lname','$city','$groupid')" ;

    if($conn->query($sql)===TRUE){
        echo "Your data was successfully recorded";
    }
    else{
        echo "Error in submitting: " .$sql. "<br>" . $conn->error;
    }

    // closing database connection
    $conn->close();

}

?>