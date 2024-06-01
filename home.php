<?php
include "connection.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    
    h2{
        text-decoration: none;
        color: aliceblue;
    font-size: 30px;
    text-transform:uppercase ;
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
    form{
        margin-top: 50px;
        color: aliceblue;
    }
    button:hover{
       background-color: #075055;
    }
    </style>
</head>
<body>
    <header> <ul class="ul1">
        <li class="li1"><a href="movies.php" >Movies</a></li>
         <li  class="li1"><a href="actors.php">Actors</a></li>
         <li  class="li1"><a href="logout.php">Logout</a></li>
                
       
     </ul></header>
    <h1 align="center" >Welcome to the Movie App</h1>

    <form name="" action="insertmovie.php" method="post" align="center">
        
        <div class="login">
            <label for="">what is your favorite movie?</label>
           <input class="form-control" type="text" name="watching" placeholder="" required=""> <br>
          <br> <label for="">What type of movies prefer?</label>
          <input class="form-control" type="text" name="movie_type" placeholder="" required=""> <br>
          <br><label for="">who is your lovely actor?</label>
          <input class="form-control" type="text" name="actor" placeholder="" required=""> <br>
          <br><input class="btn btn-default" type="submit" name="submit" value="submit" > </div>
      </form>
         </div>
  </section>

 

</body>
</html>