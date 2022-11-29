<?php

include_once("db.php");
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
        echo '<script type="text/javascript"> alert("Congragulations. your account was created.")</script>';
    } else {
        echo '<script type="text/javascript"> alert("Congragulations. your account was created.")</script>';
            
    }

  
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


    <script type="text/javascript">
        var nic = document.getElementById("nic");
        nic.addEventListener('input',()=>
        {
            nic.setCustomValidity('');
            nic.checkValidity();
        });
       
   
    nic.addEventListener('invalid',()=>{
        if (nic.value ==''){
            nic.setCustomValidity('Enter  NIC');
        }
        else{
            nic.setCustomValidity('Enter NIC in123456789V or 200256789123 format')
        }
    });
    
    </script>

</head>

<body style="background-color: #F6F4F1 ;overflow-x:hidden ;overflow-y: auto;">
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
            <img src="Images/fe436bc67fd6315ac0deebf8b78194ab.jpg" width="80%" height="250px" /><br><br>

            <form class="proof" method="post" enctype="multipart/form-data">
                <input class="form_file" type=file name=photo class="form-control">
                <p class="tst">Verification Proofs <br>
                    (upload the proofs that we have asked above.)</p>


                <div id="validate">
                    <p><b>**Password must contain:</b></p>
                    <p style="font-size: 12px;" >A <b>lowercase</b> letter ,a <b>capital (uppercase)</b> letter ,a  <b>number</b> and minimum <b>8 characters</b></p>
                </div>
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
                <p>Password*</p>
                <p>Confirm Password</p>
                <p>Service type you providing</p>
                <p>Description</p>
                <button class="form_btn">Submit</button>
            </div>
            <div class="form_right">
                <form name="signUpForm" action="signup.php" method="post">
                    <input type="text" name="fname" placeholder="Enter Name" required />
                    <input type="text" name="nic" placeholder="Enter NIC"  pattern = "[0-9]{9}[Vv0-9]{1,3}"required/>

                    
                    <input type="text" name="mobileno" placeholder="Enter Mobile No" pattern="[0-9]{10}" required />
                    <input type="email" name="email" placeholder="abc@gmail.com"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required />
                    <input type=" text" name="address" placeholder="Enter District"required  />
                    <input type="text" name="username" placeholder="Enter UserName" required />
                    <input type="text" name="pword" placeholder="Enter Password"
                        pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,30}" required />
                    <input type="text" name="password" placeholder="Enter Password "required  />
                    <select name="stype" id="">
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
        <div style="height: 570px"></div>
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