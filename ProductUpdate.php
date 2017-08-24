<?php include_once 'Db.php'?>
<?php
     $id = $_GET['edit'];
     $Query = "SELECT * FROM Product WHERE ProductId='$id'";
     $result = mysqli_query($Con,$Query);
     $rows = mysqli_fetch_array($result);
     
     if(isset($_POST['submit']))
     {
     $ProductName = $_POST['ProductName'];
     $ProductQuantity = $_POST['ProductQuantity'];
     $ProductPrice = $_POST['ProductPrice'];
     $ProductImage = $_POST['ProductImage'];
     $QueryUpdate = "UPDATE `Product` SET `ProductName` ='$ProductName',`ProductQuantity`='$ProductQuantity',`ProductPrice`='$ProductPrice',`ProductImage`='$ProductImage',SubCategoryId` = '$SubCategoryId' WHERE ProductId='$id'";
     echo $query;  
     if (mysqli_query($Con, $QueryUpdate))
{
       header("refresh:1,ProductSelect.php");
} 
       else 
{
       echo"not updated";

}
}
?>
 
 
<!DOCTYPE html>
<html>
    <head>
        <title>Product Update</title>  
    </head>
 <body>
    
     <form action="ProductUpdate.php" method="post">
 <table border=1>
    
            <tr>
                
            <th>ProductName</th>
            <td><input type="text" id="ProductName" name="ProductName" value="<?php echo $rows['ProductName']; ?>"></td>
            </tr>
            <tr>
                <th>ProductQuantity</th>
                <td><input type="text" id="ProductQuantity" name="ProductQuantity" value="<?php echo $rows['ProductQuantity'];?>"></td>
            </tr>
            <tr>
                <th>ProductPrice</th>
                <td><input type="text" id="ProductPrice" name="ProductPrice" value="<?php echo $rows['ProductPrice'];?>"></td>
            </tr>      
            <tr>
                <th>ProductImage<th>
                <td><input type="text" id="ProductImage" name="ProductImage" value="<?php echo $rows['ProductImage'];?>"</td>
            </tr>
 </table>
     <input type="submit" name="submit" value="update">
     </form>      
    </body>
</html>
      
    

