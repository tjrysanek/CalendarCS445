<?php
session_start();

$conn = mysqli_connect('localhost','root','','calendar');

$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM registration WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($conn, $sql);

if(empty($username)){
    echo("thinks its empty usr");
    //header("Location: login.html?error=uname is required");
    exit();
}
if(empty($password)){
    echo("thinks its empty ps");

    //header("Location: login.html?error=pass is required");
    exit();
}

if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if($row['username'] === $username && $row['password'] === $password){
        echo "Logged in";
        $_SESSION['username'] = $row['username'];
        $_SESSION['id'] = $row['id'];
        header("Location: calendarView.php");
        exit();
    }else{
        echo("thinks its incorrect");

        header("Location: login.html?error=Incorrect Username or Password");
        exit();
    }
}else{
    header("Location: login.html?error=Incorrect Username or Password");
    exit();
}

?>