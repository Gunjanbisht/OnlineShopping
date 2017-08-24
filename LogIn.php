<?php
include_once 'Db.php'; 
session_start();
?>
    <?php
    if(isset($_POST['submit']))
    {
        $EmailId = $_POST['EmailId'];
        $Password = $_POST['Password'];
        
        $qury = "SELECT * FROM `RegistrationForm` WHERE EmailId = '$EmailId' and Password = '$Password'";                                                                       
        if(mysqli_connect_errno())
        //echo $qury;
        {
            die("failed to query".mysqli_error($Con));
        }
        $result = mysqli_query($Con,$qury);
        if(mysqli_num_rows($result) == 1)
    {
        echo'successfully login';
        $_SESSION['EmailId'] = '$EmailId';
     
        header('refresh:1,index.php');    
    }
      else{
          
       echo'login failed';
  header('refresh:1,LogIn.php');
  
 }
    }
?>
<html>
    <head>
        <title>LogIn</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/Registration.css">
        <script type="text/javascript" src="../jquery/jquery-3.2.1.min (1).js"></script>
        <script type="text/javascript" src="../jquery/jquery.validate.min.js"></script>
       <script type="text/javascript" src="../jquery/RegJquery.js"></script> 
       <link rel="stylesheet" type="text/css" href="../css/style.css">
      </head>
    <body>
      <div id="wrap">
  <div id="regbar">
    <div id="navthing">
        <h2><a href="LogIn.php" id="loginform">Login</a> | <a href="Registration.php">Register</a></h2>
    <div class="login">
      <div class="arrow-up"></div>
      <div class="formholder">
        <div class="randompad">
        </div></div></div></div></div></div>
        <form id="myclass" action="LogIn.php" method="post">
            <table>
           <tr>
               <th class="font">Email Id</th>
                <td><input type="email" class ="error" name="EmailId" id="EmailId" ></td>&nbsp;&nbsp;&nbsp;&nbsp;
            </tr>
            <tr>
                <th class="font">Password</th>
                <td><input type="password" name="Password" id="Password" class="error"></td>
            </tr>
             </table> 
            <input type="submit" name="submit" value="Log In" class="button">
        </form>  
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <script src="../js/index.js"></script>

    </body>
</html>