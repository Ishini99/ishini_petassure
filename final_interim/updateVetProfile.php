<!--
    

include ("db.php");
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    

    $fname = $_POST['fname'];
    $nic = $_POST['nic'];
    $mobileno = $_POST['mobileno'];
   $email = $_POST['email'];
    $address= $_POST['address'];
    $username = $_POST['username'];
    $pword = $_POST['pword'];
    $stype = $_POST['stype'];
    $details =trim($_POST['details']);
    $sql= "INSERT INTO serviceprovider (fname,nic, mobileno, stype ,email, address,username,pword,details) VALUES ('$fname' ,'$nic','$mobileno','$stype','$email','$address','$username','$pword','$details')";

    if (mysqli_query($con, $sql))
     {
        echo '<script type="text/javascript"> alert("Congragulations. your account has been updated.")</script>';
        header("Location: updateVetProfile.php");
        exit();
    } else {
        echo '<script type="text/javascript"> alert("Invalid update.")</script>';
        header("Location: updateVetProfile.php");  
        exit(); 
    }
    mysqli_close($con);
}

?>

/*$nic = $_SESSION['nic'];
$sql = "SELECT * FROM `serviceprovider` WHERE nic=$nic";
$result = mysqli_query($con, $sql);
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
} else {
    echo '<script> window.alert("Error receiving data!");</script>';
}
if(count($_POST)>0)
{
    mysqli_query($con,"UPDATE serviceprovider SET fname='" . $_POST['fname'] . "' , mobileno='" . $_POST['mobileno'] . "' , email='" . $_POST['email'] . "' , address='" . $_POST['address'] . "' , details='" . $_POST['details'] . "' , username='" . $_POST['username'] . "' ,  WHERE 1)
    
}
?>
-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles_updateVetPofile.css" />
    <title>Veterinarian Profile</title>


    <!--
<script>

function enableInput() {
    document.getElementById("fName").removeAttribute("disabled");
    document.getElementById("mobileno").removeAttribute("disabled");
    document.getElementById("district").removeAttribute("disabled");
    document.getElementById("email").removeAttribute("disabled");
    document.getElementById("pword").removeAttribute("disabled");
    document.getElementById("details").removeAttribute("disabled");
    document.getElementById("btnSubmit").style.display = "block";
    document.getElementById("btnEnable").style.display = "none";
    document.getElementById("btnDelete").style.display = "none";
}
</script>

-->

</head>

<body class="bg">



    <link rel="stylesheet" href="navigation.css">

    <title>PetAssure</title>
    </head>

    <body>
        <div class="page">
            <?php include '/navigation/navigation.php';?>
            <div class="body">
                <p class="userProfile">User Profile</p>
                <div style="margin-bottom:10px ;">
                    <img class="img" src="Images/photo1.png" style="width: 300;height:200px; margin-left:100px;
     border-radius: 10%; ">

                    <img class="img" src="Images/photo1.png" style="width: 300;height:200px;
border-radius: 10%;margin-left:50px ">


                    <img class="img" src="Images/photo1.png" style="width: 300;height:200px;
border-radius: 10%; margin-left:50px">
                    <img class="img" src="Images/photo1.png" style="width: 300;height:200px;
            border-radius: 10%;margin-left:50px ">

                </div>

            </div>




            <form name="" action="updateVetProfile.html" method="post">
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


            <button class="form_btn" type="submit">Request to delete</button>
            <button class="form_btn" type="submit">View</button>
            <button class="form_btn" type="button" onclick="enableInput()" id="btnEnable">Update</button>
            <div class="footerr" style="position:absolute; z-index: -1; width: 99%;">
                <p> Telephone No: +94 11 233 5632
                    Fax: +94 11 233 5632
                    Email: petAssure@hotmail.com​</p>
            </div>
        </div>


    </body>