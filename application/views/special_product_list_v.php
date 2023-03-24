<?php $social = get_social(); ?>
<!DOCTYPE html>
<html dir="ltr" lang="tr">
    <head>
        <?php $this->load->view("includes/head"); ?>
    </head>
    
    <body>
        <a href="https://maps.google.com/?q=37.917850,32.524731" target="_blank" class="location" id="scroll-top">
            <i class='bi bi-geo-alt location-icon'></i>
        </a>

        <a href="tel:<?php echo $social->phone; ?>" class="call" id="scroll-top">
            <i class='bi bi-telephone call-icon'></i>
        </a>

        <a href="https://wa.me/<?php echo $social->whatsapp; ?>" target="_blank" class="whatsapp" id="scroll-top">
            <i class='bi bi-whatsapp whatsapp-icon'></i>
        </a>

        <header class="l-header" id="header">
            <?php $this->load->view("includes/header"); ?>
        </header>

        <main class="l-main">
                
            <?php $this->load->view("{$viewFolder}/content"); ?>

        </main>

        <?php $this->load->view("includes/footer"); ?>
            
        <?php $this->load->view("includes/include_script"); ?>

    </body>
    
</html>