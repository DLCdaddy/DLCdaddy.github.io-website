<!DOCTYPE html>
<html>
<body>
    <?php
    session_start();
    $_SESSION["password"] = convert_uuencode($_POST["password"]);
    if (null!==  $_SESSION["password"]  &&  $_SESSION["password"]  == convert_uuencode("password")) 
        header("Location: /page1.html");
    else 
        header("Location: /Index.html");
    ?>
</body>
</html>