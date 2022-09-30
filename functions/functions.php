<?php 

$db = mysqli_connect("localhost","root","","rokeya");

function getPro(){
    
    global $db;
    
    $get_products = "select * from products order by 1 DESC LIMIT 0,8";
    
    $run_products = mysqli_query($db,$get_products);
    
    while($row_products=mysqli_fetch_array($run_products)){
        
        $pro_id = $row_products['product_id'];
        
        $pro_title = $row_products['product_name'];
        
        $pro_price = $row_products['product_price'];
        
        $pro_img = $row_products['product_img'];
        
        echo "
        
        <div class='col-md-4 col-sm-6 single'>
        
            <div class='product'>
            
                <a href='details.php?product_id=$pro_id'>
                
                    <img class='img-responsive' src='admin_area/product_images/$pro_img'>
                
                </a>
                
                <div class='text'>
                
                    <h3>
            
                        <a href='details.php?product_id=$pro_id'>

                            $pro_title

                        </a>
                    
                    </h3>
                    
                    <p class='price'>
                    
                        Tk $pro_price
                    
                    </p>
                    
                    <p class='button'>
                    
                        <a class='btn btn-default' href='details.php?product_id=$pro_id'>

                            View Details

                        </a>
                    
                        <a class='btn btn-primary' href='details.php?product_id=$pro_id'>

                            <i class='fa fa-shopping-cart'></i> Add to Cart

                        </a>
                    
                    </p>
                
                </div>
            
            </div>
        
        </div>
        
        ";
        
    }
    
}

//end of getPro function

//start of getProShop function

function getProShop(){
    
    global $db;
    
    $get_products = "select * from products order by 1 DESC LIMIT 0,6";
    
    $run_products = mysqli_query($db,$get_products);
    
    while($row_products=mysqli_fetch_array($run_products)){
        
        $pro_id = $row_products['product_id'];
        
        $pro_title = $row_products['product_name'];
        
        $pro_price = $row_products['product_price'];
        
        $pro_img = $row_products['product_img'];
        
        echo "
        
        <div class='col-md-4 col-sm-6 center-responsive'>
        
            <div class='product'>
            
                <a href='details.php?product_id=$pro_id'>
                
                    <img class='img-responsive' src='admin_area/product_images/$pro_img'>
                
                </a>
                
                <div class='text'>
                
                    <h3>
            
                        <a href='details.php?product_id=$pro_id'>

                            $pro_title

                        </a>
                    
                    </h3>
                    
                    <p class='price'>
                    
                        Tk $pro_price
                    
                    </p>
                    
                    <p class='button'>
                    
                        <a class='btn btn-default' href='details.php?product_id=$pro_id'>

                            View Details

                        </a>
                    
                        <a class='btn btn-primary' href='details.php?product_id=$pro_id'>

                            <i class='fa fa-shopping-cart'></i> Add to Cart

                        </a>
                    
                    </p>
                
                </div>
            
            </div>
        
        </div>
        
        ";
        
    }
    
}



function ShowCart(){
    
    global $db;
    $customer_email = $_SESSION['customer_email'];

    $get_carts = "select * from cart where customer_email='$customer_email'";
    
    $run_products = mysqli_query($db,$get_carts);
    
    while($row_products=mysqli_fetch_array($run_products)){
        
        $pro_id = $row_products['product_id'];
        
        $pro_qty = $row_products['qty'];
        
        //$pro_price = $row_products['product_price'];       
        
        echo"<h3>product id= $pro_id, product Quantity = $pro_qty</h3>";
        echo"\n";
       
        
    }
    
}

?>