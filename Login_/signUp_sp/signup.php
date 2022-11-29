<?php


$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "petassure";

if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {

    die("Failed to connect to the database!");
}


if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
    

    $fname = $_POST['fname'];
    $nic = $_POST['Nic'];
    $mobileno = $_POST['mobileno'];
    $stype =$_POST['stype'];
    $email = $_POST['Eml'];
    $address= $_POST['Address'];
    
    $username = $_POST['usrname'];
    $pword = $_POST['pword'];
    
    $details =trim($_POST['details']);
   // $details ="<pre>$details</pre>"

/*
$fname = $_REQUEST['fname'];
    $nic = $_REQUEST['Nic'];
    $mobileno = $_REQUEST['mobileno'];
    $stype =$_REQUEST['stype'];
    $email = $_REQUEST['Eml'];
    $address= $_REQUEST['Address'];
    
    $username = $_REQUEST['usrname'];
    $pword = $_REQUEST['pword'];
    
    $details =trim($_REQUEST['details']);*/

    $sql= "INSERT INTO serviceprovider (fname,nic, mobileno, stype ,email, address,username,pword,details) VALUES ('$fname' ,'$nic','$mobileno','$stype','$email','$address','$username','$pword','$details')";

    if (mysqli_query($con, $sql)) {
        echo "<h3>Congragulations. your account was created.</h3>";
    } else {
        echo "ERROR: not succesfull $sql. "
            . mysqli_error($con);
    }

    // Close connection
    mysqli_close($con);
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="styles_signUp.css" />
    <title>Sign Up</title>
    <!-- <script>
        function validateForm() {
            var x = document.forms["contactForm"]["email"].value;
            if (x == "") {
                alert("Please enter your email address");
                return false;
            }
        }
    </script>-->
</head>

<body style="background-color: #F6F4F1">
    <div class="page">

        <div class="left">
            <img src="Images/logo.png" width="86px" height="80px" />
            <p style="margin-left: 20px">PetAssure</p>

            <div class="right">

                <p style="margin-left: 300px; font-size: 40px;">Sign up as a service provider</p>
            </div>
        </div>
    </div>

    
    <div>
        <div class="left_body_signup">
            <img src="Images/fe436bc67fd6315ac0deebf8b78194ab.jpg" width="90%" height="350px" /><br><br>

            <form class="proof" method="post" enctype="multipart/form-data">
                <input class="form_file" type=file name=photo class="form-control">
                <p class="tst">Verification Proofs <br>
                    (upload the proofs that we have asked above.)</p>

            </form>
          <form action="signup.php" method="post">
        </div>
        <div class="right_body_signup">


            <div class="form_left">
                <p>Fullname</p>
                <p>NIC</p>
                <p>Mobile Number</p>
                <p>Email Address</p>
                <p>District</p>

                
                <p>UserName</p>
                <p>Password</p>
                <p>Confirm Password</p>
                <p>Description</p>
                <p>Service type you providing</p>

                <button class="form_btn">Submit</button>
            </div>
            <div class="form_right">
                <form name="supportForm" action="/files/insert.php" onsubmit="return validateForm()" method="post">
                    <input type="text" name="fname" placeholder="Enter Name" />
                    <input type="text" name="Nic" placeholder="Enter NIC" />
                    <input type="text" name="mobileno " placeholder="Enter Mobile No" />
                    <input type="email" name="Eml" placeholder="Enter Email Address" />
                    <input type="text" name="Address" placeholder="Enter District" />
                   

                    <input type="text" name="usrname" placeholder="Enter UserName" />
                    <input type="text" name="pword" placeholder="Enter Password" />
                    <input type="text" name="pword" placeholder="Enter Password " />
                    <select name="Role" id="">
                        <option value="vet">Veterinarian</option>
                        <option value="groom">Grooming Service Supplier</option>
                        <option value="petSitter">Pet Sitter</option>
                        <option value="petShelter">Pet Shelter Service Supplier</option>
                    </select>
                    <textarea id="details" name="details" rows="5" cols="30">
                           
                        </textarea>


                    <br /><br />

                </form>
            </div>
        </div>
        <div style="height: 580px"></div>
    </div>
    

    <!--footer -->
    <div class="footer" style="width: 100%">
        <p>
            Telephone No: +94 11 233 5632
            Fax: +94 11 233 5632
            Email: petAssure@hotmail.com
        </p>
    </div>
    </div>
</body>

</html>