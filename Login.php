<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login&register.css">
</head>
<body>
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

            $query1 = mysqli_query($db,"SELECT name FROM user WHERE email = '$mail'");

            $n1 = mysqli_num_rows($query1);

            $query2 = mysqli_query($db,"SELECT name FROM user WHERE email = '$mail' AND pass = '$pass'");

            $n2 = mysqli_num_rows($query2);

            if ($n1 == 1 && $n2 == 1) {
                session_start();
                $_SESSION["name"] = $row['name'];   
                header('Location: index.php');
            } elseif($n1 == 0) {
                echo "<script>alert('This email id doesn't exist...');</script>";
                echo mysqli_error($db);
            } elseif($n2 == 0) {
                echo "<script>alert('Wrong password');</script>";
                echo mysqli_error($db);
            } else{
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