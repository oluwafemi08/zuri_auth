<?php include_once('lib/header.php');

if (isset($_SESSION['loggedIn'])) {
    header("Loacation: login.php");
}
?>

<h2>Dashboard</h2>

<p> LoggedIn User ID: <?php echo $_SESSION['loggedIn'] ?> </a>



    <?php include_once('lib/footer.php'); ?>