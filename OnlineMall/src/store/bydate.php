 <!-- https://stackoverflow.com/questions/19104253/php-to-display-csv-file-in-a-paginated-format -->

 <?php include ("header.php")?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tools/shop1.css">
    <title>Index</title>
</head>
<body>

<div class="small-container" style="margin-top: 5em;">
<h2 class="title">Product by Date</h2>
<div class="row" style="margin-top: -3em;">


<?php
//get csv file
    require 'connect_csv.php';
    $products[] = read_all_products();
    // $data[]=$products;
    $limit = 2;
    $total_pages = count($products);
    $stages = 3;
    $page = (int) $_GET['page'];
    if($page){
    $start = ($page - 1) * $limit;
    }else{
    $start = 0;
    }
    //Slice array according to our page
    $products = array_slice($products, $start, $limit);
    foreach ($products as $p) {
        $id = $p['id'];
        $name = $p['name'];
        $price = $p['price'];
        $date = $p['created_time'];
        $pstore_id = $p['store_id'];
        $fe_in_to=$p['featured_in_store'];
        // Get Current Page
                  
?>
<!-- display products -->
<?php for($i = 1; $i < count($products); $i++) { ?>
<div class="col-4">

    <form action="cart_function.php" method="POST">
        <a href="product-detail3.php"><img src="images/product/product-1.png" alt="H.Moser & Cie ALP">
            <h6><?= $name; ?></h6>
            <p>$<?= $price; ?></p>
            <button type="submit" name="buy_btn" class="buy-btn">Add To Cart</button>
            <input type="hidden" name="item_name" value="<?= $name ?>">
            <input type="hidden" name="item_price" value="<?= $price ?>">
        </a>
    </form>

</div>
<?php } ?> 

<?php } ?>

</div>
    </div> 


<?php
// Show Total Pages
if ($page == 0){$page = 1;}
    $prev = $page - 1;
    $next = $page + 1;
    $lastpage = ceil($total_pages/$limit);
    $LastPagem1 = $lastpage - 1;

    $paginate = '';
    if($lastpage > 1)
    {

    $paginate .= "<div class='paginate' style='text-align: center; margin-top: 30px; margin-bottom:30px;'>";
    // Previous
    if ($page > 1){
    $paginate.= "<a href='?page=$prev' style='font-weight: bold;'>PREVIOUS </a>";
    }else{
    $paginate.= "<span class='disabled' style='display:none;'>previous</span>"; }

    // Pages
    if ($lastpage < 7 + ($stages * 2)) // Not enough pages to breaking it up
    {
    for ($counter = 1; $counter <= $lastpage; $counter++)
    {
    if ($counter == $page){
    $paginate.= "<span class='current' style='font-weight: bold;'>$counter</span>";
    }else{
    $paginate.= "<a href='?page=$counter'>$counter</a>";}
    }
    }
    elseif($lastpage > 5 + ($stages * 2)) // Enough pages to hide a few?
    {
    // Beginning only hide later pages
    if($page < 1 + ($stages * 2))
    {
    for ($counter = 1; $counter < 4 + ($stages * 2); $counter++)
    {
    if ($counter == $page){
    $paginate.= "<span class='current' style='font-weight: bold;'>$counter</span>";
    }else{
    $paginate.= "<a href='?page=$counter'>$counter</a>";}
    }
    $paginate.= "...";
    $paginate.= "<a href='?page=$LastPagem1'>$LastPagem1</a>";
    $paginate.= "<a href='?page=$lastpage'>$lastpage</a>";
    }
    // Middle hide some front and some back
    elseif($lastpage - ($stages * 2) > $page && $page > ($stages * 2))
    {
    $paginate.= "<a href='?page=1'>1</a>";
    $paginate.= "<a href='?page=2'>2</a>";
    $paginate.= "...";
    for ($counter = $page - $stages; $counter <= $page + $stages; $counter++)
    {
    if ($counter == $page){
    $paginate.= "<span class='current' style='font-weight: bold;'>$counter</span>";
    }else{
    $paginate.= "<a href='?page=$counter'>$counter</a>";}
    }
    $paginate.= "...";
    $paginate.= "<a href='?page=$LastPagem1'>$LastPagem1</a>";
    $paginate.= "<a href='?page=$lastpage'>$lastpage</a>";
    }
    // End only hide early pages
    else
    {
    $paginate.= "<a href='?page=1'>1</a>";
    $paginate.= "<a href='?page=2'>2</a>";
    $paginate.= "...";
    for ($counter = $lastpage - (2 + ($stages * 2)); $counter <= $lastpage; $counter++)
    {
    if ($counter == $page){
    $paginate.= "<span class='current' style='font-weight: bold;'>$counter</span>";
    }else{
    $paginate.= "<a href='?page=$counter'>$counter</a>";}
    }
    }
    }

    // Next
    if ($page < $counter - 1){
    $paginate.= "<a href='?page=$next' style='font-weight: bold;'> NEXT</a>";
    }else{
    $paginate.= "<span class='disabled'>next</span>";
    }

    $paginate.= "</div>";

    }
    
    // pagination
    echo $paginate;
        ?>
       

 <!-- footer -->
<div class="footer">
 <?php include ("footer.php")?>
 </div>
      
</body>
</html>