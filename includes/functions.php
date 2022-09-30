<?php 
    session_start();
$db = mysqli_connect("localhost","root","","rokeya");



/// begin add_cart functions ///

function add_cart(){
    //$pro_title = $row_product['product_name'];
    global $db;
    
       //$ip_add = getRealIpUser();
    if(isset($_GET['add_cart'])){
        if(isset($_SESSION['customer_email'])){

            $get_email = $_SESSION['customer_email'];

            $product_id = $_GET['add_cart'];
            
            $product_qty = $_POST['product_qty'];

            $query = "insert into cart (product_id,customer_email,qty) values ('$product_id','$get_email','$product_qty')";
                
            $run_query = mysqli_query($db,$query);
            
            echo "<script>window.open('details.php?product_id=$product_id','_self')</script>";


        }else{
            echo "<script>alert('You need to login first')</script>";
            echo "<script>window.open('checkout.php','_self')</script>";
        }    
        
    }else{
        
    }
    
}

/// finish add_cart functions ///


function items(){
    
    global $db;
    
    if(isset($_SESSION['customer_email'])){
        $get_email = $_SESSION['customer_email'];

        $sum = 0;

        $get_items = "select qty from cart where customer_email='$get_email'";
    
        $run_items = mysqli_query($db,$get_items);
        
        while($row_items=mysqli_fetch_array($run_items)){
            
            $sum += $row_items['qty'];
        }
        echo "$sum";
    }else{

        echo "0";
    }
    //$ip_add = getRealIpUser();
    
    
    
    
    
}

/// finish getRealIpUser functions ///

/// begin total_price functions ///

function total_price(){
    
    global $db;
    if(isset($_SESSION['customer_email'])){

    $get_email = $_SESSION['customer_email'];
    //$ip_add = getRealIpUser();
    
    $total = 0;
    
    $select_cart = "select * from cart where customer_email='$get_email'";
    
    $run_cart = mysqli_query($db,$select_cart);
    
    while($record=mysqli_fetch_array($run_cart)){
        
        $pro_id = $record['product_id'];
        
        $pro_qty = $record['qty'];
        
        $get_price = "select * from products where product_id='$pro_id'";
        
        $run_price = mysqli_query($db,$get_price);
        
        while($row_price=mysqli_fetch_array($run_price)){
            
            $sub_total = $row_price['product_price']*$pro_qty;
            
            $total += $sub_total;
            
        }
        
    }
    
    echo $total . " Tk";

}else{
    echo 0 . " Tk";
}
    
}

/// finish total_price functions ///

?>