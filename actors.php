<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actors</title>
    
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
        color: antiquewhite;
    }
    .ul2{
        margin-top: 100px;
       
    }
    .li2{
        border: 5px solid rgb(7, 86, 92) 
    }
    
    .li2:hover{
        background-color: #040505;
    }
h2{
    color: antiquewhite;
}
</style>
<body>
    <header> <ul class="ul1">
        <li class="li1"><a href="home.php" >Home</a></li>
         <li  class="li1"><a href="movies.php">Movies</a></li>
         <li  class="li1"><a href="logout.php">Logout</a></li>
                
        </ul></header>
    <h1 align="center">Famous actors by Movie Type</h1>
    
    <ul class="ul2">
        <li class="li2"><h2>Action: </h2></li><h2> Tom Cruise, Scarlett Johansson </h2></ul><br>

       <ul class="ul3"><li class="li2"><h2> Comedy: </h2></li><h2>Jim Carrey, Melissa McCarthy</h2></ul> <br>
        <ul class="ul4"><li class="li2"><h2> Drama: </h2></li> <h2>Meryl Streep, Denzel Washington</h2></ul>
   
</body>
</html>