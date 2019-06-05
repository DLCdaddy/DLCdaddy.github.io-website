<!DOCTYPE html>
<html>
<body>
    <?php
    
    $password = convert_uuencode($_POST["password"]);
    if (null!== $password && $password == convert_uuencode("password")) 
        header("Location: /page1.html");
    else 
        header("Location: /Index.html");
    ?>
</body>
</html>