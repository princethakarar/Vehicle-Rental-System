<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login&register.css">
</head>
<body style="background-size: cover;">
    <div class="container">
        <form method="post">
        <h2 class="heading">Login</h2>
            <input type="text" placeholder="Enter Email" name="mail" required>
            <input type="password" placeholder="Enter Password" name="pass" required>
            <input type="submit" name="sb" value="Login" class="btn">
            <p class="register">Don't have account? <a href="register.php">Register</a></p>
        </form>
    </div>
    <?php if (isset($_POST['sb'])) {
        $db = mysqli_connect('localhost', 'root', '', 'vrs');

        if ($db) {
            $mail = $_POST['mail'];
            $pass = $_POST['pass'];

            $query = mysqli_query($db,"SELECT name, email FROM user WHERE email = '$mail' AND pass = md5($pass)");

            $n = mysqli_num_rows($query);

            $row = mysqli_fetch_assoc($query);

            if ($n == 1) {
                session_start();
                $_SESSION["name"] = $row['name'];  
                $_SESSION["mail"] = $row['email'];    
                header('Location: index.php');
            } else {
                echo "<script>alert('Invalid id or password');</script>";
                echo mysqli_error($db);
            }
        } else {
            echo mysqli_error($db);
        }
        mysqli_close($db);
    } ?>
</body>
</html>