<?php 

    $active='Cart';
    include("includes/db.php");
    //include("includes/functions.php");
    include("functions/functions.php");
    include("includes/header2.php");

?>
   
  
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Shopping Cart
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->

           </div><!-- col-md-3 Finish -->
           
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <div class="box"><!-- box Begin --> <!--for order table -->               
                   
                   
            <div class="row"><!-- row Begin -->
                <?php
                 if(isset($_SESSION['customer_email'])){
                        
                   // echo "Your added cart item here";
                    ShowCart();                   
                    
                }else{
                    
                    echo "You have to log in first to see your cart item!";
                    
                }
                          
                //getProShop();
                                
                ?>       
            </div><!-- row Finish -->      
                   
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-12 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>