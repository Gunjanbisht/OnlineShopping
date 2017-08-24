<?php include_once 'Db.php'?>
<?php
     $id = $_GET['edit'];
     $Query = "SELECT * FROM Category WHERE CategoryId='$id'";
     $result = mysqli_query($Con,$Query);
     $rows = mysqli_fetch_array($result);
     
     if(isset($_POST['submit']))
     {
     $CategoryName = $_POST['CategoryName'];
     $Status = $_POST['Status'];
     
     $QueryUpdate = "UPDATE `Category` SET `CategoryName` ='$CategoryName',`Status` = '$Status' WHERE CategoryId='$id'";
      
     if (mysqli_query($Con, $QueryUpdate))
{
       header("refresh:1,CategorySelect.php");
} 
       else 
{
       echo"not updated";

}
}
?>
 
 
<!DOCTYPE html>
<html>
 <head>CategoryUpdate</head>
 <body>
    
     <form method="post">
 <table border=1>
    
            <tr>
                
            <th>Category Name</th>
            <td><input type="text" id="CategoryName" name="CategoryName" value="<?php echo $rows['CategoryName']; ?>"></td>
            </tr>
            <th>Status</th>
            <td><input type="number" id="Status" name="Status" value="<?php echo $rows['Status']; ?>"></td>
            </tr>
            
            
 </table>
     <input type="submit" name="submit" value="update">
     </form>      
    </body>
</html>
      
    