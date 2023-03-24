        <?php $social = get_social(); ?>
        <?php $address = get_address(); ?>

        <footer class="footer section bd-container">
            <div class="footer-container bd-grid">
                <div class="footer-content">
                    <a href="<?php echo base_url(); ?>" class="footer-logo">
                        <img src="<?php echo base_url("assets"); ?>/img/logo.webp" style="height: 7rem;" alt="">
                    </a>
                    <div>
                        <a href="<?php echo $social->facebook; ?>" target="_blank" class="footer-social"><i class='bi bi-facebook'></i></a>
                        <a href="<?php echo $social->instagram; ?>" target="_blank" class="footer-social"><i class='bi bi-instagram'></i></a>
                        <a href="https://wa.me/<?php echo $social->whatsapp; ?>" target="_blank" class="footer-social"><i class='bi bi-whatsapp'></i></a>
                    </div>
                </div>

                <div class="footer-content">
                    <h3 class="footer-title">Sayfalar</h3>
                    <ul>
                        <li><a href="<?php echo base_url(); ?>" class="footer-link">Anasayfa</a></li>
                        <li><a href="<?php echo base_url("urunler"); ?>" class="footer-link">Ürünlerimiz</a></li>
                        <li><a href="<?php echo base_url("hakkimizda"); ?>" class="footer-link">Hakkımızda</a></li>
                        <li><a href="<?php echo base_url("iletisim"); ?>" class="footer-link">İletişim</a></li>
                    </ul>
                </div>

                <div class="footer-content">
                    <h3 class="footer-title">İletişim</h3>
                    <ul>
                        <li><a href="tel:<?php echo $social->phone; ?>" class="footer-link">Bizi Arayın</a></li>
                        <li><a href="sms:<?php echo $social->phone; ?>" class="footer-link">Bize Mesaj Atın</a></li>
                        <li><a href="https://wa.me/<?php echo $social->whatsapp; ?>" class="footer-link">Bize WhatsApp'tan Ulaşın</a></li>
                        <li><a href="<?php echo $address->location; ?>" target="_blank" class="footer-link">Konumu Görün</a></li>
                    </ul>
                </div>

                <div class="footer-content">
                    <h3 class="footer-title">Adres</h3>
                    <ul>
                        <li><a href="<?php echo $address->location; ?>" target="_blank" class="footer-link">Fevziçakmak, 10501. Sk.</a></li>
                        <li><a href="<?php echo $address->location; ?>" target="_blank" class="footer-link">No:2-32 Horozluhan Osb.</a></li>
                        <li><a href="<?php echo $address->location; ?>" target="_blank" class="footer-link">Fetih Mahallesi</a></li>
                        <li><a href="<?php echo $address->location; ?>" target="_blank" class="footer-link">Karatay/Konya</a></li>
                    </ul>
                </div>
            </div>

            <p class="footer-copy"> <a href="https://ahmetdogukankonuk.com/" target="_blank" class="footer-link"> &#169; 2023 Created by @ahmetdogukankonuk </a></p>
        </footer>