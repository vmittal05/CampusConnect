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


<h2 align="center">Edit Details</h2>
        <br><br><br>
        <hr>
        

          <form action="updateacc.php" method="POST" align="center" id="chform">
          <div  class="input-group input-group-lg col-lg-6 col-md-offset-3" width > 
          <span  class="input-group-addon" id="myTable">Name:</span>
          <input  type="text" name="NAME" class="form-control" placeholder="<?php echo $name ?>"> 
          </div><br>
          <div  class="input-group input-group-lg col-lg-6 col-md-offset-3" width > 
          <span  class="input-group-addon" id="myTable">UID:</span>
          <input  type="text" name="USER" class="form-control" placeholder="<?php echo $uid ?>"> 
          </div><br>
          <div  class="input-group input-group-lg col-lg-6 col-md-offset-3" width > 
          <span  class="input-group-addon" id="myTable">Password:</span>
          <input  type="text" name="PASS" class="form-control" placeholder="*********"> 
          </div><br>
          <div class="input-group input-group-lg col-lg-6 col-md-offset-3">
          <span class="input-group-addon">Email:</span>
          <input type="text" name="EMAIL" class="form-control" placeholder="<?php echo $email ?>"> 
          </div><br>
          <div class="input-group input-group-lg col-lg-6 col-md-offset-3">
          <span class="input-group-addon">Mobile Number:</span>
          <input type="text" name="MOB" class="form-control" placeholder="<?php echo $mob ?>"> 
          </div><br>
          
          <div class="input-group input-group-lg col-lg-6 col-md-offset-3">
          <span class="input-group-addon">Batch:</span>
          <input type="text" name="BATCH" class="form-control" placeholder="<?php echo $batch ?>"> 
          </div><br>
          <div class="input-group input-group-lg col-lg-6 col-md-offset-3">
          <span class="input-group-addon">Enrollment No.:</span>
          <input type="text" name="ENO" class="form-control" placeholder="<?php echo $enroll ?>"> 
          </div><br>
          <div class="input-group input-group-lg col-lg-6 col-md-offset-3">
          <span class="input-group-addon">Sector:</span>
          <input type="text" name="SEC" class="form-control" placeholder="<?php echo $sector ?>"> 
          </div><br>
          <br>
          <button class="btn btn-lg btn-warning" type="submit" form="chform">SAVE</button>
          </form>