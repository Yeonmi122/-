<?php
    session_start();
    unset($_SESSION["userid"]);
    unset($_SESSION["usename"]);

    echo("
    <script>
        location.href = '/p2/yym/project_youja/index.php';
    </script>
    ");
?>