
<?php
include("../../src/store/header.php");
if (!isset($_SESSION['email'])) {
    // check cookie
    if (isset($_COOKIE['email'])) {
      $email = $_COOKIE['email'];
      // check if the cookie is valid one
      if (file_exists("../$email")) {
        $val = file_get_contents("../$email");
        if ($_COOKIE['uniqid'] == $val) {
          $_SESSION[$email] =$_COOKIE['email'];
        }
      }
    }
  }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tools/shop1.css">
    <title>cart</title>

<style>

.footers{
    position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: red;
  color: white;
  text-align: center;
}

</style>

</head>
<body>
    <div class="container" style="margin-top: 5em;">
        <div class="row">
            <div class="mycart">
                <h1>MY CART</h1>
            </div>
            <div class="tabler">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Item Name</th>
                            <th scope="col">Item Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        //show products added to cart
                            if(isset($_SESSION['cart']))
                            {
                                foreach($_SESSION['cart'] as $key => $value)
                                {
                                    $no=$key+1;
                                    echo"
                                        <tr>
                                            <td>$no</td>
                                            <td>$value[Name]</td>
                                            <td>$value[Price]<input type='hidden' class='prices' value='$value[Price]'</td>
                                            <td><input class='quantitys' onchange='subtotals()' type='number' value='$value[Quantity]'></td>
                                            <td class='totals'></td>
                                            <td>
                                                <form action='cart_function.php' method='POST'>
                                                    <button name='Remove_Item'>Remove</button>
                                                    <input type='hidden' name='Name' value='$value[Name]'>
                                                </form>
                                            </td>
                                        </tr>
                                    ";
                                }
                            }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="total">
                <div class="to">
                    <h3>Full Price:</h3>
                    <h6 class="fpricess" id="fprices"></h6>
                    
                
                <?php
                // click order when user logged to thank you page or not logged to register page
                if (!isset($_SESSION['email']))
                {
                    echo "
                        <a href='../registerscreen.php'><button class='order' name='order'>Order</button></a>
                        ";
                } else {
                    echo "
                        <a href='../thankyou.php'><button class='order' name='order'>Order</button></a>
                        ";
                    }
                //}
                ?>
                </div>
            </div>

        </div>
    </div>


<!-- footer -->
<div class="footers">
<?php
include("../../src/store/footer.php");
?>
</div>
<script>
    var fpr=0;
    var prices=document.getElementsByClassName('prices');
    var quantitys=document.getElementsByClassName('quantitys');
    var totals=document.getElementsByClassName('totals');
    var fprices=document.getElementById('fprices');
    

    function subtotals()
    {
        fpr=0;
        for(i=0;i<prices.length;i++)
        {
            totals[i].innerText=(prices[i].value)*(quantitys[i].value);

            fpr=fpr+(prices[i].value)*(quantitys[i].value);

        }
        document.getElementById('fprices').innerText=fpr;
        
        console.log(fpr);
    }

    subtotals();

</script>    
</body>
</html>