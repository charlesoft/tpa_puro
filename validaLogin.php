<?php
include("include/conexao.php");

session_start(); // Starting Session

$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        echo "Email or Password is invalidao";
    }
    else
    {
        // Define $email and $password
        $email = $_POST['email'];
        $password = $_POST['password'];

        // To protect MySQL injection for Security purpose
        $email = stripslashes($email);
        $password = stripslashes($password);
        $email = mysql_real_escape_string($email);
        $password = mysql_real_escape_string($password);

        $query = mysql_query("SELECT * FROM users WHERE player_email = '$email' AND player_password = '$password';"); 
        $rows = mysql_num_rows($query);

        if ($rows == 1) {
            $_SESSION['user'] = $email; // Initializing Session
            $dados = mysql_fetch_array($query);
            $_SESSION['name'] = $dados['player_name'];
            header("location: home.php"); // Redirecting To Other Page
        } else  {
            $query = mysql_query("SELECT * FROM users WHERE assistent_email = '$email' AND assistent_password = '$password';");
            $rows = mysql_num_rows($query);   
            if ($rows == 1) {
                $_SESSION['user'] = $email; // Initializing Session
                $dados = mysql_fetch_array($query);
                $_SESSION['name'] = $dados['assistent_name'];
                header("location: home.php"); // Redirecting To Other Page
            } else {
                echo "Email or Password is invalid";
            }
        }
                
      
    }

}
mysql_close($conecta);