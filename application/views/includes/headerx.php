        <header class="header" id="header">
            <nav class="nav container">
                <a href="<?php echo base_url(); ?>" class="nav__logo">
                    Emerceli Auto Spare Parts
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list pt-3">
                        <li class="nav__item">
                            <a href="<?php echo base_url(); ?>" class="nav__link">
                                <span>Anasayfa</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="<?php echo base_url("products"); ?>" class="nav__link">
                                <span>Ürünler</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="<?php echo base_url("about"); ?>" class="nav__link">
                                <span>Hakkımızda</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <a href="<?php echo base_url("contact"); ?>" class="nav__link">
                                <span>İletişim</span>
                            </a>
                        </li>
                        <li class="nav__item">
                            <select class="nav__link" id="myDropdown" onchange="switchLanguage(this)">
                                <option value="tr" <?php echo ($this->session->userdata('lang') == 'tr') ? 'selected' : ''; ?>>
                                    Türkçe
                                </option>
                                <option value="en" <?php echo ($this->session->userdata('lang') == 'en') ? 'selected' : ''; ?>>
                                    English
                                </option>
                                <option value="fr" <?php echo ($this->session->userdata('lang') == 'fr') ? 'selected' : ''; ?>>
                                    Français
                                </option>
                                <option value="ar" <?php echo ($this->session->userdata('lang') == 'ar') ? 'selected' : ''; ?>>
                                العربية
                                </option>
                                <option value="es" <?php echo ($this->session->userdata('lang') == 'es') ? 'selected' : ''; ?>>
                                    Español
                                </option>
                                <option value="de" <?php echo ($this->session->userdata('lang') == 'de') ? 'selected' : ''; ?>>
                                    Deutsch
                                </option>
                                <option value="ru" <?php echo ($this->session->userdata('lang') == 'ru') ? 'selected' : ''; ?>>
                                    Русский
                                </option>
                                <option value="fa" <?php echo ($this->session->userdata('lang') == 'fa') ? 'selected' : ''; ?>>
                                فارسی
                                </option>
                                <option value="pt" <?php echo ($this->session->userdata('lang') == 'pt') ? 'selected' : ''; ?>>
                                    Português
                                </option>
                                <option value="ch" <?php echo ($this->session->userdata('lang') == 'ch') ? 'selected' : ''; ?>>
                                    中文
                                </option>
                                <!-- Diğer diller burada listelenebilir -->
                            </select>
                        </li>
                    </ul>

                    <div class="nav__close" id="nav-close">
                        <i class="bx bx-x"></i>
                    </div>
                </div>

                <div class="nav__btns">
                    <div class="nav__toggle nav__link" id="nav-toggle">
                        <i class="bx bx-menu"></i>
                    </div>
                </div>
            </nav>
        </header>