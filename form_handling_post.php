<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
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

        .form-box {
            background: white;
            padding: 25px 30px;
            border-radius: 12px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            width: 320px;
            border: 2px solid #ffb3d9;
        }

        h2 {
            text-align: center;
            color: #ff4da6;
            margin-bottom: 20px;
        }

        label {
            color: #cc0066;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0 15px;
            border-radius: 6px;
            border: 1px solid #ff99cc;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #ff66b3;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #ff4da6;
        }
    </style>
</head>

<body>
    <div class="form-box">
    <h2>(POST)</h2>

    <form action="welcome.php" method="post">
        <label>Name:</label>
        <input type="text" name="name">

        <label>E-mail:</label>
        <input type="text" name="email">

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>