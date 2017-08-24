<?php
include_once 'Db.php'?>
 
<?php
     $id = $_GET['del'];


$Query = "DELETE FROM `Product` WHERE  ProductId='$id'";

if(mysqli_query($Con,$Query))
{
    header("refresh:1; url = ProductSelect.php");
}
else
{
    
    echo"not delete";
}

?>

