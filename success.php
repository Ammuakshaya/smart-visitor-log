<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Entry Confirmed</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            min-height: 100vh;
            background:
                linear-gradient(135deg, rgba(0,0,0,0.7), rgba(0,0,0,0.5)),
                url("assets/images/bg.jpg") no-repeat center center fixed;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
        }

        .success-card {
            background: rgba(255,255,255,0.2);
            backdrop-filter: blur(16px);
            padding: 50px;
            border-radius: 20px;
            text-align: center;
            color: white;
            box-shadow: 0 25px 50px rgba(0,0,0,0.6);
        }

        .success-card h2 {
            color: #00ffcc;
            margin-bottom: 15px;
        }

        .success-card p {
            font-size: 16px;
            opacity: 0.9;
        }

        .btn-home {
            margin-top: 25px;
            background: linear-gradient(135deg, #00c6ff, #0072ff);
            border: none;
            padding: 12px 30px;
            border-radius: 30px;
            color: white;
            font-weight: 600;
        }
    </style>
</head>

<body>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <div class="success-card">
        <h2>✅ Entry Confirmed</h2>
        <p>Thank you for visiting.</p>
        <p>Your details have been successfully recorded.</p>

        <a href="home.php" class="btn btn-home">New Entry</a>
    </div>
</div>

</body>
</html>
