<?php

    session_start();
    session_destroy();

    echo "you have been logged out.";
    echo "<bd> <a href ='index.php'> log in </a>";

    
?>