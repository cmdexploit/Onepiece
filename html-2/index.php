<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>It's so simple isn't it?</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom right, rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('https://images2.alphacoders.com/136/1369365.jpeg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
            backdrop-filter: blur(10px);
            padding: 40px;
            max-width: 40vw;
            color: white;
            text-align: center;
        }

        h1 {
            font-size: 2.5em;
            color: #00eaff;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
        }

        p {
            font-size: 1.2em;
            margin-bottom: 20px;
        }

        form {
            margin: 20px 0;
        }

        input[type="text"] {
            padding: 15px;
            width: calc(100% - 30px);
            margin-bottom: 20px;
            border: none;
            border-radius: 8px;
            font-size: 1em;
            background-color: rgba(255, 255, 255, 0.8);
            color: #333;
        }

        input[type="submit"] {
            padding: 12px 30px;
            border: none;
            border-radius: 8px;
            background: linear-gradient(135deg, #00eaff, #007bff);
            color: white;
            font-size: 1.1em;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background: linear-gradient(135deg, #007bff, #00eaff);
        }

        a {
            color: #00eaff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        #username {
            font-size: 1.5em;
            font-weight: bold;
            color: #fff;
        }
        #result {
        	font-size: 12px;
        	margin-top: 20px;
        	font-weight: bold;
        	color: #ffffff;
        }
        
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to the CTF Challenge</h1>
        <p>Can you find the hidden "one-piece" on this page?</p>
        <form method="post">
            <label for="username" id="username">Enter the Sacred Word:</label>
            <input type="text" name="username" required>
            <input type="submit" value="Submit">
        </form>
        
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $input = strtolower($_POST['username']); 
            if ($input === 'joyboy5') {
                echo "<h1>Congratulations! Here is your flag: HACKOPS{the_1eg3nd_of_j0yb0y}</h1>";
            } else {
                echo "<h1>Incorrect input, try again!</h1>";
            }
        }
        ?>
        <p>Visit our <a href="http://192.168.1.23/CTF">website</a> for more exciting challenges!</p>
    </div>
</body>
</html>

