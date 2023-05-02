<!DOCTYPE html>
<html>

<head>
    <title>User Login</title>
    <style>
        body {
            color: white;
            font-family: cursive;
            background-image: url(https://wallpapercave.com/wp/wp2301597.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        .container {
            width: 50%;
            margin: auto;
            margin-left: 600px;
        }

        h1 {
            font-size: 37px;
            text-align: center;
            color: black;
        }

        .form-group {
            margin: 20px 0;
        }

        label {
            display: block;
            font-size: 1.5em;
            margin-bottom: 5px;
            color: black;
        }

        input[type="text"],
        input[type="password"] {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            width: 50%;
            font-size: 1em;
        }

        button[type="submit"] {
            display: block;
            margin: 20px auto 0;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #4CAF50;
            color: black;
            font-size: 1.5em;
            border: none;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #3e8e41;
        }

        .not-registered {
            font-size: 22px;
            margin-top: 20px;
            color: black;
        }

        .not-registered a {
            color: #eb348f;
            text-decoration: none;
        }

        .not-registered a:hover {
            color: #5599ad;
            transition: 2em;
        }
    </style>
</head>

<body>
    <h1>User Login</h1>
    <div class="container">

        <form action="verify.php" method="POST">
            <div class="form-group">
                <label for="username">Email:</label>
                <input type="text" id="username" name="username" required placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required placeholder="Enter your password">
            </div>
            <p class="not-registered">Not a User? <a href="signup.php" target="_self">Create Account</a></p>
    </div>
    <button type="submit" class="button">Submit</button>
    </form>

</body>

</html>