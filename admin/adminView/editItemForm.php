
<div class="container p-5">

<h4>Edit Product Detail</h4>
<?php
    include_once "../config/dbconnect.php";
	$ID=$_POST['record'];
	$qry=mysqli_query($conn, "SELECT * FROM cars WHERE Id='$ID'");
	$numberOfRow=mysqli_num_rows($qry);
	if($numberOfRow>0){
		while($row1=mysqli_fetch_array($qry)){
?>
<form id="update-Items" onsubmit="updateItems()" enctype='multipart/form-data'>
	<div class="form-group">
      <input type="text" class="form-control" id="Id" value="<?=$row1['Id']?>" hidden>
    </div>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" value="<?=$row1['name']?>">
    </div>
    <div class="form-group">
      <label for="brand">Brand:</label>
      <input type="text" class="form-control" id="brand" value="<?=$row1['brand']?>">
    </div>
    <div class="form-group">
      <label for="model">Model:</label>
      <input type="number" class="form-control" id="model" value="<?=$row1['model']?>">
    </div>
    <div class="form-group">
      <label>Category:</label>
      <select id="category">
        <?php
          if($row1['category'] == "hatchback")
          {
            echo '
            <option value="hatchback" selected>Hatchback</option>
            <option value="sedan">Sedan</option>
            <option value="suv">SUVs/MUVs</option>';
          }
          elseif($row1['category'] == "sedan")
          {
            echo '
            <option value="hatchback">Hatchback</option>
            <option value="sedan" selected>Sedan</option>
            <option value="suv">SUVs/MUVs</option>';
          }
          elseif($row1['category'] == "suv")
          {
            echo '
            <option value="hatchback">Hatchback</option>
            <option value="sedan">Sedan</option>
            <option value="suv" selected>SUVs/MUVs</option>';
          }
        ?>
      </select>
    </div>
      <div class="form-group">
         <img width='200px' height='150px' src='../<?=$row1["path"]?>'>
         <div>
            <label for="file">Choose Image:</label>
            <input type="text" id="existingImage" class="form-control" value="<?=$row1['path']?>" hidden>
            <input type="file" id="newImage" value="">
         </div>
    </div>
    <div class="form-group">
      <label for="model">Color:</label>
      <input type="text" class="form-control" id="color" value="<?=$row1['color']?>">
    </div>
    <div class="form-group">
      <label for="safe">Safe:</label>
      <input type="text" class="form-control" id="safe" value="<?=$row1['safe']?>">
    </div>
    <div class="form-group">
      <label for="fuel">Fuel:</label>
      <input type="text" class="form-control" id="fuel" value="<?=$row1['fuel']?>">
    </div>
    <div class="form-group">
      <label for="price">price:</label>
      <input type="number" class="form-control" id="price" value="<?=$row1['price']?>">
    </div>
    <div class="form-group">
      <button type="submit" style="height:40px" class="btn btn-primary">Update Item</button>
    </div>
    <?php
    		}
    	}
    ?>
  </form>

    </div>