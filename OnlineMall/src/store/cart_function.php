<?php
session_start();

// add to cart 
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(isset($_POST['buy_btn']))
    {
        if(isset($_SESSION['cart']))
    
        {
            $myitems=array_column($_SESSION['cart'],'Name');
            if(in_array($_POST['item_name'],$myitems))
            {
              echo"<script>
                alert('Item already added. You can increase in Cart');
                window.location.href='homestore1.php';
              </script>";  
            }
            else{
                $count=count($_SESSION['cart']);
                $_SESSION['cart'][$count]=array('Name'=>$_POST['item_name'], 'Price'=>$_POST['item_price'],'Quantity'=>1);
                
                echo"<script>
                    alert('Item added');
                    window.location.href='homestore1.php';
                </script>";
            }  
        }
        else
        {
            $_SESSION['cart'][0]=array('Name'=>$_POST['item_name'], 'Price'=>$_POST['item_price'],'Quantity'=>1);
            
            echo"<script>
                alert('Item added');
                window.location.href='homestore1.php';
            </script>";  
        }
    
    }
    // remove item
    if(isset($_POST['Remove_Item']))
    {
        foreach($_SESSION['cart'] as $key => $value)
        {
            if($value['Name']==$_POST['Name'])
            {
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart']=array_values($_SESSION['cart']);
                echo"<script>
                    alert('Item Remove');
                    window.location.href='cart.php';
                </script>";
            }
        }
    }
}


?>