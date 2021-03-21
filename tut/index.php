<!DOCTYPE html>
<?php
    //connect to database
    include('config/connect.php');

    


?>


<html lang="en">
  <head>
    <!-- Required meta tags -->
    <title>Home page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <style>
        .row div{padding: 20px 10px;}
    </style>
  </head>
  <body style="background-color: rgb(253, 253, 253) ">
    <nav class="navbar  fixed-top navbar-toggleable-md navbar-light " style="background-color: #e3f2fd; ">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="#">SB</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <!-- <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> -->
              <form class="container-fluid justify-content-start">
                <a class="btn btn-outline-primary me-2 active" href="#"  role="button">Home<span class="sr-only">(current)</span></a>
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
                <a class="btn btn-outline-primary me-2" href="transactiondetails.php" role="button">Transaction History</a>
              </form>
            </li>
          </ul>
        </div>
      </nav>
    <div class="jumbotron jumbotron-fluid  text-white text-center" style="background: #303030">
        <div class="container">
            <h1 class="display-1">Spark Banking</h1>
            <p class="lead">India's most popular online banking system</p>
        </div>
    </div>
<!-- </br> -->
    <div class="container-fluid" >
        <div class="row "style='margin:0;padding:0'>
        <!-- <div class="container  float-left">  -->
        <div class="col-sm " style="padding-right: 30px;">
            <div class="image ">
                <img class="img-fluid"  src="bank-system-tile.png" alt="Responsive image" style="background-size: cover;background-repeat: no-repeat;background-attachment: fixed;" >
            </div>
        </div>
        
        <div class='col-sm' style="padding-top: 0;" >
            <div class="container container-fluid ">
            <h1 class="text left">ABOUT</h1>
            </div> 
            <div class = 'container text-center col-10' style="font-family: Arial, Helvetica, sans-serif;font-weight: 25px;padding-left:0;">
                <div class='py-2'>
                <p class="text left">Banks play an important role in the economy for offering a service for people wishing to save. Banks also play an important 
                role in offering finance to businesses who wish to invest and expand.  
                These loans and business investment are important for enabling economic growth.</p>
                </div> 
                     <div class=" py-3"  >
                            <p  ><strong>This  is the Spark banking website</strong>.Spark bank has the best banking system in india.
                            It is created by kotwal vishal.Here u can send money to all the customers out here.This website is created using</p> 
                     </div>
                        <div>
                            <ul class='text-left' style="list-style-position:inside;">
                                <li><strong>bootstrap</strong></li>
                                <li><strong>html</strong></li>
                                <li><strong>css</strong></li>
                                <li><strong>php</strong></li>
                            </ul>
                        </div>
                        <p class="text-left">In this website u can</p> 
                            <ul class="text-left"> 
                                <li><strong>Transfer money</strong></li>
                                <li><strong>check balance</strong></li>
                                <li><strong>u can also enquire the customers details</strong></li>
                            </ul>
                            <p class="text-left">To try this please move on to view my customers page. </p> 
            </div>
        </div>
    </div>
    </div>
                <div> 
        
            

                <h2 class="display-4"></h2>
            </div>
        <footer>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2021 Copyright:
                <a class="text-dark">Pirrat_angry</a>
              </div>
        </footer>
        <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>
</html>