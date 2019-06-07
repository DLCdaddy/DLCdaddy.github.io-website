
<!DOCTYPE html>
<html>
<body>
    <?php
    $number = rand(0, 11);
    $other_number = rand(0,11);
    $website = rand(1,10);
    setcookie("cookie",$number);
    setcookie("other_cookie",$other_number);
    setcookie("website", $website);
    $password = convert_uuencode($_POST["password"]);
    if (null!==  $password  &&  $password  == convert_uuencode("password")) 
        $_SESSION["count"] += 1;
          setcookie("cookie",$_SESSION);
          header("Location: /page1.html");
    if ($number == $other_number && $website == 1)
            header("Location:http://corndog.io/");
            $number = rand(0, 11);
            $other_number = rand(0,11);
            $website = rand(1,10);
    if ($number == $other_number && $website = 2)
            header("Location:http://tinytuba.com/");
            $number = rand(0, 11);
            $other_number = rand(0,11);
            $website = rand(1,10);
    if ($number == $other_number && $website = 3)
            header("Location:http://www.movenowthinklater.com");
            $number = rand(0, 11);
            $other_number = rand(0,11);
            $website = rand(1,10);
    if ($number == $other_number && $website = 4)
            header("Location:https://heeeeeeeey.com/");
            $number = rand(0, 11);
            $other_number = rand(0,11);
            $website = rand(1,10);
    if ($number == $other_number && $website = 5)
            header("Location:https://www.eyes-only.net/");
            $number = rand(0, 11);
            $other_number = rand(0,11);
            $website = rand(1,10);
    if ($number == $other_number && $website = 6)
            header("Location:http://burymewithmymoney.com/");
            $number = rand(0, 11);
            $other_number = rand(0,11);
            $website = rand(1,10);
    if ($number == $other_number && $website = 7)
            header("Location:http://burymewithmymoney.com/");
            $number = rand(0, 11);
            $other_number = rand(0,11);
            $website = rand(1,10);
    if ($number == $other_number && $website = 8)
            header("Location:http://beesbeesbees.com/");
            $number = rand(0, 11);
            $other_number = rand(0,11);
            $website = rand(1,10);
    if ($number == $other_number && $website = 9)
            header("Location:https://cat-bounce.com/");
            $number = rand(0, 11);
            $other_number = rand(0,11);
            $website = rand(1,10);
    if ($number == $other_number && $website = 10)
            header("Location:http://ninjaflex.com/");
            $number = rand(0, 11);
            $other_number = rand(0,11);
            $website = rand(1,10);
    ?>
</body>
</html>
