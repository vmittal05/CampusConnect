<?php
error_reporting(0);
ini_set('display_errors', 0);
session_start();
$id="";
$id=$_SESSION['userid'];


?>

<script type="text/javascript">
	$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
</script>

<script type="text/javascript">
	
	function check(){
  if(document.getElementById('inputForm').value!='Digital')
    document.getElementById('inputCond').disabled=false;
  else
    document.getElementById('inputCond').disabled=true;
}


</script>

<style type="text/css">
	.form-row
	{
		margin-top: 50px;
	}
	.container.custom-container 
    {
    	margin-top: 0px;
    }
    .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 50%;
    min-height: 50%;
    font-size: 100px;
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;
    background: white;
    cursor: inherit;
    display: block;
}
.error {color: #FF0000;
font-size: 15px;
}
.star {color: #FF0000;
font-size: 15px;
position: relative;
left: 280px;
top:-40px;}

#img-upload{
    width: 50%;
    position: relative;
    left: 530px;
    top:-40px;
}
#cobtn
{
  position:relative;
  left:500px;
  top: -300px;
}
</style>

<?php 
          $form = $cond = $email = $price = $mob = $name = $type = $author =  "";
          $nameErr = $emailErr =  $mobErr = $priceErr = $authorErr = "";
          if ($_SERVER["REQUEST_METHOD"] == "POST") {

          	   if (empty($_POST["author"])) {
   				$authorErr = "Author Name is required";
  			} else {
    			$author = test_input($_POST["author"]);
   			  if (!preg_match("/^[a-zA-Z ]*$/",$author)) {
      			$authorErr = "Only letters and white space allowed"; 
    			}
  			}
             
             if (empty($_POST["name"])) {
   				$nameErr = "Name is required";
  			} else {
    			$name = test_input($_POST["name"]);
   			  
  			}
          if (empty($_POST["email"])) {
    			$emailErr = "Email is required";
  			} else {
    			$email = test_input($_POST["email"]);
    		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      			$emailErr = "Invalid email format"; 
    			}
  			}
    
            if (empty($_POST["price"])) {
              $priceErr = "Price is required";
            } else {
              $price = test_input($_POST["price"]);
              if(!is_numeric($price)) {
              	$priceErr= "Price should always be in digits";
          		}
            }

            if (empty($_POST["mob"])) {
              $mobErr = "Mobile number is required";
            } else {
              
              if(is_numeric($_POST["mob"])) {
				if($_POST["mob"] >=1000000000 and $_POST["mob"]<=9999999999){
					$mob = test_input($_POST["mob"]);
				}
				else{
					$mobErr= "Please Enter a Valid Mobile No.";
				}
			}
			else{
				$mobErr = "Mobile No. should always be in digits";
				}
            }
          
         	$form = test_input($_POST["form"]);
          	$type = test_input($_POST["type"]);
            $cond = test_input($_POST["cond"]);
            
          }
          

          function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
          }
?>



<div class="container custom-container">
	<h2>Books</h2>
	<form action="booksreq.php" method="POST" id="myForm">

		<div class="form-row">
			<div class="form-group col-lg-6 col-md-6">
				<label for="inputType">Type</label>
				<select id="inputType" name="type" class="form-control">
					<option>Literature & Fiction</option>
					<option>Arts & Photography</option>
					<option>Business & Investing</option>
					<option>Computers & Internet</option>
					<option>History</option>
					<option>Mystery & Thrillers</option>
					<option>Religion & Spirituality</option>
					<option>Romance</option>
					<option>Science & Math</option>
					<option>Science Fiction</option>
					<option>Fantasy</option>
					<option>Sports</option>
					<option>Travel</option>
					<option>Other</option>
				</select>
			</div>
			<div class="form-group col-lg-6 col-md-6">
      			<label for="inputBrand">Name</label>
      			<input type="text" class="form-control" name="name" id="inputBrand" placeholder="eg : The Shining"><span class="star">*</span>
          <span class="error"><?php echo $nameErr;?></span>
    		</div>
			<div class="form-group col-lg-6 col-md-6">
      			<label for="inputModel">Author</label>
      			<input type="text" class="form-control" name="author" id="inputModel" placeholder="eg : Stephen King"><span class="star">*</span>
          <span class="error"><?php echo $authorErr;?></span>
    		</div>
			<div class="form-group col-lg-6 col-md-6">
				<label for="inputForm">Form</label>
				<select id="inputForm" name="form"  class="form-control" >
					<option value="Digital">Digital Copy</option>
					<option value="Physical">Physical Copy</option>
				</select>
			</div>
			
			
    		<div class="form-group col-lg-6 col-md-6">
				<label for="inputCond">Physical Condition</label>
				<select id="inputCond" name="cond" class="form-control">
					<option>Excellent</option>
					<option>Good</option>
					<option>Fair</option>
				</select>
			</div>
    		<div class="form-group col-lg-6 col-md-6">
      			<label for="inputPrice">Price</label>
      			<input type="text" class="form-control" name="price" id="inputPrice" placeholder="eg : 32000"><span class="star">*</span>
          <span class="error"><?php echo $priceErr;?></span>
    		</div>
    		<div class="form-group col-lg-6 col-md-6">
      			<label for="inputMob">Mobile Number</label>
      			<input type="text" class="form-control" name="mob" id="inputMob" placeholder="eg : 985XXXXXXX"><span class="star">*</span>
          <span class="error"><?php echo $mobErr;?></span>
    		</div>
    		<div class="form-group col-lg-6 col-md-6">
      			<label for="inputPrice">Email id</label>
      			<input type="email" class="form-control" name="email" id="inputPrice" placeholder="eg :  yachint@gmail.com"><span class="star">*</span>
          <span class="error"><?php echo $emailErr;?></span>
    		</div>
			 <div class="form-group col-lg-6 col-md-6">
        		<label>Upload Image</label>
        		<div class="input-group">
            		<span class="input-group-btn">
                	<span class="btn btn-default btn-file">
                    Browse… <input type="file" id="imgInp"> 
                	</span>
            		</span>
            		<input type="text" name='imgpath' class="form-control" readonly>
        		</div>
        		<img id='img-upload'/>
    		</div>
</div>
</div>
    		



				
			
		
	</form>
	<button class="btn btn-lg btn-warning" type="submit" id="cobtn" form="myForm">Confirm</button>



