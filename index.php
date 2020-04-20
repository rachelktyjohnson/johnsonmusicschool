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
    <a style="background-image:url('img/header-guitar.png');" href="#">Guitar</a>
    <a style="background-image:url('img/header-piano.png');" href="#">Piano</a>
    <a style="background-image:url('img/header-drums.jpg');" href="#">Drums</a>
    <a style="background-image:url('img/header-bass.png');" href="#">Bass</a>
    <a style="background-image:url('img/header-ukulele.png');" href="#">Ukulele</a>
    <a style="background-image:url('img/header-contact.png');" href="#">Theory</a>
  </div>

<?php include("includes/callout.php"); ?>

  <h2 class="instatitle">Check us out on Instagram</h2>
  <script src="https://cdn.lightwidget.com/widgets/lightwidget.js"></script>
  <iframe class="desktop-only" src="//lightwidget.com/widgets/6c0c1b820b1d54d4987f73bb2da80bb2.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>
  <iframe class="mobile-only" src="//lightwidget.com/widgets/8f739c168911516cab032b506e42bbfc.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width:100%;border:0;overflow:hidden;"></iframe>

</div>


</main>
<?php include('includes/footer.php');?>
