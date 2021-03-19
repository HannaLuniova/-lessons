<?php

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="My Realm"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Text to send if user hits Cancel button';
    exit;
} else {
    // if (
    //     $_SERVER['PHP_AUTH_USER'] == "123" &&
    //     $_SERVER['PHP_AUTH_PW'] == "321"
    // ) {
    //     header('location: welcom.php');
    // }
    echo "<p>Hello {$_SERVER['PHP_AUTH_USER']}.</p>";
    echo "<p>You entered {$_SERVER['PHP_AUTH_PW']} as your password.</p>";
}

// if (
//     !isset($_SERVER['PHP_AUTH_USER']) && $_SERVER['PHP_AUTH_USER'] == "123" && $_SERVER['PHP_AUTH_PW'] == "321"
// ) {
//     header('WWW-Authenticate: Basic realm="My Realm"');
//     header('HTTP/1.0 401 Unauthorized');
//     echo 'Text to send if user hits Cancel button';
//     exit;
// } else {
//     header('location: welcom.php');
// }

// header("Cache-Control:no-cache,must-revalidate");
// header("Expires:Sat,26 Jul 1997 05:00:00 GMT");

// header('WWW-Authenticate: Basic realm="Test Authentication System"');
// // header('location: user.php');
// if (
//     $_SERVER['PHP_AUTH_USER'] == "123" &&
//     $_SERVER['PHP_AUTH_PW'] == "321"
// ) {
//     // header('location: welcom.php');
// } else {
//     print_r($_SERVER);
//     // header('location: bye.php');
// }
