<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CTF Challenge</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('https://images2.alphacoders.com/136/1369365.jpeg') no-repeat center center fixed;
            background-size: cover;
            text-align: center;
        }
        .container {
            margin: 2em auto;
            max-width: 50vw;
            padding: 20px;
            background: rgba(255, 255, 255, 0.44); 
            border-radius: 8px;
            box-shadow: 0 0 10px rgb(0, 238, 255);
        }
        h1 {
            color: #333;
        }
        form {
            margin: 20px 0;
        }
        input[type="text"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            width: calc(100% - 24px);
            margin-bottom: 10px;
        }
        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: #fff;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #000000;
        }
        #username {
            font-size: 155%;
            font-weight: bolder;
        }

        #result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the CTF Challenge</h1>
        <p>Can you find the hidden one-piece?</p>
        <form method="POST">
            <label for="username">Enter the Sacred Word:</label>
            <input type="text" name="username" id="username" required>
            <input type="submit" value="Submit">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = strtolower($_POST['username']); // Get user input and convert to lowercase
            if ($input === 'joyboy') {
                echo "<h1>Congratulations! Here is your flag: CTF{the_legend_of_joyboy}</h1>";
            } else {
                echo "<h1>Incorrect input, try again!</h1>";
            }
        }
        ?>
    </div>
</body>
</html>

