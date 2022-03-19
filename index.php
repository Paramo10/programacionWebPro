<?php
    //Init global Session with false
    session_start();
    $_SESSION["iniciaSesion"] = "false";
     
    echo '<script>
        window.location = "Views/login.php"
    </script>';
?>
