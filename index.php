<?php
$result = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") $result = $_POST["blaantext"];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple UI</title>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f4f8;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            width: 350px;
            text-align: center;
        }

        input[type="text"] {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ccc;
            margin-bottom: 15px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .results p {
            background: #f0f0f5;
            padding: 10px;
            border-radius: 6px;
            margin: 10px 0;
            font-size: 15px;
            text-align: left;
        }

        .buttons {
            margin-bottom: 30px;
            display: flex;
            gap: 10px;
        }

        button {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            background: #4a7cff;
            color: white;
            transition: 0.s;
        }

        button:hover {
            background: #365edb;
        }

        .secondary {
            background: #e0e0e0;
            color: #333;
        }

        .secondary:hover {
            background: #cecece;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Blaan Dialect Identification</h2>

        <form method="POST">
            <input type="text" name="blaantext" placeholder="Type your Blaan text here..." />

            <div class="buttons">
                <button type="submit" id="btn1">Identify</button>
            </div>
        </form>

        <div class="results">
            <p id="result1">Blaan Text: <?= $result?></p>
            <p id="result2">Translation <?= $result?></p>
        </div>
    </div>

</body>

</html>