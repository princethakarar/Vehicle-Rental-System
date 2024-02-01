<html>
<head>
    <style>
        body{
            display: flex;
            justify-content: center;            
            align-item: center;
            height: 100vh;
            background: #584e46;
        }

        input{
            position: relative;
        }
    </style>
</head>
<body>
    <form method="post">
        <input type="submit" name="logout" value="Logout">
    </form>
</body>
</html>
<?php
    session_start();
    if(isset($_POST["logout"]))
    {
        if(isset($_SESSION["mail"]))
        {
            if(session_destroy())
            {
                header("location: index.php");
            }
        }
    }
?>