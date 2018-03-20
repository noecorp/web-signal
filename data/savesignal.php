<?php
	//if user clicked the submit button.
	//read data from the form.

$sId = $_POST['hiddentId'];
$sEntry = $_POST['txtentry'];
$sTakeprofit = $_POST['txttp'];
$sStoploss = $_POST['txtsl'];
$sDate = $_POST['txtdate'];
$sCurrency = $_POST['txtcurrency'];
$sImg = $_FILES["btnpic"]["name"];

 // upload image to the server
    $target_dir = "../downloads/";
    $target_file = $target_dir . basename($_FILES["btnpic"]["name"]);

    // save image in upload directory
    move_uploaded_file($_FILES["btnpic"]["tmp_name"], $target_file);

include "../dbconfig.php";

$sql = "";

// if user clicked submit button, change sql to insert query
    if (isset($_POST['btnsubmit'])) {
        // submiting signals 
        //  php source code to EXECUTE INSERT INTO Query
      
		
		
		
		$sql = "INSERT INTO `forexsignal`.`signal` (`entry`, `takeprofit`, `stoploss`, `currencypair`, `date`, `marketpic`)"
			. "VALUES ('$sEntry', '$sTakeprofit', '$sStoploss', '$sCurrency', '$sDate', '$sImg');";
		
    }
    // if user clicked update button, change sql to update query
    if (isset($_POST['btnUpdate'])) {
        // register the user
        //  php source code to EXECUTE INSERT INTO Query
        $sql = "UPDATE `product` SET `prodName`='$prodName', `sellingPrice`='$price', `shippingPrice`='$shipping', `prodQty`='$qty', `prodImg`='$prodImg' WHERE `idproduct`=' $pid';";
    }

 if ($conn->query($sql) === TRUE) { // successfully added
        header("location: ../admin.php?success");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>

