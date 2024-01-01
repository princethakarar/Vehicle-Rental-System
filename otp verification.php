<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link rel="stylesheet" href="login$register.css">
</head>
<body>
    <div class="container">
    <form method="post">
        <h2 class="heading">OTP Verification<h2>
            <input type="text" placeholder="Enter OTP sent to your mail id" maxlength = "4" id="otp" name="otp" class="hide">
            <input type="submit" name="sb" value="Verify" class="btn">
        </form>
    </div>
    <?php
        include_once "admin/config/dbconnect.php";

        if(isset($_REQUEST['sb']))
        {
        $otp = $_REQUEST['otp'];
        $select_query = mysqli_query($connection,"select * from user where otp='$otp' and is_expired!=1 and NOW()<=DATE_ADD(create_at,interval 5 minute)");
        $count = mysqli_num_rows($select_query);
        if($count>0)
        {
            $select_query = mysqli_query($connection, "update user set is_expired=1 where otp='$otp'");
            header('location:login.php');
        }
        else
        {
            echo "<script>alert'invalid otp';</script>";
        }
        }
    ?>
</body>
</html>