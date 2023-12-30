<html>
<head>
    <style>
        body{
            display: flex;
            align-item: center;
            justify-content: center;
        }

        .form{
            position: absolute;
            top: 45vh;
            display: flex;
            flex-direction: column;
            align-item: center;
            justify-content: center;
            gap: 10px;
        }

        .answer{
            display: flex;
            align-item: center;
            justify-content: center;
            gap: 10px;
        }

        input{
            padding: 5px 10px;
            font-size: 20px;
            color: white;
            background: #474fa0;
            border: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <form method="post" class="form">
        <label for="logout" style="font-size: 35px;">Do you want to Sign Out?</label>
        <div class="answer">
            <input type="submit" name="logout" value="Yes">
            <input type="submit" name="no" value="No">
        </div>
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