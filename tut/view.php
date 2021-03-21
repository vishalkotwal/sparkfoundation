
 <?php
    
    include('config/connect.php');

        if(isset($_GET['id'])){

        $id = mysqli_real_escape_string($conn,$_GET['id']);

        //make sql

        $sql = "SELECT * FROM customers WHERE id = '$id'";
        

        //get the query result

        $result = mysqli_query($conn,$sql);
        
        // fecth result in array format

        $account = mysqli_fetch_assoc($result);
        

        mysqli_free_result($result);
        mysqli_close($conn);
    }

?>

<!DOCTYPE html>
<html>
    <head>
    <title>Customer details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <!-- Bootstrap CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    
    <style type="text/css">
      
      .row div{padding: 20px 10px;}
        body {
            line-height: 1.5;
            font-size: 1.6rem;
            font-family: 'Lato', sans-serif;
            background-color: #48D1CC;
        }
        tr {
            padding-bottom: 10px;
            color: #ffffff;
        }
         table{
          background-color: #303030; 
          text-decoration: white;
          align-self: center;
        }
        th{
          color:  #ffffff;
        }
        /* tbody.td{
          color: #ffffff;
        } */
          .center{
          margin-left: auto;
          margin-right: auto;
        }  
         .jumbotron{
          padding-top: 70px;
          padding-bottom: 20px;
          border-radius: 10px; 
          
        }
        .jumbo{
          position: absolute;
          border-radius: 10px;
        }
        /* .form-container{
          border-radius: 0;
          box-shadow: none;
          -webkit-box-shadow:none;
        } */
        /* .form-control{
          border-radius: 0;
          box-shadow: none;
        }

        .form-text{
          border-radius: 0;
          box-shadow: none;
          -webkit-box-shadow:none;
        } */
        /* .row{
          box-shadow: none;
        }
        .form-container{
          background: #fff;
          padding: 30px;
          border-radius: 10px;
          box-shadow: 0px 0px 10px 0px #000;
          outline: 0;
        }
        /* .form-group:focus{
          box-shadow: none;
          border-radius: 0;
          -webkit-box-shadow:none;
        } */
        /* input[type="text"] :focus {
          border: 1px solid #cccccc;
          border-radius: 8px;
          transition: none;
          outline: none;
        } */ 
        #conti{
          /* background: #fff;  */
          padding: 30px;
          border-radius: 10px;
          box-shadow: 0px 0px 10px 0px #000;
          outline: 0;
        }
     
    </style>

    </head>

    <body>
    <nav class="navbar fixed-top navbar-toggleable-md navbar-light " style="background-color: #e3f2fd; ">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">SB</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
              <form class="container-fluid justify-content-start">
                <a class="btn btn-outline-primary me-2 " href="index.php"  role="button">Home<span class="sr-only">(current)</span></a>
              </form>
            </li>
            <li class="nav-item bg-light">
              <form class="container-fluid justify-content-start">
                <a class="btn btn-outline-primary me-2 " href="viewcustomers.php" role="button">View customers</a>
              </form>
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link" href="transactiondetails.php">History</a> -->
              <form class="container-fluid justify-content-start">
                <a class="btn btn-outline-primary me-2" href="transactiondetails.php" role="button">Transaction History</a>
              </form>
            </li>
          </ul>
        </div>
</nav>
<div class="jumbotron jumbotron-fluid  text-white " style="background-color: #303030;">
        <div class="container-fluid text-left"> 
            <h1 class="display-9">Cutomers details</h1> 
            <!-- <p class="lead">India's most popular online banking system</p> -->
         </div> 
    </div>
    
    <div class='container'>
        <div class = 'row'>
          </br>
          </br>
          </br>
        </div>

    </div>
<!-- 
    <div class="container">
        <div class = 'jumbotron'>
        <div class="card">
            <h5 class="card-header">View customers</h5>
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5> -->

                <table class="table table-dark table-hover table-bordered">
                <thead>
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Amount</th>
                    </tr>   
                </thead>
                <tbody>
                    <?php if($account):?>
                        <tr>
                        <th><?php echo htmlspecialchars($account['id']);?></th>
                        <td><?php echo htmlspecialchars($account['Name']);?></td>
                        <td><?php echo htmlspecialchars($account['Email']);?></td>
                        <td><?php echo htmlspecialchars($account['Amount']);?></td>
                    </tr>

                    <?php else: ?>

                        <h5>No account exists</h5>
                    
                    <?php endif; ?>

                    
                </tbody>
                </table>


            <!-- </div>
        </div>

        </div>

    </div> -->
    <div class='container'>
        <!-- <div class = 'row'> -->
          </br>
          </br>
          </br>
        </div>

    </div>

    <!--transaction-->

  <section id ='conti' class='container-fluid  col-sm-6 col-md-4' style="background-color: #303030;">
      <section class='row justify-content-center py-4'>
        <section class = 'col-12 col-sm-6 col-md-9'>
        <div class = 'card-header bg-primary text-white text-center'>
            <h1 >Send money?</h1>
            <p class='lead'>Enter the details to send </p>
            </div>
       <form class="form-container " action='transaction.php' method="POST">
                  <div class="form-group" >
                    <label  class="form-text text-white">From:</label>
                    <input type = 'text' class="form-control" name = 'from'  value = <?php echo $account['Name']?>>
                  </div>
                  <div>
                    <input type='text' class= 'form-control' name ='Name' placeholder="To">
                  </div>
                  <div>
                    <input type='text' class= 'form-control' name ='Amount' placeholder="Amount" >
                  </div>

                  <div class='button'>
                        <input type="submit" name="submit" value="submit" class="btn primary btn-block btn btn-danger"  >
                  </div>
                </form>
        </section>
      </section>

 

    </body>




</html>