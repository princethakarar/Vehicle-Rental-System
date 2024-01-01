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
        <form method="post">
        <h2 class="heading">Register</h2>
            <input type="text" placeholder="Enter Name" name="name" required>
            <input type = "text" name="phno" minlength="10" maxlength = "10" placeholder="Enter Phone Number"/>
            <input type="text" placeholder="Enter Email" name="mail" required>
            <input type="text" placeholder="Enter Licence" name="lno" maxlength="16" class="lno" required>
            <input type="password" placeholder="Enter Password" name="pass" required>
            <input type="submit" name="sb" value="Register" class="btn">
            <p class="register">Don't have account? <a href="Login.php">Login</a></p>
        </form>
    </div>
    <?php
        if(isset($_POST["sb"]))
        {
            $db = mysqli_connect("localhost","root","","vrs");

            if($db)
            {
                    $name = $_POST['name'];
                    $phno = $_POST['phno'];
                    $mail = $_POST['mail'];
                    $lno = $_POST['lno'];
                    $pass = $_POST['pass'];

                    $query = mysqli_query($db,"SELECT name FROM user WHERE email = '$mail' AND pass = '$pass'");

                    $n = mysqli_num_rows($query);

                    if($n > 0)
                    {
                        // echo "<script>alert('This mail id is already registered...');</script>";
                    }
                    else
                    {
                        $query = "insert into user(name, phone_number, email, licence_number, pass) values('$name','$phno','$mail','$lno','$pass')";

                        if(mysqli_query($db,$query))
                        {
                            session_start();
                            $_SESSION["name"]=$_POST["name"];
                            $otp = rand(1000, 9999);   //Generate OTP
                            include_once("SMTP/class.phpmailer.php");
                            $message = '<div>
                            <p><b>Hello!</b></p>
                            <p>One Time Password for EMAIL verification</p>
                            <br>
                            <p>Your OTP is: <b>'.$otp.'</b></p>
                            </div>';
                            $email = new PHPMailer;
                            $email->SetFrom('prince.thakarar40@gmail.com','VRS');
                            $email->AddAddress($mail);
                            $email->Subject = "Email Verification";
                            $email->MsgHTML($message);
                            $result = $email->Send();
                            if($email->send())
                            {
                              $insert_query = mysqli_query($db,"update user set is_expired='0', otp='$otp' where email='$mail'");
                              header('location:otp verification.php');
                            }
                            else
                            {
                                echo "<script>alert'email is not delivered';</script>";
                            }
                            // echo "<script>alert('You have Registered successfully...');</script>";
                            sleep(1);  
                            // header('Location: login.php');  
                        }
                        else
                            echo mysqli_error($db);
                        }

                    }
            else
                echo mysqli_error($db);
            mysqli_close($db);
        }   
    ?>
    <script>
        let input = document.querySelector(".lno");

        let i = true;

        input.onkeydown = function () {
            if (input.value.length > 0) {
                if (input.value.length % 4 == 0 && i == true) {
                    input.value += " ";
                    i = false;
                }
            }
        }

        // let otp = document.querySelector("#otp");

        // function toggle()
        // {
        //     otp.classList.remove('hide');
        // }
    </script>
</body>
</html>