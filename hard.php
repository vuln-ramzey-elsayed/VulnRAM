<?php
// lab3.php
if (isset($_GET['input'])) {
    $input = $_GET['input'];
    header("Location: http://example.com?message=$input");
    exit();
}
?>

<form action="lab7.php" method="GET">
    Enter something: <input type="text" name="input">
    <input type="submit" value="Submit">
</form>
