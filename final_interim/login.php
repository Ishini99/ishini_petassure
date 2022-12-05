

<?php

include_once("db.php");
session_start();


if (isset($_POST['but_submit'])) {
    $uname = $_POST['username'];
    $pswrd = $_POST['password'];

    $sql = "SELECT `username`,`password` FROM `user_details`  WHERE username='$uname' AND password='$pswrd'";
    $result = mysqli_query($con, $sql);


    if (mysqli_num_rows($result) > 0) {
        $_SESSION['username'] = $uname;
        header("Location: vetDashboard.php");
        exit();
    } else {
        echo '<script> window.alert("Incorrect Username or password.Try Again");</script>';
       
    }

    mysqli_close($con);
}

?>


<html>

<head>
    <link rel="stylesheet" href="styles_login.css">

    <title>Login</title>
   
    <script type="text/javascript">
            function validate() {
                if (document.myForm.uname.value == "") {
                    alert("Please provide your UserName!");
                    document.myForm.uname.focus();
                    return false;
                }
                if (document.myForm.password.value == "") {
                    alert("Please provide your password!");
                    document.myForm.password.focus();
                    return false;
                }
   
   
                return (true);
            }

            var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "ishini" && password == "1234"){
alert ("Login successfully");
        </script>
    <style>
.navigation-bar {
    width: 100%;  
    height: 80px; 
    background-color:  #A6A6A6; 
    opacity: 50%;
}
.logo {
    display: inline-block;
    vertical-align: top;
    width: 80px;
    height: 80px;
    margin-right: 20px;
    margin-top: 0px;
    margin-left: 30px;
   
}


.navigation-bar > a {
    vertical-align: top;
    line-height: 50px; 
    float: right;
    color: white;
  text-align: center;
  padding: 15px 22px;
  text-decoration: none; 
  list-style-type: none;
  overflow: hidden;
  background-color:  #737373;
  font-size: large; 
}
.navigation-bar > p {
    display: inline-block;
    vertical-align: top;
    width: 50px;
    height: 50px;
    margin-right: 20px;
    margin-top: 15px;
    margin-left: 30px;
    font-family: 'Lucida Sans';
    font-size:36px;
    color: azure; 
}
.navigation-bar > a:hover {
    background-color: #111;
}
body, html {
    height: 100%;
    margin: 0;
    
  }

body {
    background-image: url("Images/bg2.PNG");
    
    height: 100%; 
  
    
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
  }
  .center {
    margin: auto;
    width: 60%;
    border: 3px  ;
    padding: 10px;
  }

.bodycontent{
    background-color:  #737373;
    width:60%;
    height: 400px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
    align-items: center;
    border-radius: 10px;
    margin-top: 100px;
    margin-left: 185px;   
}

.bodycontent h2{
    color: white;
    font-family: 'Roboto', sans-serif;
}

.formlabel{
    color: white;
    font-family: 'Roboto', sans-serif;
}

.input_box{
    width: 14rem;
}

.formremember{
    font-size: small; 
}

.button{
    margin-top: 10px;
    text-align: center;
    font-weight: bold;
    background-color: #f8f0e8;
    border-radius: 25px;
  border: 2px solid#f8f0e8;
  padding: 10px; 
  width: 200px;
  height: 35px; 
}

.createlink{
    color: white;
    font-family: 'Roboto', sans-serif;
    font-weight: bold;
    font-style: none;
}

        </style>
       
</head>

<body>

    <nav class="navigation-bar">
        <img class="logo" src="Images/logo.png">
        <p style="margin-left: 20px;">PetAssure</p>


    </nav>
    <div>
        <div class="center">
            <div class="bodycontent">
                <div class="form">
                    <form method="Post" action="">

                        <h2>LOGIN</h2>

                        <div class="formcontent">
                            <div class="formlabel"> User Name: </div>
                            <div class="formin"><input class="input_box" type="text" name="username" required></div>
                        </div>

                        <br>

                        <div class="formcontent">
                            <div class="formlabel"> Password: </div>
                            <div class="formin"><input class="input_box" type="password" name="password" required></div>
                        </div>

                        <br>


                        <div class="formcontent">
                            <div class="formin">

                                <input class="button" type="submit" name="but_submit" id="but_submit" value="Sign In" />

                            </div>
                        </div>

                        <br>
                        <div class="formlabel">Forgot Password? <a class="createlink" href="forgotPassword.php">Change
                                Password</a></div>
                        <br>


                        <div class="formlabel">New User? <a class="createlink" href="signup.php">Create an
                                Account</a></div>

                    </form>



                </div>
            </div>
        </div>
    </div>
</body>

</html>
