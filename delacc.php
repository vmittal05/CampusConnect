<?php
session_start();
  $servername = "localhost";
  $username = "root";
  $pass = "";
  $dbname = "eztrade";
  $name="";
  $name=$_SESSION['PNAME'];

  $conn = new mysqli($servername,$username,$pass,$dbname);

   $sql = "DELETE FROM accessories where model='$name'";
   if ($conn->query($sql) === TRUE) {
    header('Location: Home.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>