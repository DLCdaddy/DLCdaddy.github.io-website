<!DOCTYPE html>
<html>
<head> <script type="text/javascript" src="/scripts.js"> </script></head>
<body>
    <?php
    $password = $_POST["password"];
    if (null!== $password && $password == "password") 
    {eval("echo('<script>window.location.assign('/page1.html');</script>');");}
    ?>
</body>
</html>