<?php include('includes/header.php');?>
<div class="feature-image">
  <?php
    $sliderImage = rand(1,3);
  ?>
  <img alt="Johnson Music School Banner" src="img/slider-<?= $sliderImage; ?>.jpg" />
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

</div>


</main>
<?php include('includes/footer.php');?>
