<html>
<body>
    <form method="post">
        Logout:<input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>
<?php
    session_start();
    if(isset($_POST["logout"]))
    {

        if(!isset($_SESSION["name"]))
        {
            echo "<script> alert('You are not Logged in...')</script>";
            header("location: login.php");
        }
        else
        {  
            echo "<script> alert('You are not Logged in...')</script>";
            session_destroy();
            header('Location: index.php');
        }
    }
?>