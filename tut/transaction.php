<?php

    include('config/connect.php');

    //check Get request id parameter
    
    if(isset($_POST['submit'])){
        // echo htmlspecialchars($_POST['Name']);
        // echo htmlspecialchars($_POST['Amount']);
        $from = mysqli_real_escape_string($conn,$_POST['from']);
        $cust = mysqli_real_escape_string($conn,$_POST['Name']);
        $Amount = mysqli_real_escape_string($conn,$_POST['Amount']);
        

        $sql1 = "SELECT * FROM customers WHERE Name = '$from'";
        $result = mysqli_query($conn,$sql1);
        $account1 = mysqli_fetch_array($result);

        $sql2 = "SELECT * FROM customers WHERE Name = '$cust'";
        $result = mysqli_query($conn,$sql2);
        $account2 = mysqli_fetch_array($result);
        

        // mysqli_free_result($result1);
        // mysqli_free_result($result2);
        // mysqli_close($conn);

       
        // header('location: index.php');
        // print_r($account2); 
        if (($Amount)<0)
        {
             echo '<script type="text/javascript">';
             echo ' alert("Negative values ")';  // showing an alert box.
             echo '</script>';
         }

         else if($Amount > $account1['Amount']) 
         {
             
            ?>
            <script type="text/javascript">
            alert("ur balance is low");
            window.location.href = "viewcustomers.php";
            </script>
            <?php
             
         }
         else if($Amount == 0){
            ?>
            <script type="text/javascript">
            alert("Ur amount cant be 0");
            window.location.href = "viewcustomers.php";
            </script>
            <?php

        }
        
    else {
        
        // deducting amount from sender's account
        $from_update = $account1['Amount'] - $Amount;
        $from_id = $account1['id'];
        $sql = "UPDATE customers set Amount=$from_update where id=$from_id";
        mysqli_query($conn,$sql);
     

        // adding amount to reciever's account
        $to_update = $account2['Amount'] + $Amount;
        $to_id = $account2['id'];
        $sql = "UPDATE customers set Amount=$to_update where id=$to_id";
        mysqli_query($conn,$sql);
        
         $sender = $account1['Name'];
         $receiver = $account2['Name'];
         $sql = "INSERT INTO transactionhistory(`Sender`, `Receiver`, `Amount`) VALUES ('$sender','$receiver','$Amount')";
         $result= mysqli_query($conn,$sql);

        if($result){
            //  echo "<script> alert('Transaction Successful');
            //                  window.location='transactionhistory.php';
            //        </script>";
            ?>
            <script type="text/javascript">
            alert("Transaction succes");
            window.location.href = "transactiondetails.php";
            </script>
            <?php

            
        }

        $from_update= 0;
        $to_update=0;
        $Amount =0;
}

    }
    ?>