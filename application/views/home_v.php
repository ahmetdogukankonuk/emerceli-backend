<!DOCTYPE html>
<html dir="ltr" lang="tr">
    <head>
        <?php $this->load->view("includes/headx"); ?>
    </head>
    
    <body>
        <header class="header" id="header">
            <?php $this->load->view("includes/header"); ?>
        </header>

        <main class="main">
                
            <?php $this->load->view("{$viewFolder}/content"); ?>

        </main>

        <?php $this->load->view("includes/footer"); ?>

        <!-- Scroll Up -->
        <a href="#" class="scrollup" id="scroll-up">
            <i class='bx bx-chevrons-up'></i>
        </a>
            
        <?php $this->load->view("includes/include_script"); ?>

    </body>
    
</html>