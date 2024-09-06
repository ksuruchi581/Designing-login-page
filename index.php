
<?php
session_start();
if (!isset($_SESSION["user"])) {
    header("Location: login.php");
    exit(); // Ensure that no further code is executed after redirection
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: lightblue; /* Add light blue background */
            color: #008080; /* Change the font color to teal */
        }

        .container {
            text-align: center;
            margin-top: 50px;
        }

        h1 {
            color: #008080;
        }

        h2 {
            color: #333;
        }

        p {
            font-size: 18px;
            margin-top: 20px;
        }

        .features {
            margin-top: 50px;
        }

        .features ul {
            list-style-type: none;
            padding: 0;
        }

        .features li {
            margin-bottom: 20px;
            font-size: 20px;
        }

        .contact {
            margin-top: 50px;
        }

        .address {
            font-size: 18px;
            margin-top: 20px;
        }

        .btn-logout {
            margin-top: 40px;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 10px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>

    <link rel="icon" href="C:\Users\HP\OneDrive\Desktop" type="image/png">

    <title>Welcome to CCL</title>
</head>
<body>
    <div class="container">
        <h1>CCL</h1>
        <p>A MINIRATNA COMPANY</p>
        <p>A GOVERNMENT OF INDIA UNDERTAKING</p>
        <div class="ABOUT US">
    <h2>ABOUT US</h2>
    <div class="row">
        <div class="col-md-4 feature-item">
            <button type="button" class="btn btn-danger btn-lg">CCL NEWS</button>
        </div>
        <div class="col-md-4 feature-item">
            <button type="button" class="btn btn-danger btn-lg">WHAT'S NEW</button>
        </div>
        <div class="col-md-4 feature-item">
            <button type="button" class="btn btn-danger btn-lg">CHAIRMAN'S DESK</button>
        </div>
    </div>
</div>

        <div class="contact">
            <h2>Contact Us</h2>
            <div class="address">
                <p><strong>ADDRESS</strong></p>
                <p>Central Coalfields Limited<br>Darbhanga House, Kutchery Road,<br>Ranchi-834029, Jharkhand</p>
                <p>Toll Free (Samadhan Cell): 180034560241</p>
                <p>Whatsapp No.: 7250141000</p>
            </div>
        </div>

        <a href="logout.php" class="btn btn-warning btn-logout">Logout</a>
    </div>

    <footer>
        &copy; <?php echo date("Y"); ?> CCL. All rights reserved.
    </footer>
</body>
</html>
