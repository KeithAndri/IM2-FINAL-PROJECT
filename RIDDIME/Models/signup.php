<?php
    include 'database.php';

    $un=htmlspecialchars ($_POST['username']);
    $em=htmlspecialchars ($_POST['email']);
    $pass=htmlspecialchars ($_POST['password']);

    $con=create_connection();

    if($con->connect_error){
        die("Connection Failed:".$con->error);
    }   

    $sql_uname="SELECT * FROM user where username='$un'";
    $result_uname=$con->query($sql_uname);
    $uname_error=0;
    if($result_uname->num_rows>0) {
        $uname_error=1;
    }

    $sql_email="SELECT * FROM user where email='$em'";
    $result_email=$con-> query($sql_uname);
    $email_error=0;
    if($result_email->num_rows>0) {
        $email_error=1;
    }

    if($uname_error==0 && $email_error==0){
        $sql="INSERT INTO user VALUES (0, '$un', '$em', '$pass')";
    $con->query($sql);    
        
        header("location:../pages/login.php");
        
    }
    else
    {
        header("location:../pages/signup.php");
    }
?>