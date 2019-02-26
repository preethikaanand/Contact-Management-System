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

$addresstype1 = $_POST['addtype1'];
$address1 = $_POST['add1'];
$city1 = $_POST['city1'];
$state1= $_POST['state1'];
$zip1 = $_POST['zip1'];

$addresstype2 = $_POST['addtype2'];
$address2 = $_POST['add2'];
$city2 = $_POST['city2'];
$state2= $_POST['state2'];
$zip2 = $_POST['zip2'];

$addresstype3 = $_POST['addtype3'];
$address3 = $_POST['add3'];
$city3 = $_POST['city3'];
$state3= $_POST['state3'];
$zip3 = $_POST['zip3'];
$date1 = $_POST['date1'];

$phonetype1 = $_POST['phonetype1'];
$areacode1 = $_POST['areacode1'];
$number1 = $_POST['number1'];

$phonetype2 = $_POST['phonetype2'];
$areacode2 = $_POST['areacode2'];
$number2 = $_POST['number2'];

$phonetype3 = $_POST['phonetype3'];
$areacode3 = $_POST['areacode3'];
$number3 = $_POST['number3'];

$phonetype4 = $_POST['phonetype4'];
$areacode4 = $_POST['areacode4'];
$number4 = $_POST['number4'];

$datetype1 = $_POST['datetype1'];
$date1 = $_POST['date1'];

$datetype2 = $_POST['datetype2'];
$date2 = $_POST['date2'];


$insert_contact = "INSERT INTO contact(contact_id,first_name,middle_name,last_name) VALUES ('$contactid','$fname','$mname','$lname')";
mysqli_query($conn,$insert_contact);

if($addresstype1)
{
	$insert_address = "INSERT INTO address(Contact_id,Address_type,Address,City,State,Zip) VALUES ('$contactid', '$addresstype1', '$address1', '$city1', '$state1', '$zip1')";
	mysqli_query($conn, $insert_address);
}
if($addresstype2)
{
	$insert_address = "INSERT INTO address(Contact_id,Address_type,Address,City,State,Zip) VALUES ('$contactid', '$addresstype2', '$address2', '$city2', '$state2', '$zip2')";
	mysqli_query($conn, $insert_address);
}
if($addresstype3)
{
	$insert_address = "INSERT INTO address(Contact_id,Address_type,Address,City,State,Zip) VALUES ('$contactid', '$addresstype3', '$address3', '$city3', '$state3', '$zip3')";
	mysqli_query($conn, $insert_address);
}

if($phonetype1)
{
	$insert_phone = "INSERT INTO phone(Contact_id,Phone_type,Area_code,Number) VALUES ('$contactid', '$phonetype1', '$areacode1', '$areacode1-$number1')";
	mysqli_query($conn, $insert_phone);	
}

if($phonetype2)
{
	$insert_phone = "INSERT INTO phone(Contact_id,Phone_type,Area_code,Number) VALUES ('$contactid', '$phonetype2', '$areacode2', '$areacode2-$number2')";
	mysqli_query($conn, $insert_phone);	
}

if($phonetype3)
{
	$insert_phone = "INSERT INTO phone(Contact_id,Phone_type,Area_code,Number) VALUES ('$contactid', '$phonetype3', '$areacode3', '$areacode3-$number3')";
	mysqli_query($conn, $insert_phone);	
}
if($phonetype4)
{
	$insert_phone = "INSERT INTO phone(Contact_id,Phone_type,Area_code,Number) VALUES ('$contactid', '$phonetype4', '$areacode4', '$areacode4-$number4')";
	mysqli_query($conn, $insert_phone);	
}

if($datetype1)
{
	$insert_date = "INSERT INTO date(Contact_id,Date_type,Date) VALUES ('$contactid', '$datetype1', '$date1')";
	mysqli_query($conn, $insert_date);	
}

if($datetype2)
{
	$insert_date = "INSERT INTO date(Contact_id,Date_type,Date) VALUES ('$contactid', '$datetype2', '$date2')";
	mysqli_query($conn, $insert_date);	
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
		<h3 style="text-align: center;">New record has been inserted</h3>
	</div>
	<div class="wrapper">
		<a href="contact.html" id="but" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Return to Home Page</a>
	</div>

</body>
</html>