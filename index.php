<?php include('includes/header.php');?>
<div class="feature-image">
  <?php
    $sliderImage = rand(1,3);
  ?>
  <img src="img/slider-<?= $sliderImage; ?>.jpg" />
</div>
<main>
<div class="container-homepage">
  <h2>What do you want to learn?</h2>
  <div class="learn">
    <a style="background-image:url('img/header-guitar.jpg');" href="guitar.php">Guitar</a>
    <a style="background-image:url('img/header-piano.jpg');" href="piano.php">Piano</a>
    <a style="background-image:url('img/header-drums.jpg');" href="drums.php">Drums</a>
    <a style="background-image:url('img/header-bass.jpg');" href="bass.php">Bass</a>
    <a style="background-image:url('img/header-ukulele.jpg');" href="ukulele.php">Ukulele</a>
  </div>

<?php include("includes/callout.php"); ?>

  <!--<h2 class="instatitle">Check us out on Instagram</h2>
  <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
  <iframe class="desktop-only" src="//lightwidget.com/widgets/6c0c1b820b1d54d4987f73bb2da80bb2.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
  <iframe class="mobile-only" src="//lightwidget.com/widgets/8f739c168911516cab032b506e42bbfc.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
-->
</div>


</main>
<?php include('includes/footer.php');?>
