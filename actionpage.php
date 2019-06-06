<?php
session_start();
?>

<!DOCTYPE html>
<html>
<body>
    <?php
    $_SESSION["count"] = 0;
    $password = convert_uuencode($_POST["password"]);
    if (null!==  $password  &&  $password  == convert_uuencode("password")) 
        $_SESSION["count"] += 1;
        header("Location: /page1.html");
        print_r($_SESSION);
    while ($_SESSION["count"] == rand(0, 11))
        header("Location:https://www.tommymcmurtry.com/");
    ?>
</body>
</html>