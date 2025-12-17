<?php $this->extend("layouts/main") ?>
<?php $this->section("content") ?>

          
            <div class="full-container">


            </div>
          
        


        
<?php $this->endSection() ?>
<?php $this->section("scripts") ?>
<script>
      window.addEventListener('load', function load() {
        const loader = document.getElementById('loader');
        setTimeout(function() {
            loader.classList.add('fadeOut');
        }, 300);
      });
    </script>

<?php $this->endSection() ?>





