<html>
    <head>


<link href="css/sty2.css" rel="stylesheet" type="text/css" >

    </head>
   
<body>



<ul>
  <li><a href="#about">About</a></li>
  <li><a href="#login">login</a></li>
</ul>
</div>

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
  //image file directory
  
    $move=move_uploaded_file($_FILES["image"]["tmp_name"],"uploads/". $_FILES["image"]["name"]);			
  
    
  
    
    //insert query
  
    
    $sql = "INSERT INTO foods(fimage,fname,fdescription,favailability,price) values ('$image','$fname','$fdescription','$time','$price')";
  
    
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





    </body>

  




</html>