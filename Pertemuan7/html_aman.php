<?php
$input = $_POST['input'];
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

$email = $_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $subject = 'Email Validation';
    $pesan = 'Email Anda Valid : ' .$email. "<br>";
} else {
    echo "Email Anda Tidak Valid <br>";
}
?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="email">Email : </label>
        <input type="text" name="email">
        <button type="submit">Submit</button>
        </form>
    </body>
</html>