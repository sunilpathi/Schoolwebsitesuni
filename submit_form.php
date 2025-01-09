<?php
// Get data from form
include 'connection.php';
$name = $_POST['name'];
$child = $_POST['child'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$grade = $_POST['grade'];

// Insert into database
$sql = "INSERT INTO stud (name, child, email, phone, grade) VALUES ('$name', '$child', '$email', '$phone', '$grade')";
if ($conn->query($sql) === TRUE) {
    echo " Your Form is Submitted Suceesfuly THANK YOU!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>