<?php
include_once 'Db.php';?>
<?php
$result ="SELECT * FROM Category";
$data = mysqli_query($Con, $result);
$num = mysqli_num_rows($data);
mysqli_close($Con);
?>
<!DOCTYPE html>
<html>
    <head>
    <title> Category List</title>
    </head>
    <body>
            <table border="1">
                
                    <th> CategoryId </th>
                    <th> CategoryName </th>
                    <th> Status </th>
                    <th> Update </th>
                    <th> Delete </th>
                <?php
                for($i=1;$i<=$num;$i++){
                $rows = mysqli_fetch_array($data);
                ?>
                <tr>
                    <td> <?php echo $rows['CategoryId'];?> </td>
                    <td> <?php echo $rows['CategoryName'];?> </td>
                    <td> <?php echo $rows['Status'];?> </td>
                
               
                    <td><a href="CategoryUpdate.php?edit=<?php echo $rows['CategoryId']; ?>">update</a></td>
                    <td><a href="CategoryDelete.php?del=<?php echo $rows['CategoryId']; ?>">delete</a></td>
             
                <?php
                }
                ?>
       </tr>
    </table>
        <a href="CategoryAdd.php">add</a>
        <a href='SubCategorySelect.php' style="margin-left: 40px;">SubCategory</a>
    </body>
</html>
