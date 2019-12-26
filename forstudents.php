<!DOCTYPE html>
<html>
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
$sql = "SELECT * FROM `foods`WHERE (`favailability`='1')";
$result = mysqli_query($con, $sql);
echo "<table border=1>";
if (mysqli_num_rows($result) > 0)
 {
  // output data of each row
  while($row = mysqli_fetch_assoc($result))
   {
      echo "<tr>";
      echo "<td> " . $row["fid"]. " </td> <td> " . $row["fname"]. "</td> <td>  " . $row["fdescription"]. "</td>";
      echo "<td> ";?> <img src="uploads/<?php echo $row['fimage']; ?>" width="100px" height="100px" style="border:1px solid #333333;"><?php
   
  }
} else {
  echo "0 results";
}
mysqli_close($con);
?>
</body>
</html>