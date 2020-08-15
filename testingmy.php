
<?php

  $servername = "localhost";
  $username = "root";
  $pass = "";
  $dbname = "project";

  $conn = new mysqli($servername,$username,$pass,$dbname);

$test="rrrr";
  $Aname="dwdw";
  $Aprice="dwd";
  $Acond="";
  $Aimgpath="";


  $sql = "SELECT name,price,cond,imgpath FROM game";
  $result = $conn->query($sql);

?>

<!DOCTYPE html>
<html>
<head>
  <?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $Aname=$row["name"];
        $Aprice=$row["price"];
        $Acond=$row["cond"];
        $Aimgpath=$row["imgpath"];
        

?>
<script type="text/javascript">
  function showform()
  {
    var simple = '<?php echo $Aname; ?>';
    document.getElementById('j').innerHTML+=simple;
  }


</script>

  <title></title>
</head>
<body>


<div id="j"></div>
<?php
        echo "<script>showform();</script>";

        echo "done";
         

    }
}
    else
    {

    }

    $conn->close();

?>
<p>ddddddddddddddddddddddddddddddddddddddddddddddde</p>


</body>
</html>

