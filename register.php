<?php
if (isset($_POST['sign_up'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    session_start();
    $url = 'userdata.json'; // path to JSON file
    $data = file_get_contents($url); // put the contents of the file into a variable
    $details = json_decode($data, true); // decode the JSON feed

    $user_found = FALSE;
    foreach ($details as $detail) {
        /* Check Username and Password existence in defined array */
        if ($detail["username"] == $email) {
            $user_found = true;
            break;
        } else {
            $user_found = false;
        }
    }
    if (!$user_found) {
        $newdata = array();
        $arr = array(
            "username" => $email,
            "password" => $password
        );
        array_push($details, $arr);
        $new_data = json_encode($details);
        file_put_contents($url, $new_data);
        $_SESSION['msg'] = "<script type='text/javascript'>
    toastr.success('Account was successfully added')
</script>";
    } else {
        $_SESSION['msg'] = "<script type='text/javascript'>
    toastr.error('Failed to add account, $email already exist')
</script>";
    }
    SESSION_START();
    $_SESSION['name'] = $email;
    //redirect to the dashboard page using php built-in header method
    header("Location: index.php");
    //replace the index.html with the dashboard URL
}
