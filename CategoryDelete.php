<?php
include_once 'Db.php'?>
 
<?php
     $id = $_GET['del'];


$Query = "DELETE FROM `Category` WHERE  CategoryId='$id'";

if(mysqli_query($Con,$Query))
{
    header("refresh:1; url = CategorySelect.php");
}
else
{
    
    echo"not delete";
}

?>