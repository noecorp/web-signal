<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="css/login.css" rel="stylesheet" type="text/css">
</head>

<body>


<div class="container">
    <div class="row">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Login Admin Panel</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post" id="form2" name="form2" action="data/logindata.php">
                    <fieldset>
                    
                     	<div class="form-group">
			    		    <input class="form-control" placeholder="User Name" id="txtuser" name="txtuser" type="text"  >
			    		</div>
		    	  	
		    	  	<div class="form-group">
			    			<input class="form-control" placeholder="Password" id="pass" name="pass" type="password" value="">
			    		</div>
			    	  
			    		
			    
			    		<input id="btnsign" name="btnsign"  class="btn btn-lg btn-success btn-block" type="submit" value="Login">
			    	</fieldset>
			      	</form>
                      <hr/>
                    
			    </div>
			</div>
		</div>
	</div>
</div>


<?php 
	if(isset($_GET['error'])){
	?>
	
	
	<!--this is the way to write a html code in the middle of a php script-->
	
	<div class="container">
	<div class="row">
		<div class="alert-group">
            
            <div class="alert alert-danger alert-dismissable">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <strong>Oh snap!</strong> Check your username and password..
            </div>
        </div>
	</div>
</div>


	
	<?php	
	}
	?>
	

</fieldset>
</form>

</body>
</html>