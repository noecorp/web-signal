<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>admin panel</title>
  
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/style.css">
  
  <script src="js/prefixfree.min.js"></script>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>

<?php 
	session_start();
	
	if(!isset($_SESSION['UNAME'])){
		header("location: login.php");
	}
?>



 
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
        <a class="navbar-brand" href="#featured"><h1>Admin Panel <span class="subhead"> post your signals here</span></h1></a>
      </div><!-- navbar-header -->
      <div class="collapse navbar-collapse" id="collapse">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.html">Home</a></li>
          <li><a href="index.html">Mission</a></li>
          <li><a href="index.html">Services</a></li>
          <li class="active"><a href="admin.php">Admin Panel</a></li>
          <li><a href="index.html">Trading Room</a></li>
          <li><a href="freesignal.php">Free Signals</a></li>
        </ul>        
      </div><!-- collapse navbar-collapse -->
    </div><!-- container -->
  </nav>

  <!-- featured carousel -->
</header>

<div class="main">
  <!-- mission page -->

  <!-- services page -->

  <div class="page" id="staff">
    <div class="container-fluid">
      <h2 id="ourstaff">ADMIN PANEL</h2>
      <div class="row">

        <div class="doctor col-lg-6">
          <div class="row">
            <div class="photo col-xs-6 col-xs-offset-3 col-sm-3 col-sm-offset-1 col-md-2 col-md-offset-2 col-lg-4 col-lg-offset-0">
              <img class="img-circle" src="images/round01.jpg" alt="Photo of Dr Sanders">
            </div><!-- photo -->
            <div class="info col-xs-8 col-xs-offset-2 col-sm-7 col-sm-offset-0 col-md-6 col-lg-8">
              <h3>POST YOUR FX SIGNALS</h3>
              <p>This is the admin panel. if you have got a new signal.you should post it here, please don't left any data cage empty., </p>
            </div><!-- info -->
          </div> <!-- inner row -->
        </div> <!-- doctor -->

         <div class="doctor col-lg-6">
          <div class="row">
            <div class="photo col-xs-6 col-xs-offset-3 col-sm-3 col-sm-offset-1 col-md-2 col-md-offset-2 col-lg-4 col-lg-offset-0">
              <img class="img-circle" src="images/round02.jpeg" alt="Photo of Dr Sanders">
            </div><!-- photo -->
            <div class="info col-xs-8 col-xs-offset-2 col-sm-7 col-sm-offset-0 col-md-6 col-lg-8">
              <h3>follow these instructions!</h3>
              <p>This is the admin panel. if you have got a new signal.you should post it here, please don't left any data cage empty., </p>
            </div><!-- info -->
          </div> <!-- inner row -->
        </div>

      


      </div><!-- outer row -->
    </div><!-- container -->
  </div><!-- staff page -->

  <!-- testimonials page -->
  
  <!--data input-->
  <form class="form-horizontal" id="formsignal" name="formsignal" method="post" action="data/savesignal.php" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->
<legend>Enter your anlyze here.,,</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtentry">Entry</label>  
  <div class="col-md-4">
  <input id="txtentry" name="txtentry" type="text" placeholder="0.00001" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtsl">Order Type</label>  
  <div class="col-md-4">
  <input id="txtsl" name="txtsl" type="text" placeholder="Sell/Buy" class="form-control input-md">
    
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txttp">Take Profit</label>  
  <div class="col-md-4">
  <input id="txttp" name="txttp" type="text" placeholder="0.00001" class="form-control input-md">
    
  </div>
</div>




<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtcurrency">Currency Pair</label>  
  <div class="col-md-4">
  <input id="txtcurrency" name="txtcurrency" type="text" placeholder="eur/usd" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtdate">Date</label>  
  <div class="col-md-4">
  <input id="txtdate" name="txtdate" type="text" placeholder="01/01/2017" class="form-control input-md">
    
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="btnpic">Market pic</label>
  <div class="col-md-4">
    <input id="btnpic" name="btnpic" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="btnsubmit"></label>
  <div class="col-md-4">
    <button id="btnsubmit" name="btnsubmit" class="btn btn-success">Submit</button>
  </div>
</div>

<?php
        // if url has a parameter success
         if (isset($_GET['success'])) {
	?>   
          <div class="alert alert-success">Signal Submitted Successfully..</div>
  <?php 
		 }
    ?>

</fieldset>
</form>
<!--end of the data input-->


</div><!-- main -->

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
