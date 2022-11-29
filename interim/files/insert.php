<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page </title>
</head>
  
<body>
    <center>
        <?php
//include_once("db/db.php");
    
        $conn = mysqli_connect("localhost", "root", "", "fix");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        // Taking all 4 values from the form data(input)
        $Fullname =  $_REQUEST['Fullname'];
        $NIC =  $_REQUEST['NIC'];
        $MobileNumber =  $_REQUEST['MobileNumber'];
        $email = $_REQUEST['email'];
        $District = $_REQUEST['District'];

        $UserName= $_REQUEST['UserName'];
        $Password =  $_REQUEST['Password'];
        $ConfirmPassword = $_REQUEST['ConfirmPassword'];
        
          
        // Performing insert query execution
        // here our table name is Register
        $sql = "INSERT INTO Register  VALUES ('$$Fullname', 
            '$NIC','$MobileNumber',' $email' ,'$District','vvvvvvvvvvvv' ,'$UserName',' $Password,'$ConfirmPassword')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>Congragulations. your account was created.</h3>"; 
  
            //echo nl2br("\n$first_name\n $last_name\n "
                //. "$gender\n $address\n $email");
        } else{
            echo "ERROR: not succesfull $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>