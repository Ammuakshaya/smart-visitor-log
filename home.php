<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Smart Visitor Log</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
body{
    margin:0;
    padding:0;
    font-family: 'Segoe UI', Tahoma, sans-serif;
    height:100vh;
    background: 
        linear-gradient(rgba(0,0,0,0.55), rgba(0,0,0,0.55)),
        url("https://images.unsplash.com/photo-1521737604893-d14cc237f11d");
    background-size:cover;
    background-position:center;
    display:flex;
    align-items:center;
    justify-content:center;
}

.form-container{
    background: rgba(255,255,255,0.95);
    width:420px;
    padding:30px;
    border-radius:12px;
    box-shadow:0 15px 40px rgba(0,0,0,0.4);
}

h2{
    text-align:center;
    color:#2c3e50;
    margin-bottom:5px;
}

p{
    text-align:center;
    color:#555;
    margin-bottom:20px;
}

label{
    font-weight:600;
    margin-top:10px;
    display:block;
}

input, textarea{
    width:100%;
    padding:10px;
    margin-top:6px;
    border-radius:6px;
    border:1px solid #ccc;
    font-size:14px;
}

input:focus, textarea:focus{
    outline:none;
    border-color:#3498db;
}

button{
    width:100%;
    margin-top:20px;
    padding:12px;
    background:#3498db;
    border:none;
    color:white;
    font-size:16px;
    font-weight:bold;
    border-radius:6px;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#217dbb;
}
</style>
</head>

<body>

<div class="form-container">
    <h2>Smart Visitor Log</h2>
    <p>Please enter your visit details</p>

    <form action="save_visitor.php" method="POST" enctype="multipart/form-data">

        <label>Visitor Name</label>
        <input type="text" name="name" required>

        <label>Mobile Number</label>
        <input type="text" name="mobile" pattern="[0-9]{10}" required>

        <label>Purpose of Visit</label>
        <textarea name="purpose" rows="3" required></textarea>

        <label>Visitor Photo</label>
        <input type="file" name="photo" accept="image/*" required>

        <button type="submit">Submit Entry</button>
    </form>
</div>

</body>
</html>
