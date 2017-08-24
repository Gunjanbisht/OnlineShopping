<?php include_once 'Db.php'?>
<?php
     $id = $_GET['edit'];
     $Query = "SELECT * FROM SubCategory WHERE SubCategoryId='$id'";
     $result = mysqli_query($Con,$Query);
     $rows = mysqli_fetch_array($result);
     
     if(isset($_POST['submit']))
     {
     $SubCategoryName = $_POST['SubCategoryName'];
     $CategoryId = $_POST['CategoryId'];
     
     $QueryUpdate = "UPDATE `SubCategory` SET `SubCategoryName` ='$SubCategoryName',`CategoryId` = '$CategoryId' WHERE SubCategoryId='$id'";
    
     if (mysqli_query($Con, $QueryUpdate))
{
       header("refresh:1,SubCategorySelect.php");
} 
       else 
{
       echo"not updated";

}
}
?>
 
 
<!DOCTYPE html>
<html>
 <head>SubCategoryUpdate</head>
 <body>
    
     <form method="post">
 <table border=1>
    
            <tr>
                
            <th>SubCategoryName</th>
            <td><input type="text" name="SubCategoryName" value="<?php echo $rows['SubCategoryName']; ?>"></td>
            </tr>
            <th>CategoryId</th>
            <td><input type="number" id="CategoryId" name="CategoryId" value="<?php echo $rows['CategoryId']; ?>"></td>
            </tr>
            
            
 </table>
     <input type="submit" name="submit" value="update">
     </form>      
    </body>
</html>
      
