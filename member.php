<?php
    session_start();

    if(!$_SESSION['username']){
        die("you are not logged in");

    } else
    {
        
        echo "welcome  " ;
        echo $_SESSION['username'];
        echo "<bd> <a href ='logout.php'> Log out </a>";
    }

   
    
?>