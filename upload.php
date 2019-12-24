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
    $favailability= $_POST['favailability'];
  
    
  //image file directory
  
    $move=move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/". $_FILES["image"]["name"]);			
  
    
  
    
    //insert query
  
    
    $sql = "INSERT INTO foods(fimage,fname,fdescription,favailability) values ('$image','$fname','$fdescription','$favailability')";
  
    
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
<html>
    <head>


    </head>
    <body>
        <form action="upload.php" method="POST" enctype="multipart/form-data">
name          
<input type="text" name="fname"> <br>
description
<input type="text" name="fdescription"> <br>
photo
<input type="file" name="image"> <br>
availability
<input type="text" name="favailability"> <br>
<button type="submit" name="submit">POST</button>


        </form>
    </body>
</html>