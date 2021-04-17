<?php session_start();
if (isset($_SESSION['loggedIn']) && !empty($_SESSION['loggedIn'])) {
    // redirect to dashboard if user is already loggedin
    header('Location: dashboard.php');
};

$errorCount = 0;

//Verfiying data or Vlaidation
$first_name = $_POST['first_name'] != "" ? $_POST['first_name'] : $errorCount++;
$last_name = $_POST['last_name'] != "" ? $_POST['last_name'] : $errorCount++;
$email = $_POST['email'] != "" ? $_POST['email'] : $errorCount++;
$password = $_POST['password'] != "" ? $_POST['password'] : $errorCount++;
$dob = $_POST['dob'] != "" ? $_POST['dob'] : $errorCount++;

$_SESSION['first_name'] = $first_name;
$_SESSION['last_name'] = $last_name;
$_SESSION['email'] = $email;
$_SESSION['password'] = $password;
$_SESSION['dob'] = $dob;

if ($errorCount > 0) {
    $session_error = "You have " . $errorCount . " error in your form";


    if ($errorCount > 1) {
        $session_error .= "s";
    }

    $session_error .= " in your form";
    $_SESSION["error"] =  $session_error;

    header('Location: register.php');
} else {
    //count all users
    $allUsers = scandir("db/users/");
    $countAllUser = count($allUsers);

    $newUserId = ($countAllUser - 1);

    $userObject = [
        'id' => $newUserId,
        'first_name' => $first_name,
        'last_name' => $last_name,
        'email' => $email,
        'password' => password_hash($password, PASSWORD_DEFAULT),
        'dob' => $dob
    ];


    // query if email/user exists;

    for ($counter = 0; $counter < $countAllUser; $counter++) {
        $currentUser = $allUser[$counter];

        if ($currentUser == $email . ".json") {
            $_SESSION["error"] = "Registration Failed, User already exists";
            header("Location: register.php");
            die();
        }
    }

    //save to database
    file_put_contents("db/users/ " . $email . " .json", json_encode($userObject));
    $_SESSION["message"] = "Registration Successful, Login to continue " . $first_name;
    header("Location: login.php");
}
