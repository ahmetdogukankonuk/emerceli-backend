            <section class="menu section bd-container" id="products">
                <h2 class="section-title"> Ürünlerimiz </h2>

                <div class="menu-container bd-grid">

                    <?php foreach($products as $product) { ?>
                        <div class="menu-content">
                            <a href="<?php echo base_url("urun-detay/$product->id"); ?>">
                                <?php $image = get_product_cover_image($product->id); $image = ($image) ? base_url("panel/uploads/products_v/$image") : base_url("assets/img/default.jpg"); ?>
                                <img src="<?php echo $image; ?>" alt="<?php echo $product->title; ?>" class="menu-img">
                                <h3 class="menu-name"> <?php echo $product->title; ?> </h3>
                            </a>
                        </div>
                    <?php } ?>

                </div>
            </section>