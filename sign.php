
<?php
    include "connection.php"; 
 
  $username=$_POST['username'];
  $email=$_POST['email'];
  $password=$_POST['password'];


    mysqli_query($db,"INSERT INTO registration VALUES('$username', '$email','$password');");
    
?>
 <!DOCTYPE html>
        <html>
       
       <script type="text/javascript">
        
     window.location="home.php"
    </script>
   
        </html>