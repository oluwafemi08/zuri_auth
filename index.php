<?php include_once('lib/header.php'); ?>

<div class="container-fluid main-content">
    <div class="row">
        <!-- <div class="col-lg-12"> -->
        <div class="col-lg-6 col-md-6 pull-left sidebar">
            <div class="sidebar-content">
                <h1>Welcome To ZuriApp</h1>
                <p>Enter your details </p>
                <p>and start your journey with us </p>
                <a href="register.php" class="btn register__button">Sign Up</a>
            </div>
        </div>

        <div class="col-lg-6 col-md-6 pull-right">
            <div class="login_form_container">
                <h2>Sign in to ZuriApp</h2>
                <form method="POST" action="login.php">
                    <div class='form-group'>
                        <input type="text" name="email" class="form-control username_box" placeholder="email@domain.com" required minlength="3">
                    </div>
                    <div class="form-group">
                        <input type="password" id="password" name="password" class="form-control password_box" placeholder="Password" pattern='[a-zA-Z]{3,15}' title="Must contain at least one uppercase and  lowercase letter, and at least 3 or more characters" required>
                    </div>
                    <div class="forgot">
                        <a href="#">Forgot Password?</a>
                    </div>
                    <button class="signIn__button" name="login" type="submit">Sign In</button>
                </form>
                <div id="message">
                    <div class="alert alert-danger" role="alert">
                        <h5>Password must contain the following:</h5>
                        <p id="letter" class="invalid">&bull; A lowercase letter</p>
                        <p id="capital" class="invalid">&bull; A capital (uppercase) letter</p>
                        <p id="length" class="invalid">&bull; Minimum 3 characters</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- </div> -->
        <!-- </div>
    <div class="login_form_container">
        <h2>Sign in to Code</h2>
        <form method="POST" action="login.php">
            <input type="text" name="email" class="username_box" placeholder="Username" required minlength="3">
            <input type="password" id="password" name="password" class="password_box" placeholder="Password" pattern='[a-zA-Z]{3,15}' title="Must contain at least one uppercase or lowercase letter, and at least 3 or more characters" required>
            <a href="#">Forgot Password?</a>
            <button class="signIn__button" type="submit">Sign In</button>
        </form>
        <div id="message">
            <h5>Password must contain the following:</h5>
            <p id="letter" class="invalid">A lowercase letter</p>
            <p id="capital" class="invalid">A capital (uppercase) letter</p>
            <p id="length" class="invalid">Minimum 3 characters</p>
        </div>
        <section class="main-container">

    </div>
    <div class="sidebar">
        <img src="programming-code.png" alt="">
        <h1>Welcome To ZuriApp</h1>
        <p>Enter your details </p>
        <p>and start your journey with us </p>
        <a href="register.php" class="btn register__button">Sign Up</a>

        </section>

    </div>

    <div class="login_form_container">
        <h2>Sign in to Code</h2>
        <form method="POST" action="login.php">
            <input type="text" name="email" class="username_box" placeholder="Username" required minlength="3">
            <input type="password" id="password" name="password" class="password_box" placeholder="Password" pattern='[a-zA-Z]{3,15}' title="Must contain at least one uppercase and  lowercase letter, and at least 3 or more characters" required>
            <a href="#">Forgot Password?</a>
            <button class="signIn__button" type="submit">Sign In</button>
        </form>
        <div id="message">
            <h5>Password must contain the following:</h5>
            <p id="letter" class="invalid">A lowercase letter</p>
            <p id="capital" class="invalid">A capital (uppercase) letter</p>
            <p id="length" class="invalid">Minimum 3 characters</p>
        </div>

    </div>

    </section>
    <script src="script.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> -->

        <?php include_once('lib/footer.php'); ?>