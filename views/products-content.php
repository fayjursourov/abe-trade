<?php
    function show_product_category($img_name, $img_caption) {
        echo '<div class="col-md-6 col-0-gutter">
                <div class="ot-portfolio-item">
                    <figure class="effect-bubba">
                        <img src="images/product/' . $img_name . '" alt="img02" class="img-responsive" />
                        <figcaption>
                            <h2>' . $img_caption . '</h2>
                        </figcaption>
                    </figure>
                </div>
            </div>';
    }
?>

<section id="products">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="section-title">
                    <h2>Our Products</h2>
                </div>
            </div>
        </div>

        <div class="row row-0-gutter">
            <?php show_product_category('automobile.jpg', 'Automotive Parts & Accessories'); ?>
            <?php show_product_category('sandwich-food.jpg', 'Grocery and Gourmet Foods'); ?>
        </div>

        <div class="row row-0-gutter">
            <?php show_product_category('health.jpg', 'Health & Personal Care'); ?>
            <?php show_product_category('jewellery.jpg', 'Jewellery'); ?>
        </div>

        <div class="row row-0-gutter">
            <?php show_product_category('beauty.jpg', 'Beauty'); ?>
            <?php show_product_category('laser.jpg', 'Laser Pointers and Related Products'); ?>
        </div>

        <div class="row row-0-gutter">
            <?php show_product_category('sport.jpg', 'Sports Collectibles'); ?>
            <?php show_product_category('cloths.jpg', 'Clothing & Accessories'); ?>
        </div>

        <div class="row row-0-gutter">
            <?php show_product_category('shoes.jpg', 'Shoes'); ?>
            <?php show_product_category('handbag-and-sunglass.jpg', 'Handbags & Sunglasses'); ?>
        </div>

        <div class="row row-0-gutter">
            <?php show_product_category('watches.jpg', 'Watches'); ?>
            <?php show_product_category('luggage-and-bags.png', 'Luggage & Bags'); ?>
        </div>

    </div><!-- container -->
</section>
