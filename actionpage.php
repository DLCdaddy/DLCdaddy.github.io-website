<!DOCTYPE html>
<html>
<body>
    <?php
    $password = $_POST["password"];
    if (null!== $password && $password == "password") 
       header("Location: /page1.html")
    ?>
</body>
</html>