<?php include "header.php" ?>

    <main>
      <div class="container">
        <h1>Альбом-демо</h1>
        <h2>Много фотографий котов</h2>
        <div class="row">

          <div class="col-lg-2">
            <a href="img/cat-demo1.jpg" class="colorbox">
              <img src="img/cat-demo1.jpg" alt="Имя фотографии">
            </a>
          </div>
          <div class="col-lg-2">
            <a href="img/cat-demo1.jpg" class="colorbox">
              <img src="img/cat-demo1.jpg" alt="Имя фотографии">
            </a>
          </div>
          <div class="col-lg-2">
            <a href="img/cat-demo1.jpg" class="colorbox">
              <img src="img/cat-demo1.jpg" alt="Имя фотографии">
            </a>
          </div>
          <div class="col-lg-2">
            <a href="img/cat-demo1.jpg" class="colorbox">
              <img src="img/cat-demo1.jpg" alt="Имя фотографии">
            </a>
          </div>
          <div class="col-lg-2">
            <a href="img/cat-demo1.jpg" class="colorbox">
              <img src="img/cat-demo1.jpg" alt="Имя фотографии">
            </a>
          </div>
          <div class="col-lg-2">
            <a href="img/cat-demo1.jpg" class="colorbox">
              <img src="img/cat-demo1.jpg" alt="Имя фотографии">
            </a>
          </div>
          <div class="col-lg-2">
            <a href="img/cat-demo1.jpg" class="colorbox">
              <img src="img/cat-demo1.jpg" alt="Имя фотографии">
            </a>
          </div>
          <div class="col-lg-2">
            <a href="img/cat-demo1.jpg" class="colorbox">
              <img src="img/cat-demo1.jpg" alt="Имя фотографии">
            </a>
          </div>
          <div class="col-lg-2">
            <a href="img/cat-demo1.jpg" class="colorbox">
              <img src="img/cat-demo1.jpg" alt="Имя фотографии">
            </a>
          </div>
          <div class="col-lg-2">
            <a href="img/cat-demo1.jpg" class="colorbox">
              <img src="img/cat-demo1.jpg" alt="Имя фотографии">
            </a>
          </div>

        </div>
      </div>
    </main>

    <?php include "footer.php" ?>

    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/jquery.colorbox-min.js"></script>
    <script>
      $( document ).ready(function() {
        $('a.colorbox').colorbox({
          rel:"colorbox",
          innerWidth:"90%",
          innerHeight:"90%"
        });
      });
    </script>

  </body>
</html>