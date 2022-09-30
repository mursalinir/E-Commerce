<?php 

    $active='Account';
    include("includes/header.php");

?>
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Register
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
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <center><!-- center Begin -->
                           
                           <h2>Account Login </h2>
                           
                       </center><!-- center Finish -->
                       
                       <form action="checkout.php" method="post" enctype="multipart/form-data"><!-- form Begin -->
                          
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Your Email</label>
                               
                               <input type="email" class="form-control" name="customer_email" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Your Password</label>
                               
                               <input type="password" class="form-control" name="customer_pass" required>
                               
                           </div><!-- form-group Finish -->                  
                                                   
                                              
                           
                               
                               <button type="submit" name="login" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i> Login
                               
                               </button>
                               
                           </div><!-- text-center Finish -->
                           
                       </form><!-- form Finish -->
                       
                   </div><!-- box-header Finish -->
                   
               </div><!-- box Finish -->
               
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



<?php 

    if(isset($_POST['login'])){
        
        $customer_email = mysqli_real_escape_string($con,$_POST['customer_email']);
        
        $customer_pass = mysqli_real_escape_string($con,$_POST['customer_pass']);
        
        $get_customer = "select * from customer where customer_email='$customer_email' AND customer_pass='$customer_pass'";
        
        $run_customer = mysqli_query($con,$get_customer);
        
        $count = mysqli_num_rows($run_customer);
        
        if($count>0){
            
            $_SESSION['customer_email']=$customer_email;
            
            echo "<script>alert('Logged in. Welcome Back')</script>";
            
            echo "<script>window.open('index.php?dashboard','_self')</script>";
            
        }else{
            
            echo "<script>alert('Email or Password is Wrong !')</script>";
            
        }
        
    }

?>