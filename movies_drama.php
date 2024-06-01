<?php
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Drama</title>
   
</head>
<style>*{
    margin: 0;
    padding: 0;
}
body{
   background: linear-gradient(black,rgb(3, 82, 85),black);
   height: 100vh;
  
}
a{
    text-decoration: none;
    color: aliceblue;
}

header{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 30px;
}

ul{
        display: flex;
        justify-content: center;
        align-items: center;
        list-style: none;
      
         
    }
    .ul1{
        border: 2px solid rgb(0, 0, 0);
    }
    .li1{
        border: 2px solid rgb(7, 86, 92) 
    }
    
    .li1:hover{
        background-color: #075055;
    }
    
    li{
       margin-right: 30px;
    }
    a{
    padding: 6px 15px;
    border: 20px;
    }
    h1{
        color: aliceblue;
    }
    h3{
        color: aliceblue;
        text-align: center;
        margin-top: 15px;
    }

</style>
<body>
    
    <header> <ul class="ul1">
        <li class="li1"><a href="home.php" >Home</a></li>
         <li  class="li1"><a href="movies.php">Movies</a></li>
         <li  class="li1"><a href="logout.php">Logout</a></li>
                
        </ul></header>
        <h1 align="center">Drama Movies</h1><br><br>
        
        <h3>The Father</h3>
        <h3>No Country for Old Men</h3>
        <h3>The Truman Show </h3>
        <h3> There Will Be Blood</h3>
        <h3>Taxi Driver </h3>
        <h3> Casablanca </h3>
        <h3>Tokyo Story </h3>
        <h3> The Shawshank Redemption</h3>
        <h3> Schindler's List</h3>
        <h3> Citizen Kane</h3>
  
</body>
</html>