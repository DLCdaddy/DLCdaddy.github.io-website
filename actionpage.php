<?php
session_start();
$_SESSION["count"]=0;
?>

<!DOCTYPE html>
<html>
<body>
    <?php
    $number = rand(0, 11);
    setcookie("cookie",$number);
    $password = convert_uuencode($_POST["password"]);
    if (null!==  $password  &&  $password  == convert_uuencode("password")) 
        $_SESSION["count"] += 1;
          setcookie("cookie",$_SESSION);
        header("Location: /page1.html");
    if ($number == rand(0, 11))
        header("Location:https://www.tommymcmurtry.com/");
        $number = 0;
    ?>
</body>
</html>