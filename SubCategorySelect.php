<?php
include_once 'Db.php';?>
<?php
$result ="SELECT * FROM SubCategory";
$data = mysqli_query($Con, $result);
$num = mysqli_num_rows($data);
mysqli_close($Con);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>SubCategory List</title>
        </head>
    <body>
            <table border="1">
                
                    <th> SubCategoryId </th>
                    <th> SubCategoryName </th>
                    <th> CategoryId </th>
                    <th> Update </th>
                    <th> Delete </th>
                <?php
                for($i=1;$i<=$num;$i++){
                $rows = mysqli_fetch_array($data);
                ?>
                    <tr>
                    <td> <?php echo $rows['SubCategoryId'];?> </td>
                    <td> <?php echo $rows['SubCategoryName'];?> </td>
                    <td> <?php echo $rows['CategoryId'];?> </td>
                
               
                    <td><a href="SubCategoryUpdate.php?edit=<?php echo $rows['SubCategoryId'];?>">update</a></td>
                    <td><a href="SubCategoryDelete.php?del=<?php echo $rows['SubCategoryId'];?>">delete</a></td>
             
                        <?php
                }
                ?>
       </tr>
    </table>
        <a href="SubCategoryAdd.php">add</a>
    </body>
</html>
