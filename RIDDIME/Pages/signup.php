<?php
include '../components/header.php';
include '../components/navbar.php';
?>

<div class="signup">
    <h1>SIGN UP</h1>
    <form action="../models/signup.php" method="POST">
        <div class="signup-content">
            <label for="username">Username</label>
            <input type="text" name="username" id="" required>

            <label for="email">Email</label>
            <input type="email" name="email" id="" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="" required>
        </div>

        <div class="btn">
            <input type="submit" value="Sign Up" class="button">
        </div>
    </form>
</div>