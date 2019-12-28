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
    $checkbox1=$_POST['time1']+$_POST['time1']+$_POST['time1'];
  //image file directory
  
    $move=move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/". $_FILES["image"]["name"]);			
  
    
  
    
    //insert query
  
    
    $sql = "INSERT INTO foods(fimage,fname,fdescription,favailability,price) values ('$image','$fname','$fdescription','$checkbox1','$price')";
  
    
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
price
<input type="text" name="price"> <br>
description
<input type="text" name="fdescription"> <br>
photo
<input type="file" name="image"> <br>
availability
<table >  
   <tr>  
      <td colspan="2">Select available times:</td>  
   </tr>  
   <tr>  
      <td>breakfast</td>  
      <td><input type="checkbox" name="time1[]" value="breakfast"></td>  
   </tr>  
   <tr>  
      <td>lunch</td>  
      <td><input type="checkbox" name="time2[]" value="lunch"></td>  
   </tr>  
   <tr>  
      <td>dinner</td>  
      <td><input type="checkbox" name="time3[]" value="dinner"></td>  
   </tr>  

      <td colspan="2" align="center">

  </table>
<button type="submit" name="submit">POST</button>


        </form>
    </body>
</html>