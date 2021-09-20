<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Management System</title>
    <link rel = "stylesheet" href = "style1.css">
</head>
<body>
     <div class="navigation">
        <ul>
            <li class="list active1">
                <a href="mainpage.html">
                    <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                    <span class="letter">HOME</span>
        </ul>
        <ul>
            <li class="list">
                <a href="transfer-Money.php">
                    <span class="icon"><ion-icon name="card-outline"></ion-icon></span>
                    <span class="letter">TRANSFER MONEY</span>
        </ul>
        
        <ul>
            <li class="list">
                <a href="contactus.html">
                    <span class="icon"><ion-icon name="people-outline"></ion-icon></span>
                    <span class="letter">CONTACT US</span>
        </ul>
    </div> 

     <h2 class="td1">CUSTOMER DETAILS</h2>
    <table class="customertable">
        <tr>
            <th>ID</th>
            <th>CUSTOMER NAME</th>
            <th>EMAIL ID</th>
            <th>BALANCE</th>
        </tr>
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

         </tr>";
     }
    // echo "Records Found";
}
else{
    echo "No records found";
}
      ?>
    </table>
 <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="myscript.js"></script>
</body>
</html>

