            <!--==================== VALUE ====================-->
            <section class="value section mt-5" id="value">
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