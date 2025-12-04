<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            background-color: #ffe6f2; 
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
            border: 2px solid #ffb3d9;
            text-align: center;
        }

        h2 {
            color: #ff66b3;
            margin-bottom: 15px;
        }

        p {
            font-size: 18px;
            color: #cc0066;
            margin: 8px 0;
        }

        a {
            margin-top: 15px;
            display: inline-block;
            text-decoration: none;
            color: white;
            background-color: #ff66b3;
            padding: 8px 14px;
            border-radius: 6px;
        }

        a:hover {
            background-color: #ff3385;
        }
    </style>
</head>

<body>

<div class="welcome-box">
    <h2>Welcome!</h2>

    <p><strong>Name:</strong> <?php echo $_POST["name"]; ?></p>
    <p><strong>Email:</strong> <?php echo $_POST["email"]; ?></p>

    <a href="form_handling_post.php">Back</a>
</div>

</body>
</html>
