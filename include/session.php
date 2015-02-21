<?php
    session_start();// Starting Session

    // Storing Session
    $user_check=$_SESSION['user'];

    // SQL Query To Fetch Complete Information Of User
    $ses_sql=mysql_query("select * from users where player_email='$user_check' OR assistent_email='$user_check'");
    $row = mysql_fetch_assoc($ses_sql);
    $login_session = $row['id'];
    if(!isset($login_session)){
        mysql_close($connection); // Closing Connection
        header('Location: index.php'); // Redirecting To Home Page
    }
?>