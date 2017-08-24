<?php 
include 'Header.php';
include 'Menu.php';?>

        <div class="grid_10">
            <div class="box round first">
                <h2>
                    Product Sales</h2>
               
                  <div class="block">
                    this is testing
                    </div>
                </div>
            </div>
            
        <div class="clear">
        </div>
    </div>
    <div class="clear">
    </div>
</body>
    <?php include 'Footer.php';
    
    if(isset($_GET['value'])=='show'){
    echo'<script>
        document.getElementById("check").style.visibility="visible"
        </script>';
        }?>