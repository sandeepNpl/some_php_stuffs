<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms</title> 
</head>
<body>
    <!-- <form action="<?php $_SERVER['PHP_SELF']?> "
    method ="post">
    <input type="text" name="fname" placeholder="first Name" autocomplete ="off">
    <br>
    <br>
    <input type="text" name="lname" placeholder="last Name" autocomplete = "off">
    <br>
    <br>
    <button type="submit"> Submit</button>
    </form> -->

    <form action ="welcome.php" method ="post">
        <input type="text" placeholder="First Name" name="fname" autocomplete="off">
        <br>
        <br>
        <input type="text" placeholder="last Name" name="lname" autocomplete ="off">
        <br>
        <br>
        <button type="submit"> Submit</button>
    </form>
    <!-- <?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
    } -->
    ?>
</body>
</html>