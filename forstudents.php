<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="css/sty1.css" rel="stylesheet" type="text/css" >
<!-- bootstrap -->
<link rel="stylesheet" href="bootstrap-4.1.3-dist/css/bootstrap.min.css">

<!-- added styles from home page -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/fixed.css">
<link href="fontawesome-free-5.12.0-web/css/all.css" rel="stylesheet">
<link rel="shortcut icon" href="img/icon.png" />


</head>
<body>


	<!---Navigation--->
	<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">

		
		<div class="collapse navbar-collapse" id="navbarResponsive">
			<ul class="navbar-nav ml-auto navbar-dark bg-dark">
      <li><a  href="index.html"><img src="img/logo.png" height="30px" width="70px"></a></li>

				</li>
      </ul>
      
		</div>
	</nav>
	<!--- End Navigation--->



<div class="containermain">


<img src="images/unique1.jpg" class="topimg">
     <div class="di1" >
       </br>
      
    <h1 class="h11">EDGE</h1>
      Our edge menu offers satisfying, gluten-free dinners for making low-carb lifestyles less complicated. Get started now.
                                                                                                          </br>
                                                                                                           </br>
    <h2 >Check out all our menus</h2>
    
                                                                                                           </br>
                                                                                                           </br>
    </div>





  <div class="jumbotron jumbotron-fluid">
  <div class="container">
  <div class="row">
  <img src="img/shop3.png" width="60px" height="60px">
    <h1 class="display-6">HELA BOJUN</h1>
  </div>
  
    <p class="lead">හෙල බොජුන් is a shop which is based our Traditional Sri Lankan Food such as rich and curry , milk rice,
            sri lankan traditional sweets etc.</p>
  </div>
</div>






<?php
  $servername="localhost";
  $susername="root";
  $spassword="";
  $sdbname="nsbmedge";
// Create connection
$con = mysqli_connect("$servername", "$susername","$spassword", "$sdbname");
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
<div class="container">





<?php
$sql = "SELECT * FROM `foods` WHERE (`shop`='HELABOJUN')";
$result = mysqli_query($con, $sql);
?>

<div class="container">
<div class="row">


 <?php
if (mysqli_num_rows($result) > 0)
 {
  // output data of each row
  while($row = mysqli_fetch_assoc($result))
   {
      ?>
<div class="col-md-6 col-lg-3 d-flex align-items-stretch">
<div class="card" style="width: 18rem; margin: 10px;" id="zoom">
  <img class="card-img-top img-fluid" src="uploads/<?php echo $row['fimage']; ?>" alt="<?php echo $row['fimage']; ?>" id="imgcard">
  <div class="card-body" id="cardbodyheight">
  <h5 class="card-title">
    <?php
      echo $row["fname"]; ?>
      </h5>
    <p class="card-text"><?php
      echo $row["fdescription"]. "</td>"; ?></p>
  </div>
  <div class="card-footer">
                        <span class="float-right"><?php
      echo  $row["favailability"]; ?></span>
                        <span><i><?php 
      echo  $row["price"]; ?> lkr</i>
      </span>
  </div>
  </div>
</div>



      <?php
   
   } 
      
  }

else
 {
  echo "0 results";
}
mysqli_close($con);
?>

    

    </div>
    </div>


</div>

<div>


</div>





<div class="containermain">






  
<div class="jumbotron jumbotron-fluid">
  <div class="container">
  <div class="row">
  <img src="img/shop3.png" width="60px" height="60px">
    <h1 class="display-6">NATURA</h1>
  </div>
  
    <p class="lead">Natura is a Short Eats shop that you can fulfil your instant food needs such as fish rolls
            ,egg buns,fish burgers etc. And also you can find refreshments such as cool drinks and ice-creams.</p>
  </div>
</div>

 









<?php
  $servername="localhost";
  $susername="root";
  $spassword="";
  $sdbname="nsbmedge";
// Create connection
$con = mysqli_connect("$servername", "$susername","$spassword", "$sdbname");
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
<div class="container">





<?php
$sql = "SELECT * FROM `foods` WHERE (`shop`='NATURA')";
$result = mysqli_query($con, $sql);
?>

<div class="container">
<div class="row">


 <?php
if (mysqli_num_rows($result) > 0)
 {
  // output data of each row
  while($row = mysqli_fetch_assoc($result))
   {
      ?>
<div class="col-md-6 col-lg-3 d-flex align-items-stretch">
<div class="card" style="width: 18rem; margin: 10px;" id="zoom">
  <img class="card-img-top img-fluid" src="uploads/<?php echo $row['fimage']; ?>" alt="<?php echo $row['fimage']; ?>" id="imgcard">
  <div class="card-body" id="cardbodyheight">
  <h5 class="card-title">
    <?php
      echo $row["fname"]; ?>
      </h5>
    <p class="card-text"><?php
      echo $row["fdescription"]. "</td>"; ?></p>
  </div>
  <div class="card-footer">
                        <span class="float-right"><?php
      echo  $row["favailability"]; ?></span>
                        <span><i><?php 
      echo  $row["price"]; ?> lkr</i>
      </span>
  </div>
  </div>
</div>



      <?php
   
   } 
      
  }

else
 {
  echo "0 results";
}
mysqli_close($con);
?>

    

    </div>
    </div>


</div>

<div>


</div>





<div class="containermain">





  
<div class="jumbotron jumbotron-fluid">
  <div class="container">
  <div class="row">
  <i class="fas fa-hamburger fa-3x"></i>
    <h1 class="display-6">NANGU</h1>
  </div>
  
    <p class="lead">Lungu is Indian based shop where you can feel the taste of some prominent Indian Food
            Such as Poori,Thosai and Nan Rotti.</p>
  </div>
</div>











<?php
  $servername="localhost";
  $susername="root";
  $spassword="";
  $sdbname="nsbmedge";
// Create connection
$con = mysqli_connect("$servername", "$susername","$spassword", "$sdbname");
// Check connection
if (!$con) {
  die("Connection failed: " . mysqli_connect_error());
}
?>
<div class="container">





<?php
$sql = "SELECT * FROM `foods` WHERE (`shop`='NANGU')";
$result = mysqli_query($con, $sql);
?>

<div class="container">
<div class="row">


 <?php
if (mysqli_num_rows($result) > 0)
 {
  // output data of each row
  while($row = mysqli_fetch_assoc($result))
   {
      ?>
<div class="col-md-6 col-lg-3 d-flex align-items-stretch">
<div class="card" style="width: 18rem; margin: 10px;" id="zoom">
  <img class="card-img-top img-fluid" src="uploads/<?php echo $row['fimage']; ?>" alt="<?php echo $row['fimage']; ?>" id="imgcard">
  <div class="card-body" id="cardbodyheight">
  <h5 class="card-title">
    <?php
      echo $row["fname"]; ?>
      </h5>
    <p class="card-text"><?php
      echo $row["fdescription"]. "</td>"; ?></p>
  </div>
  <div class="card-footer">
                        <span class="float-right"><?php
      echo  $row["favailability"]; ?></span>
                        <span><i><?php 
      echo  $row["price"]; ?> lkr</i>
      </span>
  </div>
  </div>
</div>



      <?php
   
   } 
      
  }

else
 {
  echo "0 results";
}
mysqli_close($con);
?>

    

    </div>
    </div>


</div>

<div>


</div>































<!--adds-->

<table  class="table1">
<tr>

    </tr>
    <tr>
<td class="divright">



<div  style="max-width:500px">

   
   <img class="mySlides" src="images/unique3.jpg" style="width:100%" >
   <img class="mySlides" src="images/unique4.jpg" style="width:100%">
   <img class="mySlides" src="images/unique5.jpg" style="width:100%" >
   <img class="mySlides" src="images/unique6.jpg" style="width:100%" >
     
       


  
</div>


</td>
</table>















  
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









<script>

var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000); // Change image every 4 seconds
}

</script>

 
<!-- bootstrap -->
<script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>









</body>
</html>
