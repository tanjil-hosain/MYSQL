<?php
$database = mysqli_connect("localhost", "root", "", "tanjil_70");
if(isset($_POST['btnsubmit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact= $_POST['contact'];
    $address = $_POST['address'];

    $database->query("call call_user('$name', '$email', '$contact', '$address')");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        Name : <br>
        <input type="text" name="name"> <br> <br>
        Email: <br>
        <input type="email" name="email"> <br> <br>
        Contact: <br>
        <input type="text" name="contact"> <br> <br>
        Address: <br>
        <input type="text" name="address"> <br> <br>
        <input type="submit" name="btnsubmit" value="Submit"> 
    </form>
</body>
</html>