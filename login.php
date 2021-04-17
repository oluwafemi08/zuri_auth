<?php include_once('lib/header.php');
if (isset($_SESSION['loggedIn']) && !empty($_SESSION['loggedIn'])) {
    // redirect to dashboard if user is already loggedin
    header('Location: dashboard.php');
};



?>
<!-- <h2>Login</h2> -->

<p>
    <?php
    if (isset($_SESSION['message']) && !empty($_SESSION['message'])) {
        echo "<span style='color:green'>" . $_SESSION['message'] . "</span>";
        session_destroy();
    }
    ?>
</p>
<form action="loginProcess.php" method="POST">



    <p>
        <?php
        if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
            echo "<span style='color:green'>" . $_SESSION['error'] . "</span>";
            session_destroy();
        }
        ?>

    </p>

    <h2>Login</h2>
    <p>
        <label>Email</label><br />
        <input <?php
                if (isset($_SESSION['email'])) {
                    echo "value=" . $_SESSION['email'];
                }
                ?> type="text" name="email" id="" placeholder="email@domain.com">
    </p>

    <p>
        <label>Password</label><br />
        <input type="password" name="password" id="" placeholder="password">
    </p>



    <p>
        <button type="submit">Login</button>
    </p>
</form>

<?php include_once('lib/footer.php'); ?>