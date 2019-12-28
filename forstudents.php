<!DOCTYPE html>
<html>
<head>

<link href="css/sty1.css" rel="stylesheet" type="text/css" >



</head>
<body>



<div class="containermain">

<div class="di1">
  <h1 class="h11">EDGE</h1>
  Our Keto menu offers satisfying, gluten-free dinners for making low-carb lifestyles less complicated. Get started now.
  <h2 class="h12">blah blah blah</h2>
</div>


<div class="divright2">
  eeeeeeee


<div >
   <img src="NSBM edge.png" alt="..." class="img2">
   <div >
    <h5>...</h5>
    <p>...</p>
   </div>
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

<div>

</div>

<table  class="table1">
<tr>

    </tr>
    <tr>
<td class="divright">
sssssssss
</td>
<td>
<?php
$sql = "SELECT * FROM `foods`";
$result = mysqli_query($con, $sql);
?>

<table border=1>

 <?php
if (mysqli_num_rows($result) > 0)
 {
  // output data of each row
  while($row = mysqli_fetch_assoc($result))
   {
      ?>
      <tr >
      <td colspan=2> 
      <img src="uploads/<?php echo $row['fimage']; ?>"  class="img1">
      <?php
      echo "<td> " . $row["fname"]. "</td> <td>  " . $row["fdescription"]. "</td>";
    
      echo "<td> " . $row["favailability"]. "</td> <td>  " . $row["price"]. "</td>";
      }
      echo "<tr >";
      echo "</br>";

  }





 

else {
  echo "0 results";
}
mysqli_close($con);
?>
</td>
    </tr>
    </table>


</div>


<script src="js/myScript1.js">
</script>

</body>
</html>