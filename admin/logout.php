<?php
session_destroy();
echo "<SCRIPT type='text/javascript'> 
        window.location.replace(\"http:login.php\");
    </SCRIPT>";

?>