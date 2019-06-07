
<!DOCTYPE html>
<html>
<body>
    <?php
    $number = rand(0, 10);
    $website = rand(1,2);
    setcookie("cookie" ,$number);
    setcookie("website", $website);
    $password = convert_uuencode($_POST["password"]);
    if(null !==  $password  &&  $password == convert_uuencode("password") && $number != 10) 
        header("Location: /page1.html");
    if(null !==  $password  &&  $password == convert_uuencode("password") && $number == 10 && $website == 1)
        header("Location:http://corndog.io/");
    if(null !== $password && $password  == convert_uuencode("password") && $number == 10 && $website == 2)
        header("Location:http://tinytuba.com/");
    ?>
</body>
</html>
