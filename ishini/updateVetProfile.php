
<?php
require 'db.php';
session_start();
$nic ="";
if(isset($_SESSION["nic"]) ){
   $nic =$_SESSION["nic"];
}else{
   //header("location:login.php");
}

if(isset($_POST["submit"])){
    $name = $_POST["name"];
    if($_FILES["image"]["error"] == 4){
      echo
      "<script> alert('Image Does Not Exist'); </script>"
      ;
    }
    else{
      $fileName = $_FILES["image"]["name"];
      $fileSize = $_FILES["image"]["size"];
      $tmpName = $_FILES["image"]["tmp_name"];
  
      $validImageExtension = ['jpg', 'jpeg', 'png'];
      $imageExtension = explode('.', $fileName);
      $imageExtension = strtolower(end($imageExtension));
      if ( !in_array($imageExtension, $validImageExtension) ){
        echo
        "
        <script>
          alert('Invalid Image Extension');
      </script>
        ";
      }
      else if($fileSize > 10000000000){
        echo
        "
        <script>
          alert('Image Size Is Too Large');
      </script>
        ";
      }
      else{
        $newImageName = uniqid();
        $newImageName .= '.' . $imageExtension;
  
        move_uploaded_file($tmpName, 'img/' . $newImageName);
        $query = "INSERT INTO tb_upload VALUES('', '$name', '$newImageName')";
        mysqli_query($con, $query);
        echo
        "
        <script>
          alert('Successfully Added');
         
      </script>
        ";
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles_updateVetPofile.css" />
    <title>Veterinarian Profile</title>



    <script>
        function adminRequest() {
            var adminText = "Your account has been requested to be deleted.";
            alert(adminText);
        }
        function updateProfile() {
            var updateText = "Your account has been updated.";
            alert(updateText);
        }
        
        function addData() {
            var adminText = "Your data has been saved Successfully.";
            alert(adminText);
        }


    </script>
    <style>
    .styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    box-shadow: 0 0 20px rgba(0, 10, 0, 0.15);
}
.styled-table  tr {
    background-color: #E0E0E0;
    color: #ffffff;
   
}
.styled-table  tr {
    border-bottom: 1px solid #A6A6A6;
}


   </style>

</head>

<body class="bg">

    <link rel="stylesheet" href="navigation.css">

    <title>PetAssure</title>
    </head>

    <body>
        <div class="page">
            <?php include 'navigation/navigation.php';?>
            <div class="body">
                <p class="userProfile">User Profile</p>
                <div style="margin-bottom:10px ;">
                    


                <center>
        
        <!--<a href="data.php">Data</a>-->


        <table class="styled-table" cellspacing=0 cellpadding=5>
          
            <?php
   
      $rows = mysqli_query($con, "SELECT * FROM tb_upload ")
      ?>

            <?php foreach ($rows as $row) : ?>

            <td> 
              <img src="img/<?php echo $row["image"]; ?>" width = 150 height=200 title="<?php echo $row['image']; ?>">
            </td>


            <?php endforeach; ?>
        </table>
        <br>
           
        <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
          
            <label class="txt" for="name">Image Description: </label>
            <input class ="inpt"type="text" name="name" id="name" required value=""> <br>
            <label class="txt" for="image">Select Image : </label>
            <input class ="form_btn2" type="file" name="image" id="image" accept=".jpg, .jpeg, .png" value=""> <br> 
            <button class="form_btn2" type="submit" name="submit">Insert Image</button>
        </form>
        <br>
        <!-- <a href="../uploadimagefile">Upload Image File</a>-->


    </div>

</div>


            </center>

<form name="" action="updateVetProfile.php" method="post">
    <div style="width: 50%; margin-left: 350px; ">

        <div class="form_left">
            <P>NIC</P>
            <p>Fullname</p>
            <p>Mobile Number</p>
            <p>District</p>
            <p>Email</p>
            <p>Password</p>
            <p>Description</p>

        </div>

        <div class="form_right">
            <input type="text" name="nic" id="nic" />
            <input type="text" name="fname" id="fname" />
            <input type="text" name="mobileno" id="mobileno" />
            <input type=" text" name="district" id="district" />
            <input type="email" name="email" id="email" />
            <input type="text" name="pword" id="pword" />
            <textarea id="details" name="details" rows="5" cols="30"> </textarea>

        </div>

    </div>

</form>










<div style="height: 390px"></div>


<button class="form_btn" type="submit" onclick="adminRequest()">Request to delete</button>

<button class="form_btn" type="button" onclick="updateProfile()" id="btnEnable">Update</button>
<button class="form_btn" type="button" onclick="addData()" id="btnEnable">Add Details</button>
<div class="footerr" style="position:absolute; z-index: -1; width: 99%;">
    <p> Telephone No: +94 11 233 5632
        Fax: +94 11 233 5632
        Email: petAssure@hotmail.com​</p>
</div>
</div>


</body>
</html>