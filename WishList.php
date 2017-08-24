<html>
    <head>
        <title>WishList</title>
    </head>
    <body>
        <table border="1">
            <tr>
                <td>ProductId</td>
                <td>ProductName</td>
                <td>ProductQuantity</td>
                <td>ProductPrice</td>
                
            </tr>
     
<?php include 'Db.php';
?>
<?php
$result = "SELECT * FROM Product";
$data = mysqli_query($Con,$result);
$num = mysqli_num_rows($data);
mysqli_close($Con);
?>
            <?php
                for($i=1;$i<=$num;$i++){
                $rows = mysqli_fetch_array($data);
                ?>
                 
                    <td> <?php echo $rows['ProductId'];?> </td>
                    <td> <?php echo $rows['ProductName']?></td>
                    <td> <?php echo $rows['ProductQuantity'];?> </td>
                    <td> <?php echo $rows['ProductPrice']?> </td>
                    <td><a href="ProductDelete.php?edit=<?php echo $rows['ProductId'];?>">Delete</a></td>
                    <?php echo $rows['ProductName'];?>
                <?php
                }
                ?>
        </table></body></html>
