
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?<?php echo filemtime('css/style.css') ?>">
    <link rel="stylesheet" type="text/css" href="fonts/uicons-bold-straight/css/uicons-bold-straight.css" />    
    <title>Товары</title>
</head>

<body class="text-center">
    <?php
    require ('template/header.php');

    require ('template/log_reg_block.php');

    ?>
    <div class="content-line main">
        <div class="content-area">
            <?php
            require 'inc/config.inc.php';
            $query_prod = 'SELECT * FROM `products`';
            $result_prod = mysqli_query($db, $query_prod);
            echo  '<ul class="products">';
            while($row_prod = $result_prod->fetch_assoc()){
                echo '<li class="product">';
                echo '<a href="#" class="prod_link img_prod">';            
                echo '<img src="product_imgs/' . $row_prod['file'] . '" class="">';
                echo '</a>';
                ?>
                <div class="add_to_cart_icon"><a href="?add-to-cart" data-quantity="0" class="button add_to_cart_button ajax_add_to_cart" data-product_id="<?php echo $row_prod['id'];  ?>" aria-describedby="" rel="nofollow" title=""></a></div>
                <?php
                echo '<a href="#" class="prod_link product_info">'; 
                echo '<h2 class="name_prod">' . $row_prod['name'] . '</h2>';
                echo '<div class="price_loop">' . $row_prod['price'] . ' &#8381;</div>';
                echo '</a>';
                echo '</li>';
            }
            echo  '</ul>';
            ?>
        </div>
    </div>
    <?php

    require ('template/footer.php');
    ?> 
</body>

</html>