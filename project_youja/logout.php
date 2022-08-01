<?php
    session_start();
    unset($_SESSION["userid"]);
    unset($_SESSION["usename"]);

    echo("
    <script>
        location.href = 'index.php';
    </script>
    ");
?>