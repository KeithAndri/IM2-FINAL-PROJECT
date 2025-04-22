

<nav>
    <ul>
        <li><a href="../index.php">
            <img src="../media/tv.png" alt="">
            <h4>Riddime</h4>
            </a></li>
        <li><a href="../pages/list.php">Anime List</a></li>
        <li><a href="../pages/discuss.php">Discussions</a></li>
        <li><a href="../pages/review.php">Reviews</a></li>
        <li class="search"><input type="search" placeholder="Search..."></li>

        <?php 
        if(isset($_SESSION['uid'])){ ?>            
            <li class="log-direct">
                <a class="log-color" href="">
                    <?php  echo $_SESSION['username']?>
                </a>
            </li>

            <li class="sign-direct">
                <a class="sign-color" href="../models/logout.php">Log Out</a>
            </li>
        <?php }else{?>
            <li class="log-direct"><a class="log-color" href="../pages/login.php">Log In</a></li>
            <li class="sign-direct"><a class="sign-color" href="../pages/signup.php">Sign Up</a></li>
        <?php } ?>
    </ul>

  
</nav>