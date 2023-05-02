<!DOCTYPE html>
<html>

<head>
    <title>User Login</title>
    <style>
        body {
            color: black;
            font-family: cursive;
            /* text-align: center; */
            background-image: url(https://wallpapercave.com/wp/wp2301597.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }

        .container {
            width: 50%;
            margin: auto;
            /* text-align: center; */
        }

        h1 {
             text-align: center;
            font-size: 3em;
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
            color: white;
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
            text-align: center;
        }

        .not-registered a {
            color: #eb348f;
            text-decoration: none;
        }

        .not-registered a:hover {
            color: #5599ad;
            transition: 2em;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 28px;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        label {
            font-size: 16px;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="number"],
        input[type="email"],
        input[type="tel"],
        input[type="password"] {
            width: 50%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: none;
            border-radius: 5px;
        }

        input[type="submit"] {
            width: 50%;
            background-color: #3b5998;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2d4373;
        }

        label[for="dob"] {
            width: 50%;
            font-size: 16px;
            margin-bottom: 10px;
        }

        input[type="date"] {
            width: 50%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: none;
            border-radius: 5px;
        }

        h1 {
            font-size: 32px;
            margin-bottom: 28px;
        }

        form {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        input[type="email"],
        input[type="password"] {
            width: 50%;
            padding: 10px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: none;
            border-radius: 5px;
        }

        input[type="submit"] {
            background-color: #3b5998;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #2d4373;
        }

        .container {
            margin-left: 600px;
        }
    </style>
</head>

<body>
    <h1>Create Account</h1>
    <div class="container">
        <form method="POST" action="sucess.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your name" required>
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="phone">Phone Number:</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>

            <label for="confirm_password">Confirm Password:</label>
            <input type="password" id="cpassword" name="cpassword" placeholder="Enter your password again" required>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>

</html>