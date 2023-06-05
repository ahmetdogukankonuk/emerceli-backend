            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home__container container grid">
                    <div class="home__data">
                        <h1 class="home__title">
                            Emerceli Auto Spare Parts
                        </h1>
                        <p class="home__description">
                            <?php echo $this->lang->line('home-description'); ?>
                        </p>


                        <?php if($this->session->userdata('lang')=="en"){ ?>
                            <form class="home__search" action="<?php echo base_url("products/search"); ?>" method="post">
                        <?php } ?>
                        <?php if($this->session->userdata('lang')=="tr"){ ?>
                            <form class="home__search" action="<?php echo base_url("products/searchtr"); ?>" method="post">
                        <?php } ?>
                        <?php if($this->session->userdata('lang')=="fr"){ ?>
                            <form class="home__search" action="<?php echo base_url("products/searchfr"); ?>" method="post">
                        <?php } ?>
                        <?php if($this->session->userdata('lang')=="de"){ ?>
                            <form class="home__search" action="<?php echo base_url("products/searchde"); ?>" method="post">
                        <?php } ?>
                        <?php if($this->session->userdata('lang')=="es"){ ?>
                            <form class="home__search" action="<?php echo base_url("products/searches"); ?>" method="post">
                        <?php } ?>
                        <?php if($this->session->userdata('lang')=="ar"){ ?>
                            <form class="home__search" action="<?php echo base_url("products/searchar"); ?>" method="post">
                        <?php } ?>
                        <?php if($this->session->userdata('lang')=="ru"){ ?>
                            <form class="home__search" action="<?php echo base_url("products/searchru"); ?>" method="post">
                        <?php } ?>
                        <?php if($this->session->userdata('lang')=="fa"){ ?>
                            <form class="home__search" action="<?php echo base_url("products/searchfa"); ?>" method="post">
                        <?php } ?>
                        <?php if($this->session->userdata('lang')=="pt"){ ?>
                            <form class="home__search" action="<?php echo base_url("products/searchpt"); ?>" method="post">
                        <?php } ?>
                        <?php if($this->session->userdata('lang')=="ch"){ ?>
                            <form class="home__search" action="<?php echo base_url("products/searchch"); ?>" method="post">
                        <?php } ?>
                            <i class='bi bi-search'></i>
                            <input type="search" name="key" placeholder="<?php echo $this->lang->line('name-oemno-idno'); ?>" class="home__search-input">
                            <button class="button">
                                <?php echo $this->lang->line('search'); ?>
                            </button>
                        </form>
    
                        <div class="home__value">
                            <div>
                                <h1 class="home__value-number">
                                    10K<span>+</span>
                                </h1>
                                <span class="home__value-description">
                                    <?php echo $this->lang->line('products'); ?>
                                </span>
                            </div>
    
                            <div>
                                <h1 class="home__value-number">
                                    2K<span>+</span>
                                </h1>
                                <span class="home__value-description">
                                <?php echo $this->lang->line('clients'); ?>
                                </span>
                            </div>
    
                            <div>
                                <h1 class="home__value-number">
                                    28<span>+</span>
                                </h1>
                                <span class="home__value-description">
                                    <?php echo $this->lang->line('countries'); ?>
                                </span>
                            </div>
                        </div>
                    </div>
    
                    <div class="home__images">
                        <div class="home__orbe"></div>
    
                        <div class="home__img">
                            <img src="assets/img/main.webp" alt="">
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== LOGOS ====================-->
            <section class="logos section">
                <div class="logos__container container grid">
                    <?php foreach($references as $references) { ?>
                        <div class="logos__img">
                            <img src="<?php echo base_url("panel/uploads/references_v/$references->imgUrl"); ?>" alt="">
                        </div>
                    <?php } ?>
                </div>
            </section>

            <!--==================== POPULAR ====================-->
            <section class="section" id="popular">
                <div class="container">
                    
                    <div class="popular__container grid swiper">
                        <h2 class="section__title">
                            <?php echo $this->lang->line('best-selling-products'); ?>
                        </h2>

                        <div class="swiper-wrapper">

                            <?php foreach($products as $product) { ?>
                                <article class="popular__card swiper-slide product-card-height">
                                    <?php $image = get_product_cover_image($product->id); $image = ($image) ? base_url("panel/uploads/products_v/$image") : base_url("assets/img/default.webp"); ?>
                                    <a href="<?php echo base_url("product-detail/$product->id"); ?>">
                                        <img src="<?php echo $image; ?>" class="popular__img product-image-height" alt="...">
                                    </a>
                                    <div class="popular__data">
                                        <h3 class="popular__title">
                                        <?php
                                            $languages = array(
                                                'tr' => $product->title_tr,
                                                'en' => $product->title,
                                                'fr' => $product->title_fr,
                                                'ar' => $product->title_ar,
                                                'es' => $product->title_es,
                                                'de' => $product->title_de,
                                                'ru' => $product->title_ru,
                                                'fa' => $product->title_fa,
                                                'pt' => $product->title_pt,
                                                'ch' => $product->title_ch
                                            );

                                            $lang = $this->session->userdata('lang');

                                            if(isset($languages[$lang])){
                                                echo $languages[$lang];
                                            }
                                        ?>
                                        </h3>
                                        <p class="popular__description">
                                            <?php echo get_brand_name($product->brandID); ?>
                                        </p>
                                    </div>
                                </article>
                            <?php } ?>

                        </div>

                        <div class="swiper-button-next">
                            <i class='bx bx-chevron-right' ></i>
                        </div>
                        <div class="swiper-button-prev">
                            <i class='bx bx-chevron-left'></i>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== VALUE ====================-->
            <section class="value section" id="value">
                <div class="value__container container grid">
                    <div class="value__images">
                        <div class="value__orbe"></div>
    
                        <div class="value__img">
                            <img src="assets/img/about.webp" alt="">
                        </div>
                    </div>

                    <div class="value__content">
                        <div class="value__data">
                            <h2 class="section__title">
                                <?php echo $this->lang->line('about-us'); ?>
                            </h2>
                            <p class="value__description">
                                <?php echo $this->lang->line('about-text'); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!--==================== CONTACT ====================-->
            <section class="contact section" id="contact">
                <div class="contact__container container grid">
                    <div class="contact__images">
                        <div class="contact__orbe"></div>
    
                        <div class="contact__img">
                            <img src="assets/img/contact.webp" alt="">
                        </div>
                    </div>

                    <div class="contact__content">
                        <div class="contact__data">
                            <h2 class="section__title">
                                <?php echo $this->lang->line('contact-us'); ?>
                            </h2>
                            <p class="contact__description">
                                <?php echo $this->lang->line('contact-text'); ?>
                            </p>
                        </div>

                        <div class="contact__card">
                            <div class="contact__card-box">
                                <div class="contact__card-info">
                                    <i class='bx bxs-phone-call'></i>
                                    
                                    <div>
                                        <h3 class="contact__card-title">
                                            <?php echo $this->lang->line('call'); ?>
                                        </h3>
                                        <p class="contact__card-description">
                                            +905388291825
                                        </p>
                                    </div>
                                </div>
                                <a href="tel:+905388291825" class="button contact__card-button">
                                    <?php echo $this->lang->line('call-us'); ?>
                                </a>
                            </div>

                            <div class="contact__card-box">
                                <div class="contact__card-info">
                                    <i class='bx bxs-message-rounded-dots' ></i>
                                    
                                    <div>
                                        <h3 class="contact__card-title">
                                            <?php echo $this->lang->line('chat'); ?>
                                        </h3>
                                        <p class="contact__card-description">
                                            +905388291825
                                        </p>
                                    </div>
                                </div>
                                <a href="sms:+905388291825" class="button contact__card-button">
                                    <?php echo $this->lang->line('chat-now'); ?>
                                </a>
                            </div>

                            <div class="contact__card-box">
                                <div class="contact__card-info">
                                    <i class='bx bxl-whatsapp' ></i>
                                    
                                    <div>
                                        <h3 class="contact__card-title">
                                            Whatsapp
                                        </h3>
                                        <p class="contact__card-description">
                                            +905388291825
                                        </p>
                                    </div>
                                </div>
                                <a href="https://wa.me/+905388291825" class="button contact__card-button">
                                    <?php echo $this->lang->line('chat-now'); ?>
                                </a>
                            </div>

                            <div class="contact__card-box">
                                <div class="contact__card-info">
                                    <i class='bx bxs-envelope'></i>
                                    
                                    <div>
                                        <h3 class="contact__card-title">
                                            <?php echo $this->lang->line('mail'); ?>
                                        </h3>
                                        <p class="contact__card-description">
                                            info@emerceli.com
                                        </p>
                                    </div>
                                </div>
                                <a href="mailto:info@emerceli.com" class="button contact__card-button">
                                    <?php echo $this->lang->line('mail-now'); ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>