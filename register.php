<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="login&register.css">
</head>
<body>
    <div class="container">
        <form action="post">
        <h2 class="heading">Register</h2>
            <input type="text" placeholder="Enter Name" name="name">
            <input type="text" placeholder="Enter Email" name="mail">
            <input type="password" placeholder="Enter Password" name="pass">
            <input type="submit" name="sb" value="Register" class="btn">
            <p class="register">Don't have account? <a href="Login.php">Login</a></p>
        </form>
    </div>
    <?php
        $db = mysqli_connect("localhost","root","","vrs")

        if($db)
        {
            if(isset($_POST["sb"]))
            {
                $name = $_POST['name'];
                $mail = $_POST['mail'];
                $pass = $_POST['pass'];

                $query = "insert into user values('$name','$mail','$pass');

                if(mysqli_query($db,$query))
                    echo "<script>alert('You have Registered successfully...');</script>";
                else
                    echo mysqli_error($db);
            }
        }
        else
        {
            echo mysqli_error($db);
        }
    ?>
</body>
</html>