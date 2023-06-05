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
                
            <?php $this->load->view("{$viewFolder}/content"); ?>

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