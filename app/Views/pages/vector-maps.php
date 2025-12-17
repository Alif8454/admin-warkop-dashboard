<?php $this->extend("layouts/main") ?>
<?php $this->section("content") ?>

          
            <div class="container-fluid">
              <h4 class="c-grey-900 mT-10 mB-30">Vector Maps</h4>
              <div class="row">
                <div class="col-md-12">
                  <div class="bgc-white bd bdrs-3 p-20 mB-20">
                    <h6 class="c-grey-900 mB-20">Interactive Vector Maps</h6>
                    <div id="world-map-marker"></div>
                  </div>
                </div>
              </div>
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





