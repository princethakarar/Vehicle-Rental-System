
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
      <input type="text" class="form-control" id="product_id" value="<?=$row1['Id']?>" hidden>
    </div>
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="p_name" value="<?=$row1['name']?>">
    </div>
    <div class="form-group">
      <label for="name">Brand:</label>
      <input type="text" class="form-control" id="p_brand" value="<?=$row1['brand']?>">
    </div>
    <div class="form-group">
      <label for="desc">Model:</label>
      <input type="text" class="form-control" id="p_model" value="<?=$row1['model']?>">
    </div>
    <div class="form-group">
      <label>Category:</label>
      <select id="category">
          <option value="hatchback">hatchback</option>
          <option value="sedan">Sedan</option>
          <option value="suv">SUVs/MUVs</option>
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
      <label for="desc">Color:</label>
      <input type="text" class="form-control" id="p_color" value="<?=$row1['color']?>">
    </div>
    <div class="form-group">
      <label for="desc">Safe:</label>
      <input type="text" class="form-control" id="p_safe" value="<?=$row1['safe']?>">
    </div>
    <div class="form-group">
      <label for="desc">Fuel:</label>
      <input type="text" class="form-control" id="p_fuel" value="<?=$row1['fuel']?>">
    </div>
    <div class="form-group">
      <label for="desc">Price:</label>
      <input type="text" class="form-control" id="p_price" value="<?=$row1['price']?>">
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