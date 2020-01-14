<html>
    <head>


<link href="css/sty2.css" rel="stylesheet" type="text/css" >
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="css/sty1.css" rel="stylesheet" type="text/css" >
<!-- bootstrap -->
<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">

<!-- added styles from home page -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/fixed.css">
<link href="fontawesome-free-5.12.0-web/css/all.css" rel="stylesheet">



<!-- added styles from login page -->
<title> login </title>
    <link rel="stylesheet" href="Style_4.css">
<link rel="stylesheet" href="css/Style_4.css">

    </head>
   
<body>





<?php

  $servername="localhost";
  $susername="root";
  $spassword="";
  $sdbname="nsbmedge";

  $db = mysqli_connect("$servername", "$susername","$spassword", "$sdbname");


  if($db)
  {
    echo"db connected";
  }



  error_reporting("0");

	
  if(isset($_POST['submit'])){
  
  
    //Get text
    $first_name= $_POST['first_name'];
    $last_name= $_POST['last_name'];
    $email= $_POST['email'];
    $psw= $_POST['psw'];
    $psw_repeat= $_POST['psw_repeat'];
    
  
    echo "$first_name";
    //insert query
  
    
    $sql = "INSERT INTO logininfo(first_name,last_name,email,pwd) values ('$first_name','$last_name','$email','$psw')";
  
    
    //excute query
  
    
    mysqli_query($db,$sql);
  
    
    if($move)
  
    
    {
  
    
      echo "Request Successful please log in";
  
    
    }else{
  
    
      echo "Failed";
  
    
    }
  
    
  }
  


?>





    <div class="login-box">

<form action="signup.php" method="POST">

<div class="container">
<div class="row">

<input type="text" placeholder="Enter Your First Name" name="first_name" required>

<input type="text" placeholder="Enter Your Last Name" name="last_name" required>

<input type="email" placeholder="Enter Your Email" name="email" required>


<input type="password" placeholder="Enter Your Password" name="psw" required>


<input type="password" placeholder="Repeat Your Password" name="psw_repeat" required>
<hr>
<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

<button type="submit" class="submitbtn">Sign up</button>
</div>

<div class="container signin">
<p>Already have an account? <a href="#">Sign in</a>.</p>
</div>
</div>

            </form>
        
        
        </div>
    
    </body>
</html>



</form>




  </div>





    </body>

  

 
<!-- bootstrap -->
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>






</html>