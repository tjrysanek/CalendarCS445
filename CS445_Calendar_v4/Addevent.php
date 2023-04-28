<?php
session_start();


$conn = mysqli_connect('localhost','root','','calendar');

$eventTitle = $_POST['eventTitle'];
$eventDesc = $_POST['eventDesc'];
$eventDate = $_POST['eventDate'];

if($conn -> connect_error){
    die('Connection Failed: ' .$conn-> connect_error);
}else{
    $stmt = $conn->prepare("insert into events(eventTitle, eventDesc, eventDate) values(?, ?, ?)");
    $stmt ->bind_param("sss", $eventTitle, $eventDesc, $eventDate);
    $stmt -> execute();
    $stmt->close();
    $conn->close();
}
header("Location: calendarView.php");
?>


