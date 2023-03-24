            <section class="mb-5 mb-md-6">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 content py-4 mt-5">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <?php $image = get_product_cover_image($product->id); $image = ($image) ? base_url("panel/uploads/products_v/$image") : base_url("assets/img/default.jpg"); ?>
                                        <img class="rounded mt-5" src="<?php echo $image; ?>" class="d-block w-100" alt="<?php echo $product->title; ?>">
                                    </div>
                                    <?php foreach($product_images as $image) { ?>
                                        <div class="carousel-item">
                                            <img class="rounded mt-5" src="<?php echo base_url("panel/uploads/products_v/$image->imgUrl");?>" class="d-block w-100" alt="<?php echo $product->title; ?>">
                                        </div>
                                    <?php } ?>
                                </div>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <i class="bi bi-caret-left-fill fs-1" style="color:black"></i>
                                    <span class="visually-hidden">Next</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <i class="bi bi-caret-right-fill fs-1" style="color:black"></i>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 bg-light rounded-3">
                            <div class="ps-lg-4 pb-5">
                                <h3 class="mt-4 mb-3 text-center section-title"><?php echo $product->title; ?></h3>
                                <p class="mb-2 text-center">
                                    <?php echo $product->description; ?>
                                </p>
                                <div class="d-flex mt-4 mb-3">
                                    <a href="<?php echo $social->whatsapp; ?>" class="btn btn-dark d-block w-100 p-3 rounded-4">
                                    <i class="bi bi-whatsapp me-1"></i> Whatsapp'tan İletişime Geç
                                    </a>
                                </div>
                                <a href="tel:<?php echo $social->phone; ?>" class="btn btn-outline-dark d-block w-100 mb-grid-gutter p-3 rounded-4">
                                    <i class="bi bi-telephone-fill me-1" style="font-size: 1rem;"></i> Ara
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>