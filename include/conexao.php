<?php
$conecta = mysql_connect("localhost", "root", "root") or print (mysql_error()); 
mysql_select_db("tennis", $conecta) or print(mysql_error()); 