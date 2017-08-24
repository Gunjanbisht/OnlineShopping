<html>
    <body>
<?php
include'Db.php';?>
<?php
//$r = $_GET['q'];
$join = "select SubCategory.SubCategoryId,SubCategory.SubCategoryName from Category inner join SubCategory on Category.CategoryId = SubCategory.CategoryId";
//$join="select * from SubCategory where CategoryId=$r";
$data = mysqli_query($Con, $join);
//$array=array();
if(mysqli_connect_errno()){
    die("connection failed".mysqli_error($Con));
}
?>
    <?php
$num = mysqli_num_rows($data);

   if($num = mysqli_num_rows($data)>=1){
                for($i=1;$i<=$num;$i++){
              $rows = mysqli_fetch_array($data);
   ?>

<ul class ="submenu">
    <li style="color: red">
        <?php echo $rows['SubCategoryName'];?>
    </li>
</ul>
    </body></html>
<?php
   }}?>