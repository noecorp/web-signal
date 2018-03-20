<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  
  <title>Forex anlyzer</title>
  
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/style.css">
  
  <script src="js/prefixfree.min.js"></script>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<header>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#featured"><h1>Forex anlyser <span class="subhead">100% succes rate</span></h1></a>
      </div><!-- navbar-header -->
      <div class="collapse navbar-collapse" id="collapse">
        <ul class="nav navbar-nav navbar-right">
          <li ><a href="index.html">Home</a></li>
          <li><a href="index.html">Mission</a></li>
          <li><a href="index.html">Services</a></li>
          <li><a href="admin.php">Admin Panel</a></li>
          <li class="active"><a href="freesignal.php">freesignals</a></li>
          <li><a href="index.html">Trading Room</a></li>
        </ul>        
      </div><!-- collapse navbar-collapse -->
    </div><!-- container -->
  </nav>

  <!-- featured carousel -->
</header>

<div class="main">
  <div class="page" id="mission">
    <div class="content container">
		<h2><b>free signals</b></h2>      
      <div class="row">
        
       
              
              
               <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        
                        <small>You can use this signals in any mt4 platforms</small>
                    </h1>

                </section>

                <!-- Main content -->
                <section class="content">



                    <table class="table table-bordered table-hover table-striped">
                        <tr>
                            <th>Date</th>
                            <th>Currency</th>
                            <th>Entry</th>
                            <th>Order Type</th>
                            <th>Take profit</th>
                            
                            <th>Chart pics</th>
                        </tr>
                        <?php
                        // dbconfig.php file contains database connection codes
                        include 'dbconfig.php';
                        
						
						$sql = "SELECT date,currencypair,entry,takeprofit,stoploss,marketpic FROM forexsignal.`signal`;";
						
                        // execute the query and stores the 
                        //returned records in $result variable
                        $result = $conn->query($sql);
                        // checks whether result has one or more rows
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?php echo $row['date']  ?></td>
                                    <td><?php echo $row['currencypair']  ?></td>
                                    <td><?php echo $row['entry']  ?></td>
                                    
                                    <td><?php echo $row['stoploss']  ?></td>
                                    <td><?php echo $row['takeprofit']  ?></td>
                                    <td><?php echo $row['marketpic']  ?></td>
                                   
                                </tr>
                                <?php
                            }
                        } else {
                            echo "0 results";
                        }
                        ?>

                    </table>

                </section>
                <!-- /.content -->
            </div>
            <!-- /.content-wrapper --> 
        
        
        
      </div><!-- row -->
    </div><!-- content container -->
  </div><!-- mission page -->

  

<footer>
  <div class="content container-fluid">
    <div class="row">
      <div class="col-sm-6">
      <p>Call us toll-free at <span class="phone">888-547-4562</span></p>
        <p>All contents &copy; 2017 forexanlyzer.com . All rights reserved.</p>       
      </div><!-- col-sm-6 -->
      <div class="col-sm-6">
        <nav class="navbar navbar-default" role="navigation">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Terms of use</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </nav>        
      </div><!-- col-sm-6 -->
    </div><!-- row -->
  </div><!-- content container -->
</footer>

<script src="cdn/jqi.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="js/myscript.js"></script>


</body>
</html>
