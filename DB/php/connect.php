<html>
 <head>
  <title>Index - PHP</title>
 </head>
 <body>
 <?php
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "colegioa_chromeuser";
 $dbpass = "mateus@2023";
 $db = "colegioa_controlechrome";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }
   
?>
 </body>
</html>