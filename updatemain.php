<?
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

$sql1 = "SELECT * FROM contact WHERE contact_id =".$id;
$sql2 = "SELECT * FROM address WHERE contact_id =".$id;
$sql3 = "SELECT * FROM phone WHERE contact_id =".$id;
$sql4 = "SELECT * FROM date WHERE contact_id =".$id;
$result1 = mysqli_query($conn,$sql1);
$result2 = mysqli_query($conn,$sql2);
$result3 = mysqli_query($conn,$sql3);
$result4 = mysqli_query($conn,$sql4);



if(mysqli_num_rows($result1)>0)
{
	

	$row1 = mysqli_fetch_array($result1);
	$fname = $row1['first_name'];
	$mname = $row1['middle_name'];
	$lname = $row1['last_name'];
	
while ($row2 = mysqli_fetch_array($result2))
{
  if($row2['Address_type'] == "Home")
  {
    
    ${'add_id1'} = $row2['Address_id'];
    ${'add_type1'} = $row2['Address_type'];
    ${'address1'} = $row2['Address'];
    ${'city1'} = $row2['City'];
    ${'state1'} = $row2['State'];
    ${'zip1'} = $row2['Zip'];
  }
  if($row2['Address_type'] == "Work")
  {
    
    ${'add_id2'} = $row2['Address_id'];
    ${'add_type2'} = $row2['Address_type'];
    ${'address2'} = $row2['Address'];
    ${'city2'} = $row2['City'];
    ${'state2'} = $row2['State'];
    ${'zip2'} = $row2['Zip'];
  }
  if($row2['Address_type'] == "Other")
  {
    ${'add_id3'} = $row2['Address_id'];
    ${'add_type3'} = $row2['Address_type'];
    ${'address3'} = $row2['Address'];
    ${'city3'} = $row2['City'];
    ${'state3'} = $row2['State'];
    ${'zip3'} = $row2['Zip'];
  }
 
}

  while ($row3 = mysqli_fetch_array($result3))
{
  if($row3['Phone_type'] == "Home")
  {
    ${'phone_id1'} = $row2['Phone_id'];
    ${'phone_type1'} = $row3['Phone_type'];
    ${'area_code1'} = $row3['Area_code'];
    ${'number1'} = $row3['Number'];
    
  }
  if($row3['Phone_type'] == "Work")
  {
    ${'phone_id2'} = $row2['Phone_id'];
    ${'phone_type2'} = $row3['Phone_type'];
    ${'area_code2'} = $row3['Area_code'];
    ${'number2'} = $row3['Number'];
  }
  if($row3['Phone_type'] == "Cell")
  {
    ${'phone_id3'} = $row2['Phone_id'];
    ${'phone_type3'} = $row3['Phone_type'];
    ${'area_code3'} = $row3['Area_code'];
    ${'number3'} = $row3['Number'];
  }
  if($row3['Phone_type'] == "Other")
  {
    ${'phone_id4'} = $row2['Phone_id'];
    ${'phone_type4'} = $row3['Phone_type'];
    ${'area_code4'} = $row3['Area_code'];
    ${'number4'} = $row3['Number'];
  }  
 
}


while ($row4 = mysqli_fetch_array($result4))
{

 
  if($row4['Date_type'] == "Birth date")
  {
    
    ${'datetype1'} = $row4['Date_type'];
    ${'date1'} = $row4['Date'];
    
  }
  if($row4['Date_type'] == "Anniversary date")
  {
    ${'datetype2'} = $row4['Date_type'];
    ${'date2'} = $row4['Date'];
    
  }


}


}
else
{
  echo "Something Went Wrong!";
	exit();
}

?>
<html>
    <head>
        <title>Update Record</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
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
        <div class="container">

            <div class="row">

                <div class="col-xl-18 offset-xl-2 py-5">

                    <!-- We're going to place the form here in the next step -->
                    <form id="contact-form" method="post" action="updatedata.php" role="form">


                    <div class="controls">

                        <div class="row">
                                
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname:</label>
                                        <input id="form_name" type="text" name="fname" class="form-control" value="<?php echo $fname?>">
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_middlename">Middlename:</label>
                                        <input id="form_middlename" type="text" name="mname" class="form-control" value="<?php echo $mname?>">
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname:</label>
                                        <input id="form_lastname" type="text" name="lname" class="form-control" value="<?php echo $lname?>" >
                                        
                                    </div>
                                </div>
                                <div class="col-md-6" style="visibility: hidden;">
                                    <div class="form-group">
                                        <label for="form_id">Contact ID:</label>
                                        <input id="form_id" type="number" name="cid" class="form-control" value="<?php echo $id?>">
                                    
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_addtype">Address Type:</label>
                                        <input id="form_lastname" type="text" name="addtype1" class="form-control" value="<?php echo $add_type1?>" >
                                                
                                        
                                    </div>
                                </div>
                                <div class="col-md-6" style="visibility: hidden;">
                                    <div class="form-group">
                                        <label for="form_id">Address ID:</label>
                                        <input id="form_id" type="number" name="addid1" class="form-control" value="<?php echo $add_id1?>">
                                    
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_addtype">Address:</label>
                                        <input id="form_lastname" type="text" name="add1" class="form-control" value="<?php echo $address1?>" >
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_addtype">City:</label>
                                        <input id="form_lastname" type="text" name="city1" class="form-control" value="<?php echo $city1?>">
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_addtype">State:</label>
                                        <input id="form_lastname" type="text" name="state1" class="form-control" value="<?php echo $state1?>" >
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_addtype">ZIP:</label>
                                        <input id="form_lastname" type="text" name="zip1" class="form-control" value="<?php echo $zip1?>" >
                                        
                                    </div>
                                </div>
                        </div>
                        <div class="row">
            
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_addtype">Address Type:</label>
                                <input id="form_lastname" type="text" name="addtype2" class="form-control" value="<?php echo $add_type2?>" >
                                
                                </div>
                             </div>
                             <div class="col-md-6" style="visibility: hidden;">
                                    <div class="form-group">
                                        <label for="form_id">Address ID:</label>
                                        <input id="form_id" type="number" name="addid2" class="form-control" value="<?php echo $add_id2?>">
                                    
                                    </div>
                                </div>
                        </div>
            
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_addtype">Address:</label>
                                <input id="form_lastname" type="text" name="add2" class="form-control" value="<?php echo $address2?>">
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_addtype">City:</label>
                                <input id="form_lastname" type="text" name="city2" class="form-control" value="<?php echo $city2?>">
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_addtype">State:</label>
                                <input id="form_lastname" type="text" name="state2" class="form-control" value="<?php echo $state2?>" >
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_addtype">ZIP:</label>
                                <input id="form_lastname" type="text" name="zip2" class="form-control" value="<?php echo $zip2?>" >
                                
                            </div>
                        </div>
    
            </div>

            <div id ="refdiv" class="col-md-12">
                <button class="addbutton"> Add/View Address</button>
                
            </div>
            <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_id">Phone Type: </label>
                            <input id="form_addtype" name="phonetype1" class="form-control" value="<?php echo $phone_type1?>">
                                    
                            
                        </div>
                     </div>   
                        <div class="col-md-6" style="visibility: hidden;">
                                    <div class="form-group">
                                        <label for="form_id">Phone ID:</label>
                                        <input id="form_id" type="number" name="phoneid1" class="form-control" value="<?php echo $phone_id1?>">
                                    
                                    </div>
                                </div>
                    
            </div>
             <div class="row">       
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Area Code :</label>
                            <input id="form_name" type="text" name="areacode1" class="form-control" value="<?php echo $are_code1?>">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_middlename">Number</label>
                            <input id="form_middlename" type="text" name="number1" class="form-control" value="<?php echo $number1?>">
                            
                        </div>
                    </div>
            
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_id">Phone Type: </label>
                    <input id="form_addtype" name="phonetype2" class="form-control" value="<?php echo $phone_type2?>">
                                   
                    
                </div>
             </div>   
              <div class="col-md-6" style="visibility: hidden;">
                                    <div class="form-group">
                                        <label for="form_id">Phone ID:</label>
                                        <input id="form_id" type="number" name="phoneid2" class="form-control" value="<?php echo $phone_id2?>">
                                    
                                    </div>
                                </div>
            </div>
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Area Code :</label>
                    <input id="form_name" type="text" name="areacode2" class="form-control" value="<?php echo $area_code2?>">
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_middlename">Number</label>
                    <input id="form_middlename" type="text" name="number2" class="form-control" value="<?php echo $number2?>">
                    
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_id">Phone Type: </label>
                    <input id="form_addtype" name="phonetype3" class="form-control" value="<?php echo $phone_type3?>">
                                   
                </div>
              </div>
                <div class="col-md-6" style="visibility: hidden;">
                                    <div class="form-group">
                                        <label for="form_id">Phone ID:</label>
                                        <input id="form_id" type="number" name="phoneid3" class="form-control" value="<?php echo $phone_id3?>">
                                    
                                    </div>
                                </div>
            </div>
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Area Code :</label>
                    <input id="form_name" type="text" name="areacode3" class="form-control" value="<?php echo $area_code3?>">
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_middlename">Number</label>
                    <input id="form_middlename" type="text" name="number3" class="form-control" value="<?php echo $number3?>">
                    
                </div>
            </div>
            
        </div>
        <div id ="refdiv2" class="col-md-12">
                <button class="addphonebutton"> Add/View Phone</button>
                
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_id">Date Type: </label>
                    <input id="form_addtype" name="datetype1" class="form-control" value="<?php echo $datetype1?>">
                                   
                    
                </div>
              </div>
                <div class="col-md-6" style="visibility: hidden;">
                                    <div class="form-group">
                                        <label for="form_id">Date ID:</label>
                                        <input id="form_id" type="number" name="dateid1" class="form-control" value="<?php echo $dateid1?>">
                                    
                                    </div>
                                </div>
            </div>
            <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Date</label>
                    <input type="date" id="form_name" name="date1" class="form-control" value="<?php echo $date1?>">
                    
                </div>
            </div>
          </div>
            <div id ="refdiv3" class="col-md-12">
                <button class="adddatebutton"> Add/View Date</button>
                
        </div>
            <div class="row">
                <div class="col-md-12">
                    </br></br>
                
                    <input style="margin-left: 40%;"type="submit" name="updatedata" value="Update Data">
                </div>
            </div>
    </div>

</form>

                </div>

            </div>

        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>        
        <script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
        <script src="contact.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
            var max_fields      = 2;
            var wrapper         = $("#refdiv");
            var wrapper2        = $('#refdiv2');
            var wrapper3        = $('#refdiv3');
            var add_button      = $(".addbutton");
            var add_phone_button = $(".addphonebutton");
            var add_date_button = $(".adddatebutton");
        var x = 1, y=1, z=1;
        $(add_button).click(function(e){
            e.preventDefault();
    
            if(x < max_fields){
                x++;
               
              $(wrapper).append('<div class="row"><div class="col-md-6"><div class="form-group"><label for="form_addtype">Address Type:</label>    <input id="form_lastname" type="text" name="addtype1" class="form-control" value="<?php echo $add_type3?>">                                     </div>   </div>   <div class="col-md-6" style="visibility: hidden;">        <div class="form-group">                                        <label for="form_id">Address ID:</label>                                        <input id="form_id" type="number" name="addid3" class="form-control" value="<?php echo $add_id3?>"></div>                                </div>                     </div>                        <div class="row">                                <div class="col-md-6">                                    <div class="form-group">                                        <label for="form_addtype">Address:</label>                                        <input id="form_lastname" type="text" name="add3" class="form-control" value="<?php echo $adddress3?>" ></div></div>                                <div class="col-md-6">                                    <div class="form-group">                                        <label for="form_addtype">City:</label>                                        <input id="form_lastname" type="text" name="city3" class="form-control" value="<?php echo $city3?>" >                                    </div>                                </div>                                <div class="col-md-6">                                    <div class="form-group">                                        <label for="form_addtype">State:</label>                                        <input id="form_lastname" type="text" name="state3" class="form-control" value="<?php echo $state3?>" >                                                                            </div>                                </div>                                <div class="col-md-6">                                    <div class="form-group">                                        <label for="form_addtype">ZIP:</label>                                        <input id="form_lastname" type="text" name="zip3" class="form-control" value="<?php echo $zip3?>" >                                                                            </div>                                </div>                        </div>');
              
            }
      else
      {
      alert('You can add only one extra address details')
      }
        });
        $(add_phone_button).click(function(e){
            e.preventDefault();
    
            if(y < max_fields){
                y++;
               
              $(wrapper2).append('<div class="row"><div class="col-md-6"><div class="form-group"><label for="form_id">Phone Type: </label><input id="form_addtype" name="phonetype4" class="form-control" value="<?php echo $phone_type4?>"></div></div> <div class="col-md-6" style="visibility: hidden;">                                    <div class="form-group">                                        <label for="form_id">Phone ID:</label>                                        <input id="form_id" type="number" name="phoneid4" class="form-control" value="<?php echo $phone_id4?>">      </div>                                </div>     </div>          <div class="row">        <div class="col-md-6">                <div class="form-group">                    <label for="form_name">Area Code :</label>                    <input id="form_name" type="text" name="areacode4" class="form-control" value="<?php echo $area_code4?>">                                    </div>            </div>            <div class="col-md-6">                <div class="form-group">                    <label for="form_middlename">Number</label>                    <input id="form_middlename" type="text" name="number4" class="form-control" value="<?php echo $number4?>">                                    </div>            </div>               </div>');
              
            }
      else
      {
      alert('You can add only one extra phone details')
      }
        });
        $(add_date_button).click(function(e){
            e.preventDefault();
    
            if(z < max_fields){
                z++;
               
              $(wrapper3).append('<div class="row"><div class="col-md-6"><div class="form-group">                    <label for="form_id">Date Type: </label>                    <input id="form_addtype" name="datetype2" class="form-control" value="<?php echo $datetype2?>">                                                                        </div> </div><div class="row"> <div class="col-md-6" style="visibility: hidden;">                                    <div class="form-group">                                        <label for="form_id">Date ID:</label>                                        <input id="form_id" type="number" name="dateid2" class="form-control" value="<?php echo $dateid2?>">                                 </div>                                </div>          </div>            <div class="col-md-6">                <div class="form-group">                    <label for="form_name">Date</label>                    <input type="date" id="form_name" name="date2" class="form-control" value="<?php echo $date2?>">                                    </div>            </div>         ');
              
            }
      else
      {
      alert('You can add only one extra phone details')
      }
        });
       
    });

            
        </script>
    </body>
</html>