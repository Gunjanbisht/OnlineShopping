<?php include 'Db.php';
?>
<?php
if(isset($_POST['submit']))
{
    if(isset($_POST['User'])){
       $User =  $_POST['User'];
}
if(isset($_POST['Password']))
{
       $Password =  $_POST['Password'];
}
    if(empty($_POST['User'])&& empty($_POST['Password']))
{
    echo'<script>alert("both field are required")</script>';
}

            
       $Query = "SELECT * FROM `SuperAdmin` WHERE `User` = '$User' and `Password` = '$Password'";
      
       
       if(mysqli_connect_errno()){
       die("failed to query".mysqli_error($Con));
       }
       $result = mysqli_query($Con,$Query);
      if(mysqli_num_rows($result) == 1)
      {
       echo'successfully login';

     header('refresh:1,index.php?value=show');
} 
      else
        {
            echo'login failed';
            header('refresh:1,SuperAdmin.php');
}

  
      }
  ?>

<!DOCTYPE html>
<html>
    <head>
        <title>Super Admin</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
       </head>
    <body>
      
        <form action="SuperAdmin.php" method="post">
            <table>
            <tr>
            <th>User</th>
            <td><input type="text" name="User" id="User"></td>
            </tr>
            
               
            <tr>
                <th>Password</th>
                <td><input type="password" name="Password" id="Password"></td>
            </tr>
            
                 </table> 
            <a href="Header.php">  <input type="submit" name="submit" value="submit"Onclick = document.getElementById("User","Password").hidden='false';  ></a>
        </form>      
    </body>
</html>
 