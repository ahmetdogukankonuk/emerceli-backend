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
                                                                } elseif($this->session->userdata('lang')=="ch"){
                                                                    echo $product_categories->title_ch;
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
                                    <?php $image = get_product_cover_image($product->id); $image = ($image) ? base_url("panel/uploads/products_v/$image") : base_url("assets/img/default.webp"); ?>
                                    <a href="<?php echo base_url("product-detail"); ?>/<?php echo $key->id; ?>/<?php echo convertToUsername($key->title); ?>">
                                        <img src="<?php echo $image; ?>" class="card-img-top rounded-3 product-image-height" alt="<?php echo $product->title; ?>">
                                    </a>
                                    <div class="card-body">
                                        <a href="">
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
                                                        } elseif($this->session->userdata('lang')=="ch"){
                                                            echo $key->title_ch;
                                                        }
                                                    ?>
                                            </h5>
                                        </a>
                                        <p class="popular__description">
                                            <?php echo get_brand_name($product->brandID); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
                            
                        </div>
                    </div>
                </div>
            </div>