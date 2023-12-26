
<div >
  <h2>Cars</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Image</th>
        <th class="text-center">Name</th>
        <th class="text-center">Model</th>
        <th class="text-center">Category</th>
        <th class="text-center">Color</th>
        <th class="text-center">Safe</th>
        <th class="text-center">fuel</th>
        <th class="text-center">Price</th>
        <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
    include_once '../config/dbconnect.php';
    $sql = 'SELECT * from cars';
    $result = $conn->query($sql);
    $count = 1;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) { ?>
    <tr>
      <td><?= $count ?></td>
      <td><img height='100px' src='../<?= $row['path'] ?>'></td>
      <td><?=$row['brand'], $row['name']?></td>
      <td><?= $row['model'] ?></td>      
      <td><?= $row['category'] ?></td> 
      <td><?= $row['color'] ?></td> 
      <td><?= $row['safe'] ?></td> 
      <td><?= $row['fuel'] ?></td> 
      <td><?= $row['price'] ?></td>     
      <td><button class="btn btn-primary" style="height:40px" onclick="itemEditForm('<?= $row[
          'Id'
      ] ?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="itemDelete('<?= $row[
          'Id'
      ] ?>')">Delete</button></td>
      </tr>
      <?php $count = $count + 1;}
    }
    ?>
  </table>

  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Product
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Product Item</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' onsubmit="addItems()" method="POST">
            <div class="form-group">
              <label for="name">Name:</label>
              <input type="text" class="form-control" id="p_name">
            </div>
            <div class="form-group">
              <label for="name">Brand:</label>
              <input type="text" class="form-control" id="p_brand">
            </div>
            <div class="form-group">
              <label for="desc">Model:</label>
              <input type="text" class="form-control" id="p_model">
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
                <label for="file">Choose Image:</label>
                <input type="file" class="form-control-file" id="file">
            </div>
            <div class="form-group">
              <label for="desc">Color:</label>
              <input type="text" class="form-control" id="p_color">
            </div>  
            <div class="form-group">
              <label for="desc">Safe:</label>
              <input type="text" class="form-control" id="p_safe">
            </div>
            <div class="form-group">
              <label for="desc">Fuel:</label>
              <input type="text" class="form-control" id="p_fuel">
            </div>
            <div class="form-group">
              <label for="desc">Price:</label>
              <input type="text" class="form-control" id="p_price">
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-secondary" id="upload" style="height:40px">Add Item</button>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   