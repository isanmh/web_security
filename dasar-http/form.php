<?php

echo "<pre>";
print_r($_POST) . '\n';
print_r($_GET);
echo "</pre>";

if (isset($_POST['isAdmin'])) {
    if ($_POST['isAdmin'] == 1) {
        echo "You are an admin";
        exit;
    } else {
        echo "You are not an admin";
        exit;
    }
}

?>

<form action="" method="POST">
    <input type="text" name="username">
    <br>
    <input type="text" name="password">
    <input type="hidden" name="isAdmin" value="0">
    <button type="submit" value="submit">Submit</button>
</form>