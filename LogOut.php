<?php
include_once 'Db.php'?>
<?php
        session_start();
        session_destroy();
        if($SESSION['EmailId']){
            echo'successfully logout';
        }
            else {
     echo'error occured';
 }
        
?>