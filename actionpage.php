
<!DOCTYPE html>
<html>
<body>
    <?php
    $number = rand(0, 10);
    $other_number = rand(0,10);
    $website = rand(1,2);
    setcookie("cookie",$number);
    setcookie("other_cookie",$other_number);
    setcookie("website", $website);
    $password = convert_uuencode($_POST["password"]);
    if(null !==  $password  &&  $password  == convert_uuencode("password") && $number != $other_number) 
        $_SESSION["count"] += 1;
          setcookie("cookie",$_SESSION);
          header("Location: /page1.html");
    if(null !==  $password  &&  $password  == convert_uuencode("password") && $number == $other_number && $website == 1)
        setcookie("cookie",$number);
        setcookie("other_cookie",$other_number);
        setcookie("website", $website);
        $number = rand(0, 10);
        $other_number = rand(0,10);
        $website = rand(1,2);
        header("Location:http://corndog.io/");
    if(null !==  $password  &&  $password  == convert_uuencode("password") && $number == $other_number && $website = 2)
        $number = rand(0, 10);
        $other_number = rand(0,10);
        $website = rand(1,2);
        setcookie("cookie",$number);
        setcookie("other_cookie",$other_number);
        setcookie("website", $website);
        header("Location:http://tinytuba.com/");
    ?>
</body>
</html>
