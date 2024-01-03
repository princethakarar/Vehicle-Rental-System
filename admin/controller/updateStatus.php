<?php

    include_once "../config/dbconnect.php";
   
    $order_id=$_POST['record'];
    //echo $order_id;
    $sql = "SELECT acc_den from orders where Id='$order_id'"; 
    $result=$conn-> query($sql);
  //  echo $result;

    $row=$result-> fetch_assoc();
    
   // echo $row["pay_status"];
    
    if($row["acc_den"]==0){
         $update = mysqli_query($conn,"UPDATE orders SET acc_den=1 where Id=$order_id");
    }
    else if($row["acc_den"]==1){
         $update = mysqli_query($conn,"UPDATE orders SET acc_den=-1 where Id=$order_id");
    }
    else if($row["acc_den"]==-1){
     $update = mysqli_query($conn,"UPDATE orders SET acc_den=0 where Id=$order_id");
}
    
        
 
    // if($update){
    //     echo"success";
    // }
    // else{
    //     echo"error";
    // }
    
?>