<?php
include_once 'Db.php'?>
<?php
if(isset($_POST['submit']))
{
$CategoryName = $_POST['CategoryName'];
$Status = $_POST['Status'];
$Qury = "insert into Category(`CategoryName`,`Status`) values ('$CategoryName','$Status')";

mysqli_query($Con,$Qury);
mysqli_close($Con);
header('refresh:1,url=CategorySelect.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Category Add</title>
    </head>
    <body>
        <form action="CategoryAdd.php" method="post">
            <input type="text" name="CategoryName" id="CategoryName" placeholder="enter your category name">
            <input type="number" name="Status" id = "Status" placeholder="enter your status">
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>