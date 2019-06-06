

<!DOCTYPE html>
<html>
<body>
    <?php
    $number = rand(0, 11);
    $password = convert_uuencode($_POST["password"]);
    if (null!==  $password  &&  $password  == convert_uuencode("password")) 
        $_SESSION["count"] += 1;
          setcookie("test",$_SESSION);
        header("Location: /page1.html");
    while ($number == rand(0, 11))
        header("Location:https://www.tommymcmurtry.com/");
    ?>
</body>
</html>