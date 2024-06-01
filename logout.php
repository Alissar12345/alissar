<?php
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
  
</head>
<style>
    body {
  font-family: italic;
  background: linear-gradient(black,black,rgb(1, 88, 88),black,black);
  color: #ebecec; /* white text */
  margin-top: 200px;
}

h1{
    text-align: center;
}
a{
    color: rgb(232, 240, 241);
  
}
a:hover{
    background-color: rgb(3, 59, 59);
}
img{
    max-width: 100%;
}
</style>
<body>
    <h1>You have been logged out</h1>
    <h1><a href="login.html">Login again</a></h1>
</body>
</html>