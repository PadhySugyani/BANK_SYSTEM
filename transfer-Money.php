<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
    <link rel="stylesheet" href="style-2.css">
</head>
<body>

    <div class="table-container">
    
        <h2 class="heading">TRANSACTION</h2>
    <table class="customertable">
        <thead>
        <tr>
            <th>ID</th>
            <th>CUSTOMER NAME</th>
            <th>EMAIL ID</th>
            <th>BALANCE</th>
            <th>OPERATION</th>
        </tr>
        <thead>
        <?php

 include("connection.php");
 $query = "select * from customer_details";
 $data  = mysqli_query($conn, $query);
 $total = mysqli_num_rows($data);
 
 //  echo $total;

 if($total !=0){
     while ($final= mysqli_fetch_assoc($data)){
        echo "<tr>
         <td>".$final['ID']."</td>
         <td>".$final['CUSTOMER NAME']."</td>
         <td>".$final['EMAIL ID']."</td>
         <td>".$final['BALANCE']."</td>
         <td><a href='transaction.php? id=$final[ID]'><input type='submit' value='TRANSFER' class='btn1'></a></td> 

         </tr>";
     }
    // echo "Records Found";
}
else{
    echo "No records found";
}
      ?>
       <tr>
       <td colspan="5"><a href="customerdetails.php"><button class="btn2"><ion-icon name="arrow-back-circle"></ion-icon></button>
    </a></td></tr>
      </table>
      
      </div>
     
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 
</body>
</html>