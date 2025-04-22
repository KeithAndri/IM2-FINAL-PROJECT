<?php
    include 'database.php';

    session_start();

    $email=htmlspecialchars ($_POST['email']);

    $pass=htmlspecialchars ($_POST['password']);

    $con=create_connection();

    if($con->connect_error){
        die("Connection Failed:".$con->error);
    }   

    $sql_uname="SELECT * FROM user where email='$email' AND password='$pass'";
    $result_uname=$con->query($sql_uname);

    if($result_uname->num_rows>0) {
        $row=$result_uname->fetch_assoc();
        $_SESSION['uid']=$row['uid'];
        $_SESSION['username']=$row['username'];
        
        header("location:../index.php");
    }else{
        header("location:../pages/login.php");
    }
?>