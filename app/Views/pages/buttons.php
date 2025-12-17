<?php $this->extend("layouts/main") ?>
<?php $this->section("content") ?>

          
        


        
<?php $this->endSection() ?>
<?php $this->section("scripts") ?>
<script>
      window.addEventListener('load', function load() {
        const loader = document.getElementById('loader');
        setTimeout(function() {
          loader.classList.add('fadeOut');
        }, 3000);
      });
    </script>

<?php $this->endSection() ?>





