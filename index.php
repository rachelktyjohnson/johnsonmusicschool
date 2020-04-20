<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Johnson Music School</title>
        <meta name="description" content="Tailored private guitar, bass, piano, ukulele, drums lessons">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="stylesheet" href="https://use.typekit.net/qmr2evg.css">
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>

      <div class="main-container">
        <header>
          <div class="pre-nav">
            <a href="#"><img src="img/jms-logo.png" /></a>
            <span class="toggle">	&#9776;</span>
          </div>
          <nav class="main-nav">
            <ul>
              <li><a href="#">Home</a></li>
              <li>
                <a href="#" class="lessons-toggle">Lessons&#9662;</a>
                <ul class="lessons-dropdown">
                  <li><a href="#">Guitar</a></li>
                  <li><a href="#">Piano</a></li>
                  <li><a href="#">Drums</a></li>
                  <li><a href="#">Ukulele</a></li>
                  <li><a href="#">Bass</a></li>
                </ul>
              </li>
              <li><a href="#">About</a></li>
              <li><a href="#">FAQ</a></li>
              <li class="portal"><a href="#" target="_blank">Student Portal</a></li>
            </ul>

          </nav>
        </header>
        <main>
          <div class="feature-image">
            <?php
              $sliderImage = rand(1,3);
            ?>
            <img src="img/slider-<?= $sliderImage; ?>.jpg" />
          </div>

        </main>

        <footer>
          <span>&copy; <?= date('Y');?> Johnson Music. Made by <a href="#">tealjay</a>.</span>
        </footer>
      </div>
      <script
  src="https://code.jquery.com/jquery-3.5.0.js"
  integrity="sha256-r/AaFHrszJtwpe+tHyNi/XCfMxYpbsRg2Uqn0x3s2zc="
  crossorigin="anonymous"></script>
      <script src="js/script.js"></script>
    </body>
</html>
