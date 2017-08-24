 <?php
include_once 'Db.php';
session_start();
if(isset($_POST['submit']))
{
    if(isset($_SESSION['']))
    {
        
    }
    else{
        //$item_array=array(
         //item_ProductId=$_POST['ProductId'],
        
        //);
    }
}

?>
<?php
$query="select * from Product order by asc";
$data = mysqli_query($Con, $result);
if(mysqli_num_rows($data)>0){
    while($rows=  mysqli_fetch_array($data))
    {
     ?>
<div>
    <from action="indext.php?id=<?php echo $rows['ProductId']; ?>">
        <?php echo $rows['ProductId'];?> 
                    <td> <?php echo $rows['ProductName'];?> 
                    <td> <?php echo $rows['ProductQuantity'];?> 
                    <td> <?php echo $rows['ProductPrice'];?>
                    <td> <?php echo $rows['ProductImage'];?>
    </from>
</div>
}}
?>


<!DOCTYPE html>
<html>
    <head>
    <title> AddToCard</title>
    <script></script>
    <script></script>
        
    </head>
    <body>
        

<?php
$result ="select * from Product";
$data = mysqli_query($Con, $result);
$num=mysqli_num_rows($data);
    $rows=  mysqli_fetch_array($data)
            ?>
  
            <table border="1">
                
                    <th> ProductId </th>
                    <th> ProductName </th>
                    <th> ProductQuantity </th>
                    <th> ProductPrice </th>
                    <th> ProductImage </th>
                    <th> Delete</th>
                <?php
                for($i=1;$i<=$num;$i++){
                $rows = mysqli_fetch_array($data);
                ?>
                <tr>
                    <td> <?php echo $rows['ProductId'];?> </td>
                    <td> <?php echo $rows['ProductName'];?> </td>
                    <td> <?php echo $rows['ProductQuantity'];?> </td>
                    <td> <?php echo $rows['ProductPrice'];?></td>
                    <td> <?php echo $rows['ProductImage'];?></td>
                
                    <td><a href="AddToCardDelete.php?del=<?php echo $rows['ProductId']; ?>">delete</a></td>
                    <td></td>    
                <?php
                }
                ?>
       </tr>
    </table>
        
        
    </body>
</html>
