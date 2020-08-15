<?php
session_start();
$servername = "localhost";
  $username = "root";
  $pass = "";
  $dbname = "eztrade";

  $conn = new mysqli($servername,$username,$pass,$dbname);

$test=$_SESSION["userid"];
  $Aname="";
  $Aprice="";
  $Acond="";
  $Aimgpath="";
  $Atype="";
    $sql = "SELECT name,price,cond,imgpath,author FROM books where uid='$test'";
  $result = $conn->query($sql);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
  <title></title>
 </head>
 <body>
  <?php
    if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $Aname=$row["name"];
        $Aprice=$row["price"];
        $Acond=$row["cond"];
        $Aimgpath=$row["imgpath"];
        $Atype=$row["author"];
  ?>
  <script type="text/javascript">
  function showform()
    {

      var simple = '<?php echo $Aname; ?>';

      var y="<div href='#' class='list-group-item list-group-item-action flex-column'>"+
    "<div class='d-flex w-100 justify-content-between'>"+
      "<img class='footimgedddd' src='<?php echo $Aimgpath; ?>' alt='fif' align='left'>"+
      "<p class='block align-top' id='new'>"+simple+"</p>"+
      "<p class='block' id='son'><?php echo $Atype; ?></p>"+
      "<p class='block' id='cond'>Condition : <span id='wer'><?php echo $Acond; ?></span></p>"+
      "<p id='price'>Price :</p>"+
      "<p id='pricereal'><?php print $Aprice; ?></p>"+
      "<form id='passv' method='post' action='DAccB.php'></form>"+
      "<button type='submit' id='itsb' form='passv' class = 'btn btn-warning btn-lg' name='getName' onclick='checklog()' value='<?php echo $Aname; ?>'>Delete</button>"+
      "<br><br>"+
      "</div>"+
  "</div>";
          
      document.getElementById('j').innerHTML+=y;

    
    
    }
</script>


  <div class="list-group" id="j">
  

  
</div>



<?php

       echo "<script>showform();</script>";
        

    }
}
    else
    {

    }

    $conn->close();

?>

 
 </body>
 </html>