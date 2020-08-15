<?php
  session_start();
  $name="";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
          
          $name=$_POST['getName'];
          
        }

  $servername = "localhost";
  $username = "root";
  $pass = "";
  $dbname = "eztrade";

  $conn = new mysqli($servername,$username,$pass,$dbname);
  $sql = "DELETE FROM accessories where model='$name'";
  if ($conn->query($sql) === TRUE) {
    header('Location: Account.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


 ?>