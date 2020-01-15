 <html>
<head>
    <title> Admin Login Panel </title>
    <link rel="stylesheet" href="Style_3.css">
<link rel="stylesheet" href="css/Style_3.css">

</head>
    <body>

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
      

           if(!($_POST["username1"]) || !($_POST["password1"]))  
           {  
                echo '<script>alert("Both Fields are required")</script>';  
           }  
           else  
           {  
                $username1 =$_POST["username1"];  
                $password1 =$_POST["password1"];  
                $password1 = md5($password1);  
                $query = "SELECT * FROM logininfo WHERE email = '$username1' AND pwd = '$password1'";  
                $result = mysqli_query($con, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
                    
                     $_SESSION['username1'] = $username1;  
                     header("upload.php");  
                }  
                else  
                {  
                     echo '<script>alert("Wrong User Details")</script>';  
                }  
           }  
    
      ?>  







    <div class="login-box">
    <img src="avatar.png" class="avatar">
        <h1>Login Here</h1>
            <form action="Login_Menu.php" method="POST" enctype="multipart/form-data">
            <p>Username </p>
            <input type="text" name="username1" placeholder="Email / Phone">
            <p>Password</p>
            <input type="password" name="password1" placeholder="Enter Your Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Forget Password</a>    
            </form>
        
        
        </div>
    
    </body>
</html>