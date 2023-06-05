        <?php $social = get_social(); ?>
        <!-- Footer -->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div>
                    <a href="<?php echo base_url(); ?>" class="footer__logo">
                        <img src="<?php echo base_url(); ?>/assets/img/logo.webp" alt="" style="height: 10rem;">
                    </a>
                </div>

                <div class="footer__content">
                    <div>
                        <ul class="footer__links">
                            <h3 class="footer__title">
                                <?php echo $this->lang->line('pages'); ?>
                            </h3>
                            <li>
                                <a href="<?php echo base_url(); ?>" class="footer__link">
                                    <?php echo $this->lang->line('home'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("products"); ?>" class="footer__link">
                                    <?php echo $this->lang->line('products'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("contact"); ?>" class="footer__link">
                                    <?php echo $this->lang->line('contact-us'); ?>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <ul class="footer__links">
                            <h3 class="footer__title">
                                <?php echo $this->lang->line('company'); ?>
                            </h3>
                            <li>
                                <a href="<?php echo base_url("about"); ?>" class="footer__link">
                                    <?php echo $this->lang->line('about-us'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("about"); ?>" class="footer__link">
                                    <?php echo $this->lang->line('our-mission'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo base_url("about"); ?>" class="footer__link">
                                    <?php echo $this->lang->line('our-vision'); ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                    <div>
                        <ul class="footer__links">
                            <h3 class="footer__title">
                                <?php echo $this->lang->line('legal'); ?>
                            </h3>
                            <li>
                                <a href="#" class="footer__link"> <?php echo $this->lang->line('copyright-rights'); ?> </a>
                            </li>
                            <li>
                                <a href="#" class="footer__link"> <?php echo $this->lang->line('terms-of-use'); ?> </a>
                            </li>
                            <li>
                                <a href="#" class="footer__link"> <?php echo $this->lang->line('advertising-policy'); ?></a>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <ul class="footer__social">
                            <h3 class="footer__title">
                                <?php echo $this->lang->line('follow-us'); ?>
                            </h3> <br>
                            <?php if(isset($social->facebook)){ ?>
                                <a href="<?php echo $social->facebook; ?>" target="_blank" class="footer__social-link">
                                    <i class='bx bxl-facebook-circle' ></i>
                                </a>
                            <?php } ?>
                            <?php if(isset($social->instagram)){ ?>
                                <a href="<?php echo $social->instagram; ?>" target="_blank" class="footer__social-link">
                                    <i class='bx bxl-instagram-alt' ></i>
                                </a>
                            <?php } ?>
                            <?php if(isset($social->twitter)){ ?>
                                <a href="<?php echo $social->twitter; ?>" target="_blank" class="footer__social-link">
                                    <i class='bx bxl-twitter' ></i>
                                </a>
                            <?php } ?>
                            <?php if(isset($social->linkedin)){ ?>
                                <a href="<?php echo $social->linkedin; ?>" target="_blank" class="footer__social-link">
                                    <i class='bx bxl-linkedin' ></i>
                                </a>
                            <?php } ?>
                            <?php if(isset($social->youtube)){ ?>
                                <a href="<?php echo $social->youtube; ?>" target="_blank" class="footer__social-link">
                                    <i class='bx bxl-youtube' ></i>
                                </a>
                            <?php } ?>
                            <?php if(isset($social->whatsapp)){ ?>
                                <a href="<?php echo $social->whatsapp; ?>" target="_blank" class="footer__social-link">
                                    <i class='bx bxl-whatsapp' ></i>
                                </a>
                            <?php } ?>
                            <?php if(isset($social->pinterest)){ ?>
                                <a href="<?php echo $social->pinterest; ?>" target="_blank" class="footer__social-link">
                                    <i class='bx bxl-pinterest' ></i>
                                </a>
                            <?php } ?>
                            <?php if(isset($social->tiktok)){ ?>
                                <a href="<?php echo $social->tiktok; ?>" target="_blank" class="footer__social-link">
                                    <i class='bx bxl-tiktok' ></i>
                                </a>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="footer__info container">
                <span class="footer__copy">
                    &#169; ahmetdogukankonuk. <?php echo $this->lang->line('copyright'); ?>
                </span>

                <div class="footer__privacy">
                    <a href="#"> <?php echo $this->lang->line('cookie-policy'); ?> </a>
                    <a href="#"> <?php echo $this->lang->line('privacy-policy'); ?> </a>
                </div>
            </div>
        </footer>