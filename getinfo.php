<div class="head">
    <h2>Car Details</h2>
    <button type="button" class="close" onclick="toggle()">&times;</button>
</div>
<?php
    include_once "admin/config/dbconnect.php";
	$ID=$_POST['record'];
    $qry=mysqli_query($conn, "SELECT * FROM cars WHERE Id='$ID'");
    $numberOfRow=mysqli_num_rows($qry);
    if($numberOfRow>0){
        while($row1=mysqli_fetch_array($qry)){
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
<form action="" onsubmit="addOrder()" method="post">
    <div class="form-group">
        <input type="text" id="Id" value="<?=$row1['Id']?>" hidden>
    </div>
    <div class="form-group">
        <input type="text" id="carName" value="<?=$row1['name']?>" hidden>
    </div>
    <div class="form-group">
        <input type="text" id="Brand" value="<?=$row1['brand']?>" hidden>
    </div>
    <div class="form-group">
        <input type="text" id="userName" value="<?=$_SESSION['username']?>" hidden>
    </div>
    <div class="form-group">
        <input type="number" id="price" value="<?=$row1['price']?>" hidden>
    </div>
    <div class="input-box">
        <span>Location</span>
        <input type="search" id="location" placeholder="Search Places" required>
    </div>
    <div class="input-box">
        <span>Pick up Date</span>
        <input type="date" id="pickDate" required>
    </div>
    <div class="input-box">
        <span>Return Date</span>
        <input type="date" id="returnDate" required>
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