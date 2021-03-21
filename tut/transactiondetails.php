<?php

    include('config/connect.php');


    //writing query for account_holders
    $sql = 'SELECT * FROM transactionhistory ' ;

    //make query & get result
    $result = mysqli_query($conn,$sql);

    //fetch the result rows ;
    $accouts = mysqli_fetch_all($result,MYSQLI_ASSOC);

    mysqli_free_result($result);

    //close connection
    mysqli_close($conn);

?>

<!DOCTYPE html>

<html>
<head>
    <!-- Required meta tags -->
    <title>History</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <style>
        .row div{padding: 20px 10px; border: 1px solid;}
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
                <a class="btn btn-outline-primary me-2" href="viewcustomers.php" role="button">View customers</a>
              </form>
            </li>
            <li class="nav-item">
              <!-- <a class="nav-link" href="transactiondetails.php">History</a> -->
              <form class="container-fluid justify-content-start">
                <a class="btn btn-outline-primary me-2 active" href="#" role="button">Transaction History</a>
              </form>
            </li>
          </ul>
        </div>
      </nav>
      <div class="jumbotron jumbotron-fluid text-white " style="background-color: #303030;">
        <div class="container-fluid text-left"> 
            <h1 class="display-9">History</h1> 
            <!-- <p class="lead">India's most popular online banking system</p> -->
         </div> 
    </div>

      <div class='container'>
        <div class = 'row'>
          </br>
          </br>
          </br>
          </br>
        </div>

    </div>
    <!-- <div class="container py-5">
        <div class = 'jumbotron'>
        <div class="card">
            <h5 class="card-header" style="text-align: center;">Succesfull Transactions</h5>
            <div class="card-body"> -->
                <table class="table table-dark table-hover table-bordered center"style="width: 70%;">
                <thead>
                    <tr>
                    <th scope="col">Sender</th>
                    <th scope="col">Receiver</th>
                    <th scope="col">Amount</th>
                    </tr>   
                </thead>
                <tbody>
                    <?php foreach($accouts as $accout){?>

                    <tr>
                        <td><?php echo htmlspecialchars($accout['Sender']);?></td>
                        <td><?php echo htmlspecialchars($accout['Receiver']);?></td>
                        <td><?php echo htmlspecialchars($accout['Amount']);?></td>
                    </tr>
                    <?php } ?>
                </tbody>
                </table>


            <!-- </div>
        </div>

        </div>

    </div> -->
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
</body>


</html>