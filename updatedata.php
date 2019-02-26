
<?

session_start();

$user = 'root';
$password = 'root';
$db = 'contactlist';
$host = 'localhost';
$port = 8889;

$conn = mysqli_connect( 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);
$contactid = $_POST['cid'];

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];

$addid1 = $_POST['addid1'];
$addresstype1 = $_POST['addtype1'];
$address1 = $_POST['add1'];
$city1 = $_POST['city1'];
$state1= $_POST['state1'];
$zip1 = $_POST['zip1'];

$addid2 = $_POST['addid2'];
$addresstype2 = $_POST['addtype2'];
$address2 = $_POST['add2'];
$city2 = $_POST['city2'];
$state2= $_POST['state2'];
$zip2 = $_POST['zip2'];

$addid3 = $_POST['addid3'];
$addresstype3 = $_POST['addtype3'];
$address3 = $_POST['add3'];
$city3 = $_POST['city3'];
$state3= $_POST['state3'];
$zip3 = $_POST['zip3'];


$phoneid1 = $_POST['phoneid1'];
$phonetype1 = $_POST['phonetype1'];
$areacode1 = $_POST['areacode1'];
$number1 = $_POST['number1'];

$phoneid2 = $_POST['phoneid2'];
$phonetype2 = $_POST['phonetype2'];
$areacode2 = $_POST['areacode2'];
$number2 = $_POST['number2'];

$phoneid3 = $_POST['phoneid3'];
$phonetype3 = $_POST['phonetype3'];
$areacode3 = $_POST['areacode3'];
$number3 = $_POST['number3'];

$phoneid4 = $_POST['phoneid4'];
$phonetype4 = $_POST['phonetype4'];
$areacode4 = $_POST['areacode4'];
$number4 = $_POST['number4'];

$dateid1 = $_POST['dateid1'];
$datetype1 = $_POST['datetype1'];
$date1 = $_POST['date1'];

$dateid2 = $_POST['dateid2'];
$datetype2 = $_POST['datetype2'];
$date2 = $_POST['date2'];


$sql="UPDATE contact SET first_name = '$fname', middle_name = '$mname', last_name = '$lname' WHERE contact_id = '$contactid'";
 mysqli_query($conn,$sql);

if($addresstype1)
{
	if(empty($addid1))
	{
		$insert_address = "INSERT INTO address(Contact_id,Address_type,Address,City,State,Zip) VALUES ('$contactid', '$addresstype1', '$address1', '$city1', '$state1', '$zip1')";
		mysqli_query($conn, $insert_address);
	}
	else
	{
		$update_address = "UPDATE address SET Address_type = '$addresstype1',Address = '$address1',City = '$city1',State ='$state1',Zip = '$zip1' WHERE Contact_id = '$contactid' AND Address_id= '$addid1'";
		mysqli_query($conn, $update_address);
	}	
	if(empty($address1) && empty($city1) && empty($state1) && empty($zip1))
	{
		$delete_address = "DELETE FROM address WHERE Address_id = '$addid1'";
		
		mysqli_query($conn, $delete_address);
	}
}
if($addresstype2)
{
	
	if(empty($addid2))
	{
		$insert_address = "INSERT INTO address(Contact_id,Address_type,Address,City,State,Zip) VALUES ('$contactid', '$addresstype2', '$address2', '$city2', '$state2', '$zip2')";
		mysqli_query($conn, $insert_address);
	}
	else
	{
		$update_address = "UPDATE address SET Address_type = '$addresstype2',Address = '$address2',City = '$city2',State ='$state2',Zip = '$zip2' WHERE Contact_id = '$contactid' AND Address_id= '$addid2'";
		mysqli_query($conn, $update_address);
	}
	if(empty($address2) && empty($city2) && empty($state2) && empty($zip2))
	{
		$delete_address = "DELETE FROM address WHERE Address_id = '$addid2'";
		
		mysqli_query($conn, $delete_address);
	}
	
}
if($addresstype3)
{
	
	if(empty($addid3))
	{
		$insert_address = "INSERT INTO address(Contact_id,Address_type,Address,City,State,Zip) VALUES ('$contactid', '$addresstype3', '$address3', '$city3', '$state3', '$zip3')";
		mysqli_query($conn, $insert_address);
	}
	else
	{
		$update_address = "UPDATE address SET Address_type = '$addresstype3',Address = '$address3',City = '$city3',State ='$state3',Zip = '$zip3' WHERE Contact_id = '$contactid' AND Address_id= '$addid3'";
		mysqli_query($conn, $update_address);
	}
	if(empty($address3) && empty($city3) && empty($state3) && empty($zip3))
	{
		$delete_address = "DELETE FROM address WHERE Address_id = '$addid3'";
		
		mysqli_query($conn, $delete_address);
	}
}

if($phonetype1)
{
	if(empty($phoneid1))
	{
		$insert_phone = "INSERT INTO phone(Contact_id,Phone_type,Area_code,Number) VALUES ('$contactid', '$phonetype1', '$areacode1', '$number1')";
		mysqli_query($conn, $insert_phone);	
	}
	else
	{
	$update_phone = "UPDATE phone SET Phone_type='$phonetype1',Area_code='$areacode1' ,Number='$number1' WHERE Contact_id = '$contactid' AND Phone_id ='$phoneid1'";
	mysqli_query($conn, $update_phone);
	}	
	if(empty($areacode1) && empty($number1))
	{
		$delete_phone = "DELETE FROM phone WHERE Phone_id = '$phoneid1'";
		
		mysqli_query($conn, $delete_phone);
	}
}

if($phonetype2)
{
	if(empty($phoneid2))
	{
		$insert_phone = "INSERT INTO phone(Contact_id,Phone_type,Area_code,Number) VALUES ('$contactid', '$phonetype2', '$areacode2', '$number2')";
		mysqli_query($conn, $insert_phone);	
	}
	else
	{
	$update_phone = "UPDATE phone SET Phone_type='$phonetype2',Area_code='$areacode2' ,Number='$number2' WHERE Contact_id = '$contactid' AND Phone_id ='$phoneid2'";
	mysqli_query($conn, $update_phone);
	}	
	if(empty($areacode2) && empty($number2))
	{
		$delete_phone = "DELETE FROM phone WHERE Phone_id = '$phoneid2'";
		
		mysqli_query($conn, $delete_phone);
	}
}

if($phonetype3)
{
	if(empty($phoneid3))
	{
		$insert_phone = "INSERT INTO phone(Contact_id,Phone_type,Area_code,Number) VALUES ('$contactid', '$phonetype3', '$areacode3', '$number3')";
		mysqli_query($conn, $insert_phone);	
	}
	else
	{
	$update_phone = "UPDATE phone SET Phone_type='$phonetype3',Area_code='$areacode3' ,Number='$number3' WHERE Contact_id = '$contactid' AND Phone_id ='$phoneid3'";
	mysqli_query($conn, $update_phone);
	}	
	if(empty($areacode3) && empty($number3))
	{
		$delete_phone = "DELETE FROM phone WHERE Phone_id = '$phoneid3'";
		
		mysqli_query($conn, $delete_phone);
	}
}

if($phonetype4)
{
	if(empty($phoneid4))
	{
		$insert_phone = "INSERT INTO phone(Contact_id,Phone_type,Area_code,Number) VALUES ('$contactid', '$phonetype4', '$areacode4', '$number4')";
		mysqli_query($conn, $insert_phone);	
	}
	else
	{
	$update_phone = "UPDATE phone SET Phone_type='$phonetype4',Area_code='$areacode4' ,Number='$number4' WHERE Contact_id = '$contactid' AND Phone_id ='$phoneid4'";
	mysqli_query($conn, $update_phone);
	}	
	if(empty($areacode4) && empty($number4))
	{
		$delete_phone = "DELETE FROM phone WHERE Phone_id = '$phoneid4'";
		
		mysqli_query($conn, $delete_phone);
	}
}


if($datetype1)
 {
 	if(empty($dateid1))
 	{
 		$insert_date = "INSERT INTO date(Contact_id,Date_type,Date) VALUES ('$contactid', '$datetype1', '$date1')";
	mysqli_query($conn, $insert_date);	
 	}
 	else
 	{
 		$update_date = "UPDATE date SET Date_type='$datetype1', Date='$date1' WHERE Contact_id = '$contactid' AND Date_id='$dateid1'";
 		mysqli_query($conn, $update_date);
 	}	
 	if(empty($date1))
	{
		$delete_date = "DELETE FROM date WHERE Date_id = '$dateid1'";
		
		mysqli_query($conn, $delete_date);
	}
 }

if($datetype2)
 {
 	if(empty($dateid2))
 	{
 		$insert_date = "INSERT INTO date(Contact_id,Date_type,Date) VALUES ('$contactid', '$datetype2', '$date2')";
	mysqli_query($conn, $insert_date);	
 	}
 	else
 	{
 		$update_date = "UPDATE date SET Date_type='$datetype2', Date='$date2' WHERE Contact_id = '$contactid' AND Date_id='$dateid2'";
 		mysqli_query($conn, $update_date);
 	}	
 	if(empty($date2))
	{
		$delete_date = "DELETE FROM date WHERE Date_id = '$dateid2'";
		
		mysqli_query($conn, $delete_date);
	}
 }




?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
  	.wrapper {
    text-align: center;
}

#but {
	top: 500%;
    margin: auto;
    display:block;
}
  </style>
</head>
<body>
	<div>
		<h3 style="text-align: center;">Record has been updated</h3>
	</div>
	<div class="wrapper">
		<a href="contact.html" id="but" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Return to Home Page</a>
	</div>

</body>
</html>