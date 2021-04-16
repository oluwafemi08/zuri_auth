<?php

if (isset($_POST['submit'])) {

    $jsonXtension = ".json";
    $db = "db/";
    $redirectHome = "Location: home.php";
    $signIn = "index.html";


    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $userObject = [
        'first_name' => $firstName,
        'last_name' => $lastName,
        'email' => $email,
        'password' => $password
    ];

    $fileName = $db . $email . $jsonXtension;
    $userEncoded = json_encode($userObject);

    if (file_exists($fileName)) {

        echo "<h1>Oops :)</h1><br>
        You have Been registered Prior<br>
        <p>Would you like to signIn instead?</p> <br>
        <a href='$signIn'>Sign-In</a>";
    } else {

        file_put_contents($fileName, $userEncoded);
        header($redirectHome);
    }
}
