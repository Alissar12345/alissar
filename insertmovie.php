<?php
    include "connection.php"; 
 
  $watching=$_POST['watching'];
  $movie_type=$_POST['movie_type'];
  $actor=$_POST['actor'];


    mysqli_query($db,"INSERT INTO movies VALUES('$watching', '$movie_type','$actor');");

?>
 <!DOCTYPE html>
        <html>
       
       <script type="text/javascript">
        
     window.location="movies.php"
    </script>
   
        </html>