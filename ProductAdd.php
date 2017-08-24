<?php
include_once 'Db.php'?>
<?php
if(isset($_POST['submit']))
{
$ProductName = $_POST['ProductName'];
$ProductQuantity = $_POST['ProductQuantity'];
$ProductPrice = $_POST['ProductPrice'];
$ProductImage = $_POST['ProductImage'];
$Qury = "insert into Product(`ProductName`,`ProductQuantity`,`ProductPrice`,`ProductImage`) values ('$ProductName','$ProductQuantity','$ProductPrice','$ProductImage')";
mysqli_query($Con,$Qury);
mysqli_close($Con);
header('refresh:1,url=ProductSelect.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>ProductAdd</title>
    </head>
    <body>
        <form action="ProductAdd.php" method="post">
            <input type="text" name="ProductName" id="ProductName" placeholder="enter a Productname">
            <input type="text" name="ProductQuantity" id="ProductQuantity" placeholder="enter a ProductQuantity ">
            <input type="text" name="ProductPrice" id="ProductPrice" placeholder="enter a productprice">
            <input type="text" name="ProductImage" id ="ProductImage" placeholder="enter a productimage">
            <input type="submit" name="submit" value="submit">
        </form>
    </body>
</html>