<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- custom css file link  -->
    <link rel="stylesheet" href="assets/css/payment form.css">

</head>
<body>

<div class="container">

    <div class="card-container">

        <div class="front">
            <div class="image">
                <img src="images/chip.png" alt="">
                <img src="images/visa.png" alt="">
            </div>
            <div class="card-number-box">################</div>
            <div class="flexbox">
                <div class="box">
                    <span>card holder</span>
                    <div class="card-holder-name">full name</div>
                </div>
                <div class="box">
                    <span>expires</span>
                    <div class="expiration">
                        <span class="exp-month">mm</span>
                        <span class="exp-year">yy</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="back">
            <div class="stripe"></div>
            <div class="box">
                <span>cvv</span>
                <div class="cvv-box"></div>
                <img src="images/visa.png" alt="">
            </div>
        </div>

    </div>

    <form method="post">
        <div class="inputBox">
            <span>card number</span>
        </div>
        <div class="inputBox">

        </div>
        <div class="flexbox">
            <div class="inputBox">
                
            </div>
            <div class="inputBox">
                <span>expiration yy</span>

            </div>
            <div class="inputBox">

            </div>
        </div>
        <input type="submit" value="submit" class="submit-btn" name="sub">
    </form>

</div>    
    
<?php
    if (isset($_POST['sub'])) {
        include_once "admin/config/dbconnect.php"; 

        $card_num = $_POST['card_num'];
        $card_holder = $_POST['card_holder'];
        $expiration_month = $_POST['expiration_month'];
        $expiration_year = $_POST['expiration_year'];
        $cvv = $_POST['cvv'];

        // Prepared statement to prevent SQL injection
        $insert = mysqli_query($conn,"INSERT INTO payment_detail(card_num,card_holder,expiration_month, expiration_year,cvv) VALUES($card_num, '$card_holder', $expiration_month, $expiration_year, $cvv)");

        if (!$insert) {
            // Handle insert error
        } else {
            header('Location : index.php');
        }
    }
?>

<script>

document.querySelector('.card-number-input').oninput = () =>{
    document.querySelector('.card-number-box').innerText = document.querySelector('.card-number-input').value;
}

document.querySelector('.card-holder-input').oninput = () =>{
    document.querySelector('.card-holder-name').innerText = document.querySelector('.card-holder-input').value;
}

document.querySelector('.month-input').oninput = () =>{
    document.querySelector('.exp-month').innerText = document.querySelector('.month-input').value;
}

document.querySelector('.year-input').oninput = () =>{
    document.querySelector('.exp-year').innerText = document.querySelector('.year-input').value;
}

document.querySelector('.cvv-input').onmouseenter = () =>{
    document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(-180deg)';
    document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(0deg)';
}

document.querySelector('.cvv-input').onmouseleave = () =>{
    document.querySelector('.front').style.transform = 'perspective(1000px) rotateY(0deg)';
    document.querySelector('.back').style.transform = 'perspective(1000px) rotateY(180deg)';
}

document.querySelector('.cvv-input').oninput = () =>{
    document.querySelector('.cvv-box').innerText = document.querySelector('.cvv-input').value;
}

</script>







</body>
</html>