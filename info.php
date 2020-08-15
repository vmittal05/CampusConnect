<?php
  session_start();
  $sesname=$_SESSION['userid'];
  	$servername = "localhost";
	$username = "root";
	$pass = "";
	$dbname = "eztrade";

	$uid="";
	$passw="";
  $name="";
  $email="";
  $mob="";
  $batch="";
  $enroll="";
  $sector="";

	$conn = new mysqli($servername,$username,$pass,$dbname);

	$sql = "SELECT userid,pass,name,email,phone,batch,enroll,sector FROM signup where userid='$sesname' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $uid=$row["userid"];
        $passw=$row["pass"];
        $name=$row["name"];
        $email=$row["email"];
        $mob=$row["phone"];
        $batch=$row["batch"];
        $enroll=$row["enroll"];
        $sector=$row["sector"];




    }
}
    else
    {

    }

    $conn->close();


?>


<h2>Profile info</h2>
<hr>
<br><br>
<p>Name : <?php echo $name ?></p>
<br><br>
<p>User Id : <?php echo $uid ?></p>
<br><br>
<p>Password : <?php echo $passw ?></p>
<br><br>
<p>email : <?php echo $email ?></p>
<br><br>
<p>Mobile Number : <?php echo $mob ?></p>
<br><br>
<p>Batch : <?php echo $batch ?></p>
<br><br>
<p>Enroll No. : <?php echo $enroll ?></p>
<br><br>
<p>Sector : <?php echo $sector ?></p>
<br><br>