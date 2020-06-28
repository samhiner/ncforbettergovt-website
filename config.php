<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'samisadmin');
   define('DB_PASSWORD', '|{[^]}|password|{[^]}|');
   define('DB_DATABASE', 'ncfbg');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>