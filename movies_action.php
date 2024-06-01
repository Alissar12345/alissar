<?php
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Action</title>
   
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
        margin-top: 5px;
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
        <h1 align="center">Action Movies</h1><br><br>

        <h3>Mad Max: Fury Road (2015)</h3>
        <h3>The Creator (2023)</h3>
        <h3>1917 (2019)</h3>
        <h3>Hellboy II: The Golden Army (2008)</h3>
        <h3>TRON: Legacy (2010)</h3>
        <h3>Inception (2010)</h3>
        <h3>Crouching Tiger, Hidden Dragon (2000)</h3>
        <h3>Mission: Impossible - Fallout (2018)</h3>
        <h3>RRR (2022)</h3>
        <h3>Avatar: The Way of Water (2022)</h3>
  
</body>
</html>