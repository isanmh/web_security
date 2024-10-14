<?php

setcookie("user", "Ihsan");
echo $_COOKIE["user"];

// if (!isset($_COOKIE["user"])) {
//     setcookie("user", "Ihsan");
// } else {
//     echo "Welcome, " . $_COOKIE["user"];
// }

// lebih baik menggunkan session
// session_start();

// if (!isset($_SESSION["user"])) {
//     $_SESSION["user"] = "Ihsan";
// } else {
//     echo "Ini session yang sudah ada, " . $_SESSION["user"];
// }
