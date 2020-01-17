<?php session_start()
?>


<html>
    <head>

<link href="css/sty2.css" rel="stylesheet" type="text/css" >
<link rel="shortcut icon" href="img/icon.png" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="css/sty5.css" rel="stylesheet" type="text/css" >
<!-- bootstrap -->
<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">

<!-- added styles from home page -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/fixed.css">
<link href="fontawesome-free-5.12.0-web/css/all.css" rel="stylesheet">




    </head>
   
<body>



<ul>
 
<li><a href="logout.php">Logout</a></li>

  <li><a href="#about">  <?php echo ' '.$_SESSION["username1"].''; ?></a></li>
 
</ul>


<div class="all">

<?php

  $servername="localhost";
  $susername="root";
  $spassword="";
  $sdbname="nsbmedge";

  $db = mysqli_connect("$servername", "$susername","$spassword", "$sdbname");



  error_reporting("0");

	
  if(isset($_POST['submit'])){
  
    //Get image name
  
    $image = $_FILES['image']['name'];
    //Get text
    $fname= $_POST['fname'];
    $fdescription= $_POST['fdescription'];
    $price= $_POST['price'];
    $checkbox1=$_POST['time'];
    $time=implode(",", $checkbox1);
    $shop= $_POST['shop'];
  //image file directory
  
    $move=move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/". $_FILES["image"]["name"]);			
  
    
  
    
    //insert query
  
    
    $sql = "INSERT INTO foods(fimage,fname,fdescription,favailability,price,shop) values ('$image','$fname','$fdescription','$time','$price','$shop')";
  
    
    //excute query
  
    
    mysqli_query($db,$sql);
  
    
    if($move)
  
    
    {
  
    
      echo " successfully uploaded";
  
    
    }else{
  
    
      echo "Failed to upload";
  
    
    }
  
    
  }
  


?>




<div class="d1">
  <h1>add items</h1>
</div>

<div class="div2">
        <form action="upload.php" method="POST" enctype="multipart/form-data">


  <table >  
  
  <tr>  
     <td>name</td>  
     <td><input type="text" name="fname"></td>  
  </tr> 
  <tr>  
   <td>select your shop:</td>
   <td>  <input type="radio" name="shop" value="NANGU">nangu
  <input type="radio" name="shop" value="NATURA">natura
  <input type="radio" name="shop" value="HELABOJUN">hela bojun</td>  
  
   </tr>   
  <tr>  
     <td>price</td>  
     <td><input type="text" name="price"></td>  
  </tr>  
  <tr>  
     <td>description</td>  
     <td><input type="text" name="fdescription"></td>  
  </tr>  
  <tr>  
     <td>photo</td>  
     <td><input type="file" name="image"> <br></td>  
  </tr>  
   <tr>  
      <td colspan="2">Select available times:</td>  
   </tr>  
   <tr>  
      <td>breakfast</td>  
      <td><input type="checkbox" name="time[]" value="breakfast"></td>  
   </tr>  
   <tr>  
      <td>lunch</td>  
      <td><input type="checkbox" name="time[]" value="lunch"></td>  
   </tr>  
   <tr>  
      <td>dinner</td>  
      <td><input type="checkbox" name="time[]" value="dinner"></td>  
   </tr>  
 


      <td colspan="2" align="center">

  </table>
<button type="submit" name="submit">add</button>


        </form>
  </div>








<!--Start contact section-->
<div id="contact" class="offset">
	
	<footer>
		<div class="row justify-content-center">
			
			<div class="col-md-5 text-center">
				<img src="img/logo2.png" height="60" width="150">
				<p>TRADITIONAL SRI LANKAN FOODS   |   PASTRY AND BAKERY FOOD ITEMS   |   BURGERS   |   HEALTHY FOODS   |   JUICE BAR</p>
				<strong>Contact Info</strong>
				<p>(011) 244-5000 <br>theedge@gmail.com</p>
				<a href="#" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a>
				<a href="#" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
				<a href="#" target="_blank"><i class="fab fa-youtube-square fa-2x"></i></a>
	
	</footer>

</div>
<!--End contact section-->















    </body>

  




</html>