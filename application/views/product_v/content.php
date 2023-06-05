        <br>
        <br>
        <br>
        <br>
        <br>
        
        <section class="py-6 bg-white" id="service-detail">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div id="carouselExampleIndicators" class="carousel slide py-2" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <?php $image = get_product_cover_image($product->id); $image = ($image) ? base_url("panel/uploads/products_v/$image") : base_url("assets/img/default.webp"); ?>
                                <div class="carousel-item active">
                                    <img src="<?php echo $image; ?>" class="img-fluid rounded-4" alt="...">
                                </div>
                                <?php foreach($product_images as $image) { ?>
                                    <div class="carousel-item">
                                        <img src="<?php echo base_url("panel/uploads/products_v/$image->imgUrl");?>" class="img-fluid rounded-4" alt="...">
                                    </div>
                                <?php } ?>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-md-6 px-3">
                        <h4 class="text-muted my-4">
                            <?php 
                                if($this->session->userdata('lang')=="tr"){
                                    echo $product->title_tr;
                                } elseif($this->session->userdata('lang')=="en"){
                                    echo $product->title;
                                } elseif($this->session->userdata('lang')=="fr"){
                                    echo $product->title_fr;
                                } elseif($this->session->userdata('lang')=="ar"){
                                    echo $product->title_ar;
                                } elseif($this->session->userdata('lang')=="es"){
                                    echo $product->title_es;
                                } elseif($this->session->userdata('lang')=="de"){
                                    echo $product->title_de;
                                } elseif($this->session->userdata('lang')=="ru"){
                                    echo $product->title_ru;
                                } elseif($this->session->userdata('lang')=="fa"){
                                    echo $product->title_fa;
                                } elseif($this->session->userdata('lang')=="pt"){
                                    echo $product->title_pt;
                                } elseif($this->session->userdata('lang')=="ch"){
                                    echo $product->title_ch;
                                } 
                            ?>
                        </h4>
                        <h6>
                            Marka: <?php echo get_brand_name($product->brandID); ?> <br>
                        </h6>
                        <h6>
                            Model: <?php echo $product->model; ?> <br>
                        </h6>
                        <h6>
                            OEM NO: <?php echo $product->oemNo; ?>
                        </h6>
                        <h6>
                            ID NO: <?php echo $product->id; ?>
                        </h6>
                        <p class="text-dark my-4">
                            <?php 
                                if($this->session->userdata('lang')=="tr"){
                                    echo $product->description_tr;
                                } elseif($this->session->userdata('lang')=="en"){
                                    echo $product->description;
                                } elseif($this->session->userdata('lang')=="fr"){
                                    echo $product->description_fr;
                                } elseif($this->session->userdata('lang')=="ar"){
                                    echo $product->description_ar;
                                } elseif($this->session->userdata('lang')=="es"){
                                    echo $product->description_es;
                                } elseif($this->session->userdata('lang')=="de"){
                                    echo $product->description_de;
                                } elseif($this->session->userdata('lang')=="ru"){
                                    echo $product->description_ru;
                                } elseif($this->session->userdata('lang')=="fa"){
                                    echo $product->description_fa;
                                } elseif($this->session->userdata('lang')=="pt"){
                                    echo $product->description_pt;
                                } elseif($this->session->userdata('lang')=="ch"){
                                    echo $product->description_ch;
                                } 
                            ?>
                        </p>
                        <div class="col-12 d-grid gap-2">
                            <a class="btn btn-dark btn-lg px-4 shadow-lg no-radius" href="https://wa.me/+905388291825">
                                <i class="bi bi-whatsapp px-2"></i>
                                <?php echo $this->lang->line('chat-now'); ?>
                            </a>
                            <a class="btn btn-outline-dark btn-lg px-4 shadow-lg no-radius" href="mailto:info@emerceli.com">
                                <i class="bi bi-envelope px-2"></i>
                                <?php echo $this->lang->line('mail-now'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>