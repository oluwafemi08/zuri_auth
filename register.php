<?php include_once('lib/header.php');

if (isset($_SESSION['loggedIn']) && !empty($_SESSION['loggedIn'])) {
    header("Loacation: dashboard.php");
}
?>

<p><strong>Welcome Please Register</strong></p>
<p>All fields are required</p>

<form action="registerProcess.php" method="POST">
    <p>
        <?php

        if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
            echo "<span style='color:red'>" . $_SESSION['error'] . "</span>";
            // session_unset();
            session_destroy();
        }

        ?>
    </p>

    <p>
        <label>First Name</label><br />
        <input <?php
                if (isset($_SESSION['first_name'])) {
                    echo "value=" . $_SESSION['first_name'];
                }
                ?> type="text" name="first_name" id="" placeholder="">
    </p>

    <p>
        <label>Last Name</label><br />
        <input <?php
                if (isset($_SESSION['last_name'])) {
                    echo "value=" . $_SESSION['last_name'];
                }
                ?> type="text" name="last_name" id="" placeholder="">
    </p>

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
        <label>dob</label><br />
        <input <?php
                if (isset($_SESSION['dob'])) {
                    echo "value=" . $_SESSION['dob'];
                }
                ?> type="date" name="dob" id="" placeholder="mm/dd/yyyy">
    </p>

    <p>
        <button type="submit">Register</button>
    </p>
</form>


<?php include_once('lib/footer.php'); ?>