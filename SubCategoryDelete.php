<?php
include_once 'Db.php'?>
 
<?php
     $id = $_GET['del'];


$Query = "DELETE FROM `SubCategory` WHERE  SubCategoryId='$id'";

if(mysqli_query($Con,$Query))
{
    header("refresh:1; url = SubCategorySelect.php");
}
else
{
    
    echo"not delete";
}


