<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            background-color: #e6f4ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .welcome-box {
            background: white;
            padding: 25px 35px;
            border-radius: 12px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            width: 350px;
            border: 2px solid #b3e1ff;
            text-align: center;
        }

        h2 {
            color: #4dc4ff;
            margin-bottom: 15px;
        }

        p {
            font-size: 18px;
            color: #0063cc;
            margin: 8px 0;
        }

        a {
            margin-top: 15px;
            display: inline-block;
            text-decoration: none;
            color: white;
            background-color: #66dbff;
            padding: 8px 14px;
            border-radius: 6px;
        }

        a:hover {
            background-color: #4dcdff;
        }
    </style>
</head>

<body>

<?php
$name  = htmlspecialchars($_GET['name']  ?? 'No name provided', ENT_QUOTES, 'UTF-8');
$email = htmlspecialchars($_GET['email'] ?? 'No email provided', ENT_QUOTES, 'UTF-8');
?>

<div class="welcome-box">
    <h2>Welcome!</h2>

    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>

    <a href="form_handling_get.php">Back</a>
</div>

</body>
</html>
