
<?php
session_start();
session_destroy();
setcookie('login','true',time() -60);
header("location:login.php");
?>
```