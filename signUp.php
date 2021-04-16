<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION['name'])) {
        echo $_SESSION['msg'];
    }

    ?>
    <section class="main-container">

        <div class="sidebar_register">
            <h1>Welcome to zuriApp</h1>
            <h5>Have an account?</h5>
            <a href="index.php" class="btn signUp__button sign-up-register">Sign In</a>

        </div>

        <div class="signUp_form_container">
            <h2>Create Account</h2>
            <form method="POST" action="register.php">
                <input type="text" name="email" class="username_box signup-Input" placeholder="Username" required minlength="3">
                <input type="password" id="password" name="password" class="password_box signup-Input" placeholder="Password" pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}' title="Must contain at least one uppercase and  lowercase letter, and at least 5 or more characters" required>




                <input type="password" id="cpassword" name="cpassword" class="password_box signup-Input" placeholder="Confirm Password" pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}' title="Must contain at least one uppercase and  lowercase letter, and at least 5 or more characters" required>


                <button id="submitBtn" class="signIn__button" name="sign_up" type="submit">Sign Up</button>
            </form>
            <p class="mobileSign-up">Already own an account? <a href="index.php">Sign in now</a></p>
            <div class="alert alert-danger" id="password-message">
                <p id="confirmPassMessage">Make sure the password match each other *winks*</p>
            </div>

            <div class="alert alert-danger" id="message">

                <h5>Password must contain the following:</h5>
                <p id="letter" class="invalid">A lowercase letter</p>
                <p id="capital" class="invalid">A capital (uppercase) letter</p>
                <p id="number" class="invalid">A Number</p>
                <p id="length" class="invalid">Minimum 5 characters</p>
            </div>




        </div>


    </section>




</body>

</html>

<!-- file_put_contents(filename, data, mode, context) -->