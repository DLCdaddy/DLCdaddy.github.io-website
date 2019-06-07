
<!DOCTYPE html>
<html>
<body>
    <?php
    $number = rand(0, 11);
    $other_number = rand(0,11);
    $website = rand(1,2);
    setcookie("cookie",$number);
    setcookie("other_cookie",$other_number);
    setcookie("website", $website);
    $password = convert_uuencode($_POST["password"]);
    if (null!==  $password  &&  $password  == convert_uuencode("password") && $number != $other_number) 
        $_SESSION["count"] += 1;
          setcookie("cookie",$_SESSION);
          header("Location: /page1.html");
    if($number == $other_number && $website == 1)
        setcookie("cookie",$number);
        setcookie("other_cookie",$other_number);
        setcookie("website", $website);
        $number = rand(0, 11);
        $other_number = rand(0,11);
        $website = rand(1,10);
        header("Location:http://corndog.io/");
    if ($number == $other_number && $website = 2)
        $number = rand(0, 11);
        $other_number = rand(0,11);
        $website = rand(1,10);
        setcookie("cookie",$number);
        setcookie("other_cookie",$other_number);
        setcookie("website", $website);
        header("Location:http://tinytuba.com/");
    ?>
</body>
</html>
