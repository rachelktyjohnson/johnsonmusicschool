<?php include('includes/header.php');?>
        <main>
          <div class="feature-image">
            <?php
              $sliderImage = rand(1,3);
            ?>
            <img src="img/slider-<?= $sliderImage; ?>.jpg" />
          </div>

        </main>
<?php include('includes/footer.php');?>
