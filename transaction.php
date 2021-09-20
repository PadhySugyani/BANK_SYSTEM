<?php
 include 'connection.php';

 if(isset($_POST['submit']))
 {
     $from = $_GET['id'];
     $to = $_POST['to'];
     $amount = $_POST['amount'];

     $sql = "SELECT * from customer_details where id=$from";
      $query = mysqli_query($conn,$sql);
      $sql1 = mysqli_fetch_array($query); 

      $sql = "SELECT * from customer_details where id=$to";
      $query = mysqli_query($conn,$sql)  or die(mysqli_error($conn));
      $sql2 = mysqli_fetch_array($query); 
	
     if (($amount)<0)
    {
         echo '<script type="text/javascript">';
         echo ' alert("Oops! Negative values cannot be transferred")';  
         echo '</script>';
   }

     else if($amount > $sql1['BALANCE']) 
     {

         echo '<script type="text/javascript">';
         echo ' alert("Bad Luck! Insufficient Balance")';
         echo '</script>';
     }
    else if($amount == 0){

          echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
          echo "</script>";
      }


     else {
                $newbalance = $sql1['BALANCE'] - $amount;
                $sql = "UPDATE customer_details set balance=$newbalance where id=$from";
                 mysqli_query($conn,$sql);



                 $newbalance = $sql2['BALANCE'] + $amount;
                 $sql = "UPDATE customer_details set balance=$newbalance where id=$to";
                 mysqli_query($conn,$sql);

                 if($sql)
                 {
                      echo '<script language="javascript"> alert("Transaction Successful")
                            </script>';
                }
                
                  $newbalance= 0;
                  $amount =0;
        
        }
 }
 ?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
    <link rel="stylesheet" href="style-3.css">
</head>
<body>

<?php
  include 'connection.php';
?>

	<div class="container">
        <div class= "icon">
    <a href ="transfer-money.php"><ion-icon name="arrow-back-circle"></ion-icon></a>
    <a href ="mainpage.html"><ion-icon name="home"></ion-icon></a></div>
        <h2>Pay</h2>
            <?php
                include 'connection.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  customer_details where id=$sid";
                $result=mysqli_query($conn,$sql);
            
                $rows=mysqli_fetch_array($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table">
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows['ID'] ?></td>
                    <td class="py-2"><?php echo $rows['CUSTOMER NAME'] ?></td>
                    <td class="py-2"><?php echo $rows['EMAIL ID'] ?></td>
                    <td class="py-2"><?php echo $rows['BALANCE'] ?></td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <label>Transfer To:</label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'connection.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM customer_details where id!=$sid";
                $result=mysqli_query($conn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($conn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['ID'];?>" >

                    <?php echo $rows['CUSTOMER NAME'] ;?> (Balance: 
                    <?php echo $rows['BALANCE'] ;?> ) 

                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
            <label>Amount:</label>
            <input type="number" class="form-control" name="amount" required>   
            <br><br>
             <div class="button" >
                <button class="btn" name="submit" type="submit" id="myBtn" >Transfer</button>
            </div>
            </form>
</div>
     <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script> 

</body>
</html>