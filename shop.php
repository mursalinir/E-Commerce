<?php 

    $active='Shop';
    include("includes/db.php");
    include("functions/functions.php");
    include("includes/header2.php");

?>

   
   <div id="content"><!-- #content Begin -->
        <div class="container"> <!--container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Shop
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
         </div><!-- col-md-3 Finish -->
           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               <div class="box"><!-- box Begin -->
                   <h1>Shop</h1>                
               </div><!-- box Finish -->    
       
        <div class="row"><!-- row Begin -->
            <?php           
                getProShop();           
            ?>       
        </div><!-- row Finish -->
               
            <center>
                <ul class="pagination">
                    <li class="active;"><a href="#">First Page</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">Last Page</a></li>
                </ul>
            </center>
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>