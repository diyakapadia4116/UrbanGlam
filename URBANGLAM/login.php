<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$datafile = __DIR__ . "/login_data.txt"; // ensures file is in same folder as login.php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["email"]) && isset($_POST["password"])) {
        $email = htmlspecialchars($_POST["email"]);
        $password = htmlspecialchars($_POST["password"]);

        $entry = "Email: $email | Password: $password\n";
        file_put_contents($datafile, $entry, FILE_APPEND);

        echo "Login details saved successfully!";
    } else {
        echo "Email or Password missing!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup-UrbanGlam</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            background-color: rgb(243, 221, 202);
            font-family: 'Georgia', serif;
            color: #4b2e2e;
        }

        header {
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            background-color: rgb(92, 64, 51);
            padding: 22px 10px;
            text-align: center;
        }

        header h1 {
            color: rgb(245, 222, 179);
            font-family: 'Georgia', serif;
            font-size: 2.5rem;
        }

        p {
            color: rgb(245, 222, 179);
            margin: 5px;
        }

        hr {
            height: 0.1px;
            background-color: #c2a58c;
            width: 100%;
            margin: 20px auto;
            border: none;
        }

        form {
            background-color: rgb(209, 185, 164);
            width: 45%;
            padding: 40px;
            margin: auto;
            border: none;
            border-radius: 15px
        }

        form h2 {
            color: rgb(110, 38, 14);
            font-family: 'Georgia', serif;
            font-size: 2rem;
        }

        footer {
            background-color: rgb(92, 64, 51);
            padding: 20px 0;
            text-align: center;
        }

    </style>
</head>

<body>
    <!-- header section -->
    <header>
        <h1><b><i> Login/SignUp </i></b></h1>
        <br>
        <p><i><u><b>Your account gives faster order & exclusive deals!</b></u></i>
        </p>
    </header>
   
    <!-- login section -->
    <main>
        <br>
        <form method="post" onsubmit= "return validateLogin()">
            <h2>
                <center>Login</center>
            </h2>
            <label for = "email"><b>Email</b></label><br>
            <input type ="email"  id = "email" name = "email" placeholder="Enter your Email ID" style="width: 100%; padding: 8px"><br>
            <br>
            <label for = "password"><b>Password</b></label><br>
            <input type="password"  id = "password" name="password" placeholder="Enter your password" style="width: 100%; padding: 8px"><br>
            <br><br>
            <center>
                <input type="submit" value="Login"
                    style="padding: 10px 25px;background-color: white;color:rgb(110,38,14) ;border: none; border-radius: 8px">
            </center>
        </form>
        <script src = "login_validation.js"></script>
        <br>
        <hr>
        <br>

        <!-- Signup section -->
        <form style="background-color:rgb(189, 160, 132); width: 45%; padding: 40px; margin: auto;border: none;
                border-radius: 15px " method="post" onsubmit="return validateSignUp()">
            <h2 style="color:rgb(92,64,51);">
                <center>New here? Signup</center>
            </h2>
            <label for = "SignUpName"><b>Name</b></label><br>
            <input type="text" id = "SignUpName" placeholder="Enter your name" style="width: 100%; padding: 8px"><br>
            <br>
            <label for = "SignUpEmail"><b>Email</b></label><br>
            <input type="email" id = "SignUpEmail" placeholder="Enter your Email ID" style="width: 100%; padding: 8px"><br>
            <br>
            <label for = "SignUpPassword"><b>Password</b></label><br>
            <input type="password"  id = "SignUpPassword" placeholder="Enter your password" style="width: 100%; padding: 8px">
            <br><br>
            <label for = "Cpassword"><b> Confirm Password</b></label><br>
            <input type="password" id = "Cpassword" placeholder="Enter your Confirm password" style="width: 100%; padding: 8px"><br>
            <br><br>
            <center>
                <input type="submit" value="Signup"
                    style="padding: 10px 25px;background-color: white;color: rgb(92,64,51);border: none; border-radius: 8px">
            </center>
        </form>
        <script src = "login_validation.js"></script>
        <br><br>
     </div>
        
    </main>
    <hr>
    <!-- footer section -->
    <footer>
        <center>
            <p style="color: rgb(245,222,179);"><i>We value your privacy. Your information is safe with us.</i></p>
            <P style="color: rgb(245,222,179); margin: 5px 0;">&copy;2025.<span style="color: rgb(245,222,179);"><b><i>
                            UrbanGlam
                        </i></b> All rights reserved.</span>
            </P>
        </center>
    </footer>
</body>

</html>