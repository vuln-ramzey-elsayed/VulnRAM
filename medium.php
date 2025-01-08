<?php
// lab2.php
if (isset($_GET['input'])) {
    $input = urldecode($_GET['input']); // Decode first time
    $input = urldecode($input); // Decode second time
    echo "Your input is: $input";
}
echo 'Difficulty level is medium'
?>

<form action="medium.php" method="GET">
    Enter something: <input type="text" name="input">
    <input type="submit" value="Submit">
</form>
