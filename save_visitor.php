<?php
include "config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = $_POST['name'];
    $mobile  = $_POST['mobile'];
    $purpose = $_POST['purpose'];

    // Upload photo
    $photoName = time() . "_" . $_FILES['photo']['name'];
    $targetPath = "uploads/" . $photoName;

    move_uploaded_file($_FILES['photo']['tmp_name'], $targetPath);

    // Insert into database
    $sql = "INSERT INTO visitors (name, mobile, purpose, photo)
            VALUES ('$name', '$mobile', '$purpose', '$photoName')";

    mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Entry Successful</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body{
    margin:0;
    padding:0;
    height:100vh;
    font-family:'Segoe UI', Tahoma, sans-serif;
    background:
        linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
        url("https://images.unsplash.com/photo-1504384308090-c894fdcc538d");
    background-size:cover;
    background-position:center;
    display:flex;
    align-items:center;
    justify-content:center;
}

.success-box{
    background:rgba(255,255,255,0.95);
    padding:40px;
    width:420px;
    border-radius:15px;
    text-align:center;
    box-shadow:0 20px 45px rgba(0,0,0,0.4);
}

.success-box h1{
    color:#27ae60;
    margin-bottom:10px;
}

.success-box p{
    font-size:17px;
    color:#444;
    line-height:1.6;
}

.success-box span{
    display:block;
    margin-top:15px;
    font-size:14px;
    color:#777;
}

.success-box a{
    display:inline-block;
    margin-top:25px;
    padding:10px 20px;
    background:#3498db;
    color:#fff;
    text-decoration:none;
    border-radius:6px;
    font-weight:bold;
    transition:0.3s;
}

.success-box a:hover{
    background:#217dbb;
}
</style>
</head>

<body>

<div class="success-box">
    <h1>✔ Visitor Entry Successful</h1>
    <p>
        Thank you for visiting.<br>
        We are happy to have you here.<br>
        Have a great day! 😊
    </p>

    <span>Smart Visitor Log System</span>

    <a href="home.php">Add Another Visitor</a>
</div>

</body>
</html>
