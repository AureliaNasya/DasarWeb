<?php
$input = $_POST['input'];
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <input type="text" name="input">
        <button type="submit">Submit</button>
        </form>
    </body>
</html>