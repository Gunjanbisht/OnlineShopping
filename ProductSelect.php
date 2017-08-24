<?php
include_once 'Db.php';?>
<?php
$result ="SELECT * FROM Product";
$data = mysqli_query($Con, $result);
$num = mysqli_num_rows($data);
mysqli_close($Con);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Product list</title>
    </head>
    <body>
            <table border="1">
                
                    <th> ProductCategory_Id </th>
                    <th> ProductName </th>
                    <th> ProductQuantity </th>
                    <th> ProductPrice </th>
                    <th> ProductImage </th>
                    <th> Update </th>
                    <th> Delete </th>
                <?php
                for($i=1;$i<=$num;$i++){
                $rows = mysqli_fetch_array($data);
                ?>
                    <tr>
                    <td> <?php echo $rows['ProductId'];?> </td>
                    <td> <?php echo $rows['ProductName'];?> </td>
                    <td> <?php echo $rows['ProductQuantity'];?> </td>
                    <td> <?php echo $rows['ProductPrice'];?></td>
                    <td> <?php echo $rows['PriceImage'];?></td>
                
               
                    <td><a href="ProductUpdate.php?edit=<?php echo $rows['ProductId']; ?>">update</a></td>
                    <td><a href="ProductDelete.php?del=<?php echo $rows ['ProductId']; ?>">delete</a></td>
             
                        <?php
                }
                ?>
       </tr>
    </table>
        <a href="ProductAdd.php">add</a>
        
    </body>
</html>
