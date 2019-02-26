<?

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

$query = mysqli_query($conn,"SELECT max(contact_id) AS cid FROM contact");
$row = mysqli_fetch_array( $query );
$largestNumber = $row['cid'] + 1;

?>

    <html>
    <head>
        <title>Insert data</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
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
                    <form id="contact-form" method="post" action="insertdata.php" role="form">


                    <div class="controls">

                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_id">Contact ID:</label>
                                        <input id="form_id" type="number" name="cid" class="form-control" value="<?php echo $largestNumber?>">
                                    
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Firstname:</label>
                                        <input id="form_name" type="text" name="fname" class="form-control" placeholder="Please enter your firstname *" required="required"">
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_middlename">Middlename:</label>
                                        <input id="form_middlename" type="text" name="mname" class="form-control" placeholder="Please enter your middlename *">
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname:</label>
                                        <input id="form_lastname" type="text" name="lname" class="form-control" placeholder="Please enter your lastname *" >
                                        
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_addtype">Address Type:</label>
                                        <select id="form_addtype" name="addtype1" class="form-control">
                                            <option value=""></option>
                                            <option value="Home">Home</option>
                                            <option value="Work">Work</option>
                                            <option value="Other">Other</option>
                                        </select>
                                                
                                        
                                    </div>
                                </div>
                        </div>
                        <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_addtype">Address:</label>
                                        <input id="form_lastname" type="text" name="add1" class="form-control" placeholder="Please Address Type *" >
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_addtype">City:</label>
                                        <input id="form_lastname" type="text" name="city1" class="form-control" placeholder="Please enter city *" >
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_addtype">State:</label>
                                        <input id="form_lastname" type="text" name="state1" class="form-control" placeholder="Please enter state *" >
                                        
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_addtype">ZIP:</label>
                                        <input id="form_lastname" type="text" name="zip1" class="form-control" placeholder="Please enter ZIP code*" >
                                        
                                    </div>
                                </div>
                        </div>
                        <div class="row">
            
                            <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_addtype">Address Type:</label>
                                <select id="form_addtype" name="addtype2" class="form-control">
                                    <option value=""></option>
                                    <option value="Home">Home</option>
                                    <option value="Work">Work</option>
                                    <option value="Other">Other</option>
                                </select>
                                
                                </div>
                             </div>
                        </div>
            
                     <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_addtype">Address:</label>
                                <input id="form_lastname" type="text" name="add2" class="form-control" placeholder="Please enter address*" >
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_addtype">City:</label>
                                <input id="form_lastname" type="text" name="city2" class="form-control" placeholder="Please enter city *">
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_addtype">State:</label>
                                <input id="form_lastname" type="text" name="state2" class="form-control" placeholder="Please enter state *" >
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="form_addtype">ZIP:</label>
                                <input id="form_lastname" type="text" name="zip2" class="form-control" placeholder="Please enter ZIP code *" >
                                
                            </div>
                        </div>
    
            </div>

            <div id ="refdiv" class="col-md-12">
                <button class="addbutton"> Add New Address</button>
                
            </div>
            <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_id">Phone Type: </label>
                            <select id="form_addtype" name="phonetype1" class="form-control">
                                    <option value=""></option>
                                    <option value="Home">Home</option>
                                    <option value="Work">Work</option>
                                    <option value="Cell">Cell</option>
                                    <option value="Other">Other</option>
                                </select>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Area Code :</label>
                            <input id="form_name" type="text" name="areacode1" class="form-control" placeholder="Please enter Area Code *">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_middlename">Number</label>
                            <input id="form_middlename" type="text" name="number1" class="form-control" placeholder="Please enter the number*">
                            
                        </div>
                    </div>
            
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_id">Phone Type: </label>
                    <select id="form_addtype" name="phonetype2" class="form-control">
                                    <option value=""></option>
                                    <option value="Home">Home</option>
                                    <option value="Work">Work</option>
                                    <option value="Cell">Cell</option>
                                    <option value="Other">Other</option>
                                </select>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Area Code :</label>
                    <input id="form_name" type="text" name="areacode2" class="form-control" placeholder="Please enter Area Code *">
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_middlename">Number</label>
                    <input id="form_middlename" type="text" name="number2" class="form-control" placeholder="Please enter the number *">
                    
                </div>
            </div>
            
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_id">Phone Type: </label>
                    <select id="form_addtype" name="phonetype3" class="form-control">
                                    <option value=""></option>
                                    <option value="Home">Home</option>
                                    <option value="Work">Work</option>
                                    <option value="Cell">Cell</option>
                                    <option value="Other">Other</option>
                                </select>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Area Code :</label>
                    <input id="form_name" type="text" name="areacode3" class="form-control" placeholder="Please enter Area Code *">
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_middlename">Number</label>
                    <input id="form_middlename" type="text" name="number3" class="form-control" placeholder="Please enter the number *">
                    
                </div>
            </div>
            
        </div>
        <div id ="refdiv2" class="col-md-12">
                <button class="addphonebutton"> Add New Phone</button>
                
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_id">Date Type: </label>
                    <select id="form_addtype" name="datetype1" class="form-control">
                                    <option value=""></option>
                                    <option value="Birth date">Birth date</option>
                                    <option value="Anniversary date">Anniversary Date</option>
                                </select>
                    
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="form_name">Date</label>
                    <input type="date" id="form_name" name="date1" class="form-control" >
                    
                </div>
            </div>
          </div>
            <div id ="refdiv3" class="col-md-12">
                <button class="adddatebutton"> Add New Date</button>
                
        </div>
            <div class="row">
                <div class="col-md-12">
                    </br>
                
                    <input style="margin-left: 40%;" type="submit" name="insertdata" value="Insert New Data">
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
               
              $(wrapper).append('<div class="row"><div class="col-md-6"><div class="form-group"><label for="form_addtype">Address Type:</label>                                        <select id="form_addtype" name="addtype3" class="form-control">                                            <option value="Home">Home </option>                                            <option value="Work">Work</option>                                            <option value="Other">Other</option>                                        </select>         </div>                                </div>                        </div>                        <div class="row">                                <div class="col-md-6">                                    <div class="form-group">                                        <label for="form_addtype">Address:</label>                                        <input id="form_lastname" type="text" name="add3" class="form-control" placeholder="Please Address Type *" ></div></div>                                <div class="col-md-6">                                    <div class="form-group">                                        <label for="form_addtype">City:</label>                                        <input id="form_lastname" type="text" name="city3" class="form-control" placeholder="Please enter city *" >                                    </div>                                </div>                                <div class="col-md-6">                                    <div class="form-group">                                        <label for="form_addtype">State:</label>                                        <input id="form_lastname" type="text" name="state3" class="form-control" placeholder="Please enter state *" >                                                                            </div>                                </div>                                <div class="col-md-6">                                    <div class="form-group">                                        <label for="form_addtype">ZIP:</label>                                        <input id="form_lastname" type="text" name="zip3" class="form-control" placeholder="Please enter ZIP code*" >                                                                            </div>                                </div>                        </div>');
              
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
               
              $(wrapper2).append('<div class="row">           <div class="col-md-6">                <div class="form-group">                    <label for="form_id">Phone Type: </label>                    <select id="form_addtype" name="phonetype4" class="form-control">                                    <option value="Home">Home</option>                                    <option value="Work">Work</option>                                    <option value="Cell">Cell</option>                                    <option value="Other">Other</option>                                </select>                                    </div>            </div>            <div class="col-md-6">                <div class="form-group">                    <label for="form_name">Area Code :</label>                    <input id="form_name" type="text" name="areacode4" class="form-control" placeholder="Please enter Area Code *">                                    </div>            </div>            <div class="col-md-6">                <div class="form-group">                    <label for="form_middlename">Number</label>                    <input id="form_middlename" type="text" name="number4" class="form-control" placeholder="Please enter the number *">                                    </div>            </div>               </div>');
              
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
               
              $(wrapper3).append('<div class="row">            <div class="col-md-6">                <div class="form-group">                    <label for="form_id">Date Type: </label>                    <select id="form_addtype" name="datetype2" class="form-control">                                    <option value=""></option>                                    <option value="Birth date">Birth date</option>                                    <option value="Anniverdary date">Anniversary Date</option>                                </select>                                    </div>            </div>            <div class="col-md-6">                <div class="form-group">                    <label for="form_name">Date</label>                    <input type="date" id="form_name" name="date2" class="form-control" >                                    </div>            </div>         </div>');
              
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