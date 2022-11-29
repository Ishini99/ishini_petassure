<?php
//if upload button is pressed
$msg ="";
if(isset($_POST['upload'])){
    //the path to uplaod the image
    $target ="images/".basename($_FILES['image']['name']);

    //conect to the database
    $db =mysqli_connect("localhost","root" ,"","photos");
    //get all the submitted data from the form
    $image =$_FILES['image']['name'];
    $text = $_POST['text'];
    $sql="INSERT INTO images (image ,text)VALUES ('$image' ,'$text')";
    mysqli_query($db ,$sql);

    if(move_uploaded_file($_FILES['image']['tmp_name']['name'] ,$target))
    {
        $msg ="Image uploaded succesfully";
    }
    else{
        $msg = "Try Again";
    }

}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type = "text\css" href="style.css">
    <title>Document</title>
</head>
<body>
    <div id="content">
        <form method ="post" action="index.php" enctype="multiple/form.data">
<input type="hidden" name="size" value ="100000000">
<div>
    <input type="file" name="image">
</div>
<div>
    <textarea name="text" id="" cols="40" rows="4" placeholder="hello">
    </textarea>
    <div>
        <input type="submit" name="upload" value="upload image">
    </div>
</div>

        </form>

    </div>
</body>
</html>