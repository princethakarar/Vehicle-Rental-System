<html>
    <head>
        <link rel="stylesheet" href="profile.css">
    </head>
<body>
    <?php
        session_start();
    ?>
    <form method="post" class="form">
        <div class="image">
            <img src="images/profile.png" alt="">
        </div>
        <!-- <div class="sub-container">
            <p>Name : <? $_SESSION["name"] ?></p>
        </div> -->
        <div class="content">
        <?php
            echo "<p>Name : ".$_SESSION["name"]."</p>";
            echo "<p>Email : ".$_SESSION["mail"]."</p>";
        ?>
        </div>
        <div class="sub">
                <input type="submit" name="logout" value="Logout">
                </div>
        </form>
</body>
</html>
<?php
    if(isset($_POST["logout"]))
    {

        if(!isset($_SESSION["name"]))
        {
            echo "<script> alert('You are not Logged in...')</script>";
            header("location: login.php");
        }
        else
        {  
            echo "<script> alert('Logged out Successfully...')</script>";
            session_destroy();
            header('Location: index.php');
        }
    }
    if(isset($_POST["no"]))
    {
        header('Location: index.php');
    }
?>