<!DOCTYPE html>
<html dir="ltr" lang="tr">
    <head>
        <?php $this->load->view("includes/headx"); ?>
    </head>
    
    <body>
        <header class="header" id="header">
            <?php $this->load->view("includes/headerx"); ?>
        </header>

        <main class="main">
                
            <br>
            <br>
            <br>
            <br>
            <br>

            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    Kategoriler
                                    </button>
                                </h2>
                                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                    <div class="accordion-body">
                                        <ul class="list-group">
                                            <?php foreach($product_categories as $product_categories) { ?>
                                                <li class="list-group-item text-center border-0">
                                                    <a class="text-dark" href="<?php echo base_url("category/$product_categories->id"); ?>">
                                                            <?php 
                                                                if($this->session->userdata('lang')=="tr"){
                                                                    echo $product_categories->title_tr;
                                                                } elseif($this->session->userdata('lang')=="en"){
                                                                    echo $product_categories->title;
                                                                } elseif($this->session->userdata('lang')=="fr"){
                                                                    echo $product_categories->title_fr;
                                                                } elseif($this->session->userdata('lang')=="ar"){
                                                                    echo $product_categories->title_ar;
                                                                } elseif($this->session->userdata('lang')=="es"){
                                                                    echo $product_categories->title_es;
                                                                } elseif($this->session->userdata('lang')=="de"){
                                                                    echo $product_categories->title_de;
                                                                } elseif($this->session->userdata('lang')=="ru"){
                                                                    echo $product_categories->title_ru;
                                                                } elseif($this->session->userdata('lang')=="fa"){
                                                                    echo $product_categories->title_fa	;
                                                                } elseif($this->session->userdata('lang')=="pt"){
                                                                    echo $product_categories->title_pt;
                                                                }
                                                            ?>
                                                    </a>
                                                </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="row">

                        <?php foreach($store as $key) { ?>
                            <div class="col-md-4">
                                <div class="card border-0 shadow-sm my-2 rounded-3 product-card-height">
                                    <?php $image = get_product_cover_image($key->id); $image = ($image) ? base_url("panel/uploads/products_v/$image") : base_url("assets/img/default.webp"); ?>
                                    <a href="<?php echo base_url("product-detail"); ?>/<?php echo $key->id; ?>">
                                        <img src="<?php echo $image; ?>" class="card-img-top rounded-3 product-image-height" alt="<?php echo $key->title; ?>">
                                    </a>
                                    <div class="card-body">
                                        <a href="<?php echo base_url("product-detail"); ?>/<?php echo $key->id; ?>">
                                            <h5 class="popular__title">
                                                    <?php
                                                        if($this->session->userdata('lang')=="tr"){
                                                            echo $key->title_tr;
                                                        } elseif($this->session->userdata('lang')=="en"){
                                                            echo $key->title;
                                                        } elseif($this->session->userdata('lang')=="fr"){
                                                            echo $key->title_fr;
                                                        } elseif($this->session->userdata('lang')=="ar"){
                                                            echo $key->title_ar;
                                                        } elseif($this->session->userdata('lang')=="es"){
                                                            echo $key->title_es;
                                                        } elseif($this->session->userdata('lang')=="de"){
                                                            echo $key->title_de;
                                                        } elseif($this->session->userdata('lang')=="ru"){
                                                            echo $key->title_ru;
                                                        } elseif($this->session->userdata('lang')=="fa"){
                                                            echo $key->title_fa	;
                                                        } elseif($this->session->userdata('lang')=="pt"){
                                                            echo $key->title_pt;
                                                        }
                                                    ?>
                                            </h5>
                                        </a>
                                        <p class="popular__description">
                                            <?php echo get_brand_name($key->brandID); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>

        </main>

        <?php $this->load->view("includes/footer"); ?>

        <!-- Scroll Up -->
        <a href="#" class="scrollup" id="scroll-up">
            <i class='bx bx-chevrons-up'></i>
        </a>
            
        <?php $this->load->view("includes/include_script"); ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    </body>
    
</html>