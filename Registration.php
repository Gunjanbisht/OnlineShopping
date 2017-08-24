<?php
include_once 'Db.php';?>
<?php
   if(isset($_POST['submit']))
   {
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $EmailId = $_POST['EmailId'];
    $Password = $_POST['Password'];
    $Qury="INSERT INTO `RegistrationForm`(`FirstName`, `LastName`, `EmailId`, `Password`) VALUES('$FirstName','$LastName','$EmailId','$Password')";                                                                       
  
    mysqli_query($Con,$Qury);
    mysqli_close($Con);

   }?>

<html>
    <head>
        <title>user form</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/Registration.css">
        <script type="text/javascript" src="../jquery/jquery-3.2.1.min (1).js"></script>
        <script type="text/javascript" src="../jquery/jquery.validate.min.js"></script>
        <script type="text/javascript" src="../jquery/RegJquery.js"></script>
        <link rel="stylesheet" type="text/css" href="../css/style.css"/>
       </head>
    <body>
      
        <form id="myclass" action="Registration.php" method="post">
            <table>
  <div id="wrap">
  <div id="regbar">
    <div id="navthing">
    <h2><a href="LogIn.php" id="loginform">Login</a> | <a href="Registration.php">Register</a></h2>
    <div class="login">
      <div class="arrow-up"></div>
      <div class="formholder">
        <div class="randompad">
        </div></div></div></div></div></div>

            <tr>
            <th class="font">First Name</th>
            <td><input type="text" class="text" id="FirstName" name="FirstName"></td>
            </tr>
            
               
            <tr>
                <th class="font">Last Name</th>
                <td><input type="text" class="text" name="LastName" id="LastName"></td>
            </tr>
            <tr>
                <th class="font">Email Id</th>
                <td><input type="email" class="text" name="EmailId" id="EmailId"></td>
            </tr>
            <tr>
                <th class="font">Password</th>
                <td><input type="password" class="text" name="Password" id="Password"></td>
            </tr>
            <tr>
                <th class="font">Retype Password</th>
            <td><input type="password" class="text" name="RetypePassword"></td>
            
            </tr>
            </table> 
            <input type="submit" class="submit" name="submit" value="submit">
           
        </form>      
    </body>
</html>