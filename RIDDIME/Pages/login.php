<?php
include '../components/header.php';
include '../components/navbar.php';
?>

<div class="login">
    <h1>LOG IN</h1>
    <form action="../models/login.php" method="POST">
        <div class="signup-content">

            <label for="email">Email</label>
            <input type="email" name="email" id="" required>

            <label for="password">Password</label>
            <input type="password" name="password" id="" required>
        </div>

        <div class="btn">
            <input type="submit" value="Log In" class="button">
        </div>
    </form>
</div>