<?php
session_start();

  $name=$_POST['NAME'];
        $user=$_POST['USER'];
        $passw=$_POST['PASS'];
        $email=$_POST['EMAIL'];
        $mob=$_POST['MOB'];
        $batch=$_POST['BATCH'];
        $eno=$_POST['ENO'];
        $sec=$_POST['SEC'];



  $servername = "localhost";
  $username = "root";
  $pass = "";
  $dbname = "eztrade";
  

  $conn = new mysqli($servername,$username,$pass,$dbname);

   $sql = "UPDATE signup SET name='$name' and email='$email' and phone=$mob and batch='$batch' and enroll=$eno and sector=$sec where userid='$user'";
   if ($conn->query($sql) === TRUE) {
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

  $sqle="SET @p0='$user'";
  $sqlr="SET @p1='$passw';";
  $sqlt="CALL `change(@p0, @p1);";
  $conn->query($sqle);
  $conn->query($sqlr);
  
    if ($conn->query($sqlt) === TRUE) {
    header('Location: Account.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();



?>