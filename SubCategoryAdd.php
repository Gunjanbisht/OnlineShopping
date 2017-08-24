<?php
include_once 'Db.php';?>
<?php

if(isset($_POST['submit']))
{
$SubCategoryName = $_POST['SubCategoryName'];
$CategoryId = $_POST['CategoryId'];
$Qury = "insert into `SubCategory`(`SubCategoryName`,`CategoryId`) values ('$SubCategoryName','$CategoryId')";
mysqli_query($Con,$Qury);
mysqli_close($Con);
header('refresh:1,url=SubCategorySelect.php');
}
?>
           <!DOCTYPE html>
<html>
    <head>SubCategoryAdd</head>
    <body>
        <form action="SubCategoryAdd.php" method="post">
            <input type="text" name="SubCategoryName" placeholder="enter your subcategory name">
            <input type="number" name="CategoryId" placeholder="enter your CategoryId">
             
            <input type="submit" name="submit" value="submit">
        
         
        </form>
    </body>
</html