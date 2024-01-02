<!-- <div class="head"> -->
    <h2>Car Details</h2>
    <button type="button" class="close" onclick="toggle()">&times;</button>
<!-- </div> -->
<?php
    include_once "admin/config/dbconnect.php";
	$ID=$_POST['record'];
    $qry=mysqli_query($conn, "SELECT * FROM cars WHERE Id='$ID'");
    $numberOfRow=mysqli_num_rows($qry);
    if($numberOfRow>0){
        while($row1=mysqli_fetch_array($qry)){
?>
<?php
    session_start();
?>
<div class="car">
    <img src="<?=$row1['path']?>" alt="<?=$row1['name']?>">
</div>
<div class="car-info">
    <p>Brand : <?=$row1['brand']?></p>
    <p>Name : <?=$row1['name']?></p>
    <p>Model : <?=$row1['model']?></p>
    <p>category : <?=$row1['category']?></p>
    <p>Color : <?=$row1['color']?></p>
    <p>Safe : <?=$row1['safe']?></p>
    <p>Fuel : <?=$row1['fuel']?></p>
    <p>Price : <?=$row1['price']?></p>
</div>

<h2 style="margin-top:20px;">Your Details</h2>
<form onsubmit="addOrder()" method="post">
    <div class="form-group">
        <input type="text" id="Id" value="<?=$row1['Id']?>" hidden>
    </div>
    <div class="form-group">
        <input type="text" id="carName" value="<?=$row1['name']?>" hidden>
    </div>
    <div class="form-group">
        <input type="text" id="path" value="<?=$row1['path']?>" hidden>
    </div>
    <div class="form-group">
        <input type="text" id="Brand" value="<?=$row1['brand']?>" hidden>
    </div>
    <div class="form-group">
        <input type="text" id="userName" value="<?=$_SESSION['name']?>" hidden>
    </div>
    <div class="form-group">
        <input type="number" id="price" value="<?=$row1['price']?>" hidden>
    </div>
    <div class="input-box">
        <span>Location</span>
        <select id="location" required>
            <option value="">--SELECT CITY--</option>
            <option value="Ahmedabad">Ahmedabad</option>
            <option value="Gandhinagar">Gandhinagar</option>
            <option value="Vadodra">Vadodra</option>
            <option value="Rajkot">Rajkot</option>
            <option value="Surat">Surat</option>
        </select>
    </div>
    <div class="input-box">
        <span>Address</span>
        <input type="textarea" id="address" placeholder="Enter Address" required>
    </div>
    <div class="input-box">
        <span>Pick up Date</span>
        <input type="date" id="pickDate" name="pickDate" required>
    </div>
    <div class="input-box">
        <span>Return Date</span>
        <input type="date" id="returnDate" required>
    </div>
    <h2 style="margin-top:20px;">Credit Card Details</h2>
    <div class="input-box">
        <span>Card Number</span>
        <input type="text" id="card_num" maxlength="20" placeholder="XXXX XXXX XXXX XXXX" class="card_num" required>
    </div>
    <div class="input-box">
        <span>Card Holder</span>
        <input type="text" id="card_hol" maxlength="30" placeholder="Card Holder Name" required>
    </div>
    <div class="input-box">
        <span>Expiration Month</span>
        <select id="expire_mo" required>
            <option value="Month" selected disabled>Month</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select>
    </div>
    <div class="input-box">
        <span>Expiration Year</span>
        <select id="expire_year" required>
            <option value="Year" selected disabled>Year</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2027</option>
            <option value="2028">2028</option>
            <option value="2029">2029</option>
            <option value="2030">2030</option>
        </select>
    </div>
    <div class="input-box">
        <span>CVV</span>
        <input type="password" id="cvv" maxlength="4" placeholder="XXXX" required>
    </div>
    <div style="display: flex; margin-top: 10px;">
        <input type="checkbox" style="margin-right: 5px;" required>
        <p>I have read and agree <a href="Terms and Conditions.pdf" target="_blank" style="background: transparent; color: blue; border: none; text-decoration: underline;">Terms & Conditions</a></p>
    </div>
    <input type="submit" class="btn" value="Book Now">
</form>
<?php
        }
    }
    else{
        echo "no row found";
    }
?>
    <script>
        let input = document.querySelector(".card_num");

        let i = true;

        input.onkeydown = function () {
            if (input.value.length > 0) {
                if (input.value.length % 4 == 0 && i == true) {
                    input.value += " ";
                    i = false;
                }
                if (input.value.length % 5 == 0 && i == false) {
                    input.value += " ";
                }
            }
        }
    </script>