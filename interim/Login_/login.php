<?php

    include_once("db.php");
    session_start();
   //unset($_SESSION['adminname']);
    
    if (isset($_POST['but_submit'])) {
        $uname = $_POST['username'];
        $pswrd = $_POST['password'];

        $sql = "SELECT `username`,`password` FROM `user_details`  WHERE username='$uname' AND password='$pswrd'";
        $result = mysqli_query($con, $sql);


        if (mysqli_num_rows($result) > 0) {
            $_SESSION['username'] = $uname;
            header("Location: ourServices.html");
            exit();
        } else {
            echo '<script> window.alert("Incorrect Username or password");</script>';
            header("Location: login.html");
            exit();
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
    </script>
</head>

<body>
    <nav class="navigation-bar">
        <img class="logo" src="/Images/logo.png">
        <p style="margin-left: 20px;">PetAssure</p>


    </nav>
    <div class="bg">
        <div class="center">
            <div class="bodycontent">
                <div class="form">
                    <form method="Post" action="index.php">

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
                        <div class="formlabel">Forgot Password? <a class="createlink" href="#">Change
                                Password</a></div>
                        <br>


                        <div class="formlabel">New User? <a class="createlink" href="#">Create an
                                Account</a></div>

                    </form>



                </div>
            </div>
        </div>
    </div>
</body>

</html>
