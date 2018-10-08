<?php

    session_start();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username && $password){
        $connect = mysql_connect("localhost","root","") or die("can not connect to the database");
        mysql_select_db("php_login") or die("can not find database");
        $query = mysql_query("SELECT * FROM users where username = '$username'");
        $numrows = mysql_num_rows($query);

        if($numrows !== 0)
        {
            while ($row = mysql_fetch_assoc($query)){

               $db_username = $row['username'];
               $db_password = $row['password']; 
            }

            if($username == $db_username && $password == $db_password ){
                echo "you are logged in. <a href = 'member.php'> Click </a> click here to enter member page";
                $_SESSION ['username'] = $db_username; 
            } else{
                echo "username passwor doesnt match";
            }
        }
        else {
            die("user doesnt exist");
        }
    }
    else {
        echo 'please enter username and password';
    }
?>