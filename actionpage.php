
<!DOCTYPE html>
<html>
<body>
    <?php
    $number = rand(0, 5);
    $website = rand(1,6);
    setcookie("cookie" ,$number);
    setcookie("website", $website);
    $password = convert_uuencode($_POST["password"]);
    if(null !==  $password  &&  $password == convert_uuencode("password") && $number != 5) 
        header("Location: /page1.html");
    if(null !==  $password  &&  $password == convert_uuencode("password") && $number == 5 && $website == 1)
        header("Location:http://corndog.io/");
    if(null !== $password && $password  == convert_uuencode("password") && $number == 5 && $website == 2)
        header("Location:http://tinytuba.com/");
    if(null !== $password && $password  == convert_uuencode("password") && $number == 5 && $website == 3)
     header("Location:https://trypap.com/");
    if(null !== $password && $password  == convert_uuencode("password") && $number == 5 && $website == 4)
     header("http://www.partridgegetslucky.com/");
    if(null !== $password && $password  == convert_uuencode("password") && $number == 5 && $website == 5)
     header("http://www.hackertyper.com/");
    if(null !== $password && $password  == convert_uuencode("password") && $number == 5 && $website == 6)
     header("http://www.koalastothemax.com/");
    ?>
</body>
</html>
