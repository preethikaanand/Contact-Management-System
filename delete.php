<?

session_start();
$user = 'root';
$password = 'root';
$db = 'contactlist';
$host = 'localhost';
$port = 8889;
$id = $_GET['contactidd'];
$conn = mysqli_connect( 
   $host, 
   $user, 
   $password, 
   $db,
   $port
);

if($conn)
{	
  $sql1 = "DELETE FROM date WHERE Contact_id=".$id;
  $sql2 = "DELETE FROM phone WHERE Contact_id=".$id;
  $sql3 = "DELETE FROM address WHERE Contact_id=".$id;
  $sql4 = "DELETE FROM contact WHERE contact_id=".$id;

  $result1 = mysqli_query($conn,$sql1);
  $result2 = mysqli_query($conn,$sql2);
  $result3 = mysqli_query($conn,$sql3);
  $result4 = mysqli_query($conn,$sql4);
}
else{
	echo "not connected";
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
	<div class="wrapper">
		<a href="contact.html" id="but" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Return to Home Page</a>
	</div>

</body>
</html>