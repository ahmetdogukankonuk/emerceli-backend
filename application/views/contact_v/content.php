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