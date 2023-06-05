        <!-- Scroll Reveal JS -->
        <script src="assets/js/scrollreveal.min.js"></script>

        <!-- Swiper JS -->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!-- Main JS -->
        <script>
        function switchLanguage(selectElement) {
                var lang = selectElement.value;
                window.location.href = '<?php echo base_url("home/switchLanguage"); ?>/' + lang;
        }
        </script>
        <script src="<?php echo base_url("assets"); ?>/js/main.js"></script>