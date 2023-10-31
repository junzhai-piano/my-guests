<?php
session_start();


if(!isset($_POST['addguest'])){
    echo "You don't have access to this page";
}else{
//    echo $_POST['firstname'];
//echo '<br>';
//Check if a row is already in

//add guest to database
include 'db.php';

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('{$_POST['firstname']}', '{$_POST['lastname']}', '{$_POST['email']}')";
//echo $sql;
//die;



if (mysqli_query($conn, $sql)) {
  $_SESSION['message']='guestadded';
  header("Location: index.php");
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

}




//link to get back

?>
<br><br>
<a href="index.php">Back</a>