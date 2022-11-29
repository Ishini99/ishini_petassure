
        <?php
//include_once("db/db.php");
    
        $conn = mysqli_connect("localhost", "root", "", "fix");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        // Taking all 5 values from the form data(input)
        $usernm =  $_REQUEST['UserName'];
        $email = $_REQUEST['email'];
        $phnno =  $_REQUEST['phnno'];
        $subject = $_REQUEST['subject'];
        $msg = $_REQUEST['msg'];
        
          
        // Performing insert query execution
        // here our table name is support
        $sql = "INSERT INTO support  VALUES ('$$usernm', 
            '$email','$phnno','$subject','$msg')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>support request sent successfully</h3>"; 
  
            //echo nl2br("\n$first_name\n $last_name\n "
                //. "$gender\n $address\n $email");
        } else{
            echo "ERROR: not succesfull $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
 