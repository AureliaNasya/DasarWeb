<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
        $_SESSION["favcolor"] = "green";
        $_SESSION["favanimal"] = "cat";
        echo "Session variabels are set";
        ?>
    </body>
</html>