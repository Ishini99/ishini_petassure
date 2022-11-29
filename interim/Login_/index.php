<?php

    include_once("db/db.php");
    session_start();
    unset($_SESSION['adminname']);
    if (isset($_POST['but_submit'])) {
        $uname = $_POST['username'];
        $pswrd = $_POST['password'];

        $sql = "SELECT `username`,`password` FROM `user_details`  WHERE username='$uname' AND password='$pswrd'";
        $result = mysqli_query($con, $sql);


        if (mysqli_num_rows($result) > 0) {
            $_SESSION['username'] = $uname;
            header("Location: home.php");
            exit();
        } else {
            echo '<script> window.alert("Incorrect Username or password");</script>';
            header("Location: index.php");
            exit();
        }

        mysqli_close($con);
    }

    ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- <link rel="stylesheet" href="assets\css\style_home.css">
        <link rel="stylesheet" href="assets\css\background.css">-->
        

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
      <!-- 
     
      //  include('loginNav.php');
     
            <div class="copyrights" style="position:absolute; z-index: -1; width: 100%;">
                <p>Copyright ©2022 | All Rights Reserved | Website Design & Developed by Group 12​</p>
            </div>
            
        </div>  -->
    </body>
</html>