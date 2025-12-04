<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
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

        .form-box {
            background: white;
            padding: 25px 30px;
            border-radius: 12px;
            box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
            width: 320px;
            border: 2px solid #b3e1ff;
        }

        h2 {
            text-align: center;
            color: #4dc4ff;
            margin-bottom: 20px;
        }

        label {
            color: #0063cc;
            font-weight: bold;
        }

        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin: 8px 0 15px;
            border-radius: 6px;
            border: 1px solid #99d6ff;
        }

        input[type="submit"] {
            width: 100%;
            background-color: #66dbff;
            color: white;
            padding: 10px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #4dcdff;
        }
    </style>
</head>

<body>
    <div class="form-box">
    <h2>(GET)</h2>

    <form action="welcome_get.php" method="get">
        <label>Name:</label>
        <input type="text" name="name">

        <label>E-mail:</label>
        <input type="text" name="email">

        <input type="submit" value="Submit">
    </form>
</div>

</body>
</html>
