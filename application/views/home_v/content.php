            <section class="home" id="home">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo base_url("assets"); ?>/img/main1.webp" class="d-block w-100" alt="ADS">
                            <div class="carousel-caption d-none d-md-block">
                                <h2>ADS Hayvan Sulukları</h2>
                            </div>
                        </div>
                        <?php foreach($sliders as $slider) { ?>
                            <div class="carousel-item">
                                <img src="<?php echo base_url("panel/uploads/sliders_v"); ?>/<?php echo $slider->imgUrl; ?>" class="d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h2> <?php echo $slider->title; ?> </h2>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                        <i class="bi bi-caret-left-fill fs-1" style="color:black"></i>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <i class="bi bi-caret-right-fill fs-1" style="color:black"></i>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>

            <section class="menu section bd-container">
                <h2 class="abs-title"> Alkaranlılar Döküm Sanayi </h2>
                <p class="about-description" style="text-align: center !important; color: black !important; font-size: 1.2rem !important;">
                    Alkaranlılar Döküm Sanayi olarak 25 yılı aşkın süredir hizmetinizdeyiz.
                </p>
            </section>


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
                <center>
                    <a href="" type="button" class="more-button">Tüm Ürünleri Gör</a>
                </center>
            </section>


            <section class="about section bd-container" id="about">
                <div class="about-container  bd-grid">
                    <div class="about-data">
                        <span class="section-subtitle about-initial">Hakkımızda</span>
                        <h2 class="section-title about-initial"> ADS Hayvan Sulukları </h2>
                        <p class="about-description">
                            <?php echo $about->text; ?>
                        </p>
                    </div>
                    
                    <iframe width="350" height="200" src="https://www.youtube.com/embed/DdvMx0rDGFo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                </div>
            </section>


            <section class="about section bd-container" id="about">
                <div class="about-container  bd-grid">

                    <iframe width="350" height="200" src="https://youtube.com/embed/vF8NEevVV3Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

                    <div class="about-data">
                        <span class="section-subtitle about-initial">Misyonumuz</span>
                        <h2 class="section-title about-initial"> ADS Hayvan Sulukları </h2>
                        <p class="about-description">
                            <?php echo $mission->text; ?>
                        </p>
                    </div>
                    
                </div>
            </section>