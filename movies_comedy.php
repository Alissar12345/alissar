<?php
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comedy</title>
   
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
        <h1 align="center">Comedy Movies</h1><br><br>

        <h3>Step Brothers(2008)</h3>
        <h3>Raising Arizona(1987)</h3>
        <h3>Withnail And I(1987)</h3>
        <h3>Back To The Future(1985)</h3>
        <h3>Team America(2004)</h3>
        <h3>Blazing Saddles(1974)</h3>
        <h3>Dr.Strangelove(1964)</h3>
        <h3>Shaun Of The Dead(2004)</h3>
        <h3>Bridesmaids(2011)</h3>
        <h3>Groundhog Day(1993)</h3>
        
  
</body>
</html>