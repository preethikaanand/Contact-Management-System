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
<table class="table table-striped"><tr><td>CONTACT_ID</td><td>FIRST NAME</td><td>MIDDLE NAME</td><td>LAST NAME</td><td>OPERATIONS</td></tr>
    <?php

session_start();
$id = $_GET['contactid'];
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

$trial = explode(" ", $id);
$pieces = explode(" ", $id);
$row_count=0;
foreach($pieces as $element)
{
  $query ="SELECT * from contact WHERE CONCAT_WS('|',`contact_id`,`first_name`,`middle_name`,`last_name`) LIKE '%" . $element . "%' OR contact_id IN (SELECT Contact_id FROM address WHERE CONCAT_WS('|',`Address`,`City`,`State`,`Zip`) LIKE '%" . $element . "%')
OR contact_id IN (SELECT Contact_id FROM date
WHERE CONCAT_WS('|',`Date_type`,`Date`)
LIKE '%" . $element . "%')
OR contact_id IN (SELECT Contact_id FROM phone
WHERE CONCAT_WS('|',`Phone_type`,`Area_code`, `Number`)
LIKE '%" . $element . "%')";
$rx = mysqli_query($conn,$query);
$row_count += mysqli_num_rows($rx);

while ($rw = mysqli_fetch_array($rx))
{
 echo "<tr><td>".$rw["contact_id"] . "</td><td>" .$rw['first_name']. "</td><td>" .$rw['middle_name']. "</td><td>" .$rw['last_name']. "</td><td><a href=updatemain.php?contactidd=".$rw["contact_id"].">  Update  </a><a href=delete.php?contactidd=".$rw["contact_id"].">  Delete  </a><a href=viewdata.php?contactidd=".$rw["contact_id"].">  View  </a></td></tr>"; 


}

}
echo "<h4> Number of Hits : ".$row_count. "</h3>";

?>
</table>
<div class="wrapper">
    <a href="contact.html" id="but" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Return to Home Page</a>
  </div>
</body>
</html>
