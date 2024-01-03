<div id="ordersBtn" >
  <h2>Order Details</h2>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>O.N.</th>
        <th>Customer Name</th>
        <th>Car Name</th>
        <th>Brand</th>
        <th>Price</th>
        <th>Location</th>
        <th>PickUp Date</th>
        <th>return Date</th>
        <th>Accept OR Decline</th>
        <th>More Details</th>
     </tr>
    </thead>
     <?php
      include_once "../config/dbconnect.php";
      $sql="SELECT * from orders";
      $result=$conn-> query($sql);
      
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
       <tr>
          <td><?=$row["Id"]?></td>
          <td><?=$row["username"]?></td>
          <td><?=$row["carname"]?></td>
          <td><?=$row["brand"]?></td>
          <td><?=$row["price"]?></td>
          <td><?=$row["location"]?></td>
          <td><?=$row["pickdate"]?></td>
          <td><?=$row["returndate"]?></td>

           <?php 
                if($row["acc_den"]==-1){
                            
            ?>
                <td><button class="btn btn-danger" onclick="ChangeStatus('<?=$row['Id']?>')">Declined </button></td>
            <?php
                        
                }elseif($row["acc_den"]==0){
            ?>
                <td><button class="btn btn-primary" onclick="ChangeStatus('<?=$row['Id']?>')">Pending</button></td>
            <?php
                }else{
            ?>
                <td><button class="btn btn-success" onclick="ChangeStatus('<?=$row['Id']?>')">Accepted</button></td>
            <?php
                }
            ?>
              
        <td><a class="btn btn-primary openPopup" data-href="./adminView/viewEachOrder.php?id=<?=$row['Id']?>" href="javascript:void(0);">View</a></td>
        </tr>
    <?php
            
        }
      }
    ?>
     
  </table>
   
</div>
<!-- Modal -->
<div class="modal fade" id="viewModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">Order Details</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="order-view-modal modal-body">
        
        </div>
      </div><!--/ Modal content-->
    </div><!-- /Modal dialog-->
  </div>
<script>
     //for view order modal  
    $(document).ready(function(){
      $('.openPopup').on('click',function(){
        var dataURL = $(this).attr('data-href');
    
        $('.order-view-modal').load(dataURL,function(){
          $('#viewModal').modal({show:true});
        });
      });
    });
 </script>