<?php include "header.php" ?>

    <main>
      <div class="container kid">
        <h1>Котёнок - демо</h1>
        <p class="kid-name">Имя котёнка</p>
        <p class="kid-info">Информация о котёнке</p>
        <a href="#" class="kid-pedigree">Ссылка на родословную</a>
        <div class="row">
          <div class="col-lg-3">
            <p class="kid-photo-age text-center">Срок</p>
            <a href="img/cat-demo1.jpg" class="colorbox"><img src="img/cat-demo1.jpg" alt="Срок-1"></a>
          </div>
          <div class="col-lg-3">
            <p class="kid-photo-age text-center">Срок</p>
            <a href="img/cat-demo2.jpg" class="colorbox"><img src="img/cat-demo2.jpg" alt="Срок-2"></a>
          </div>
          <div class="col-lg-3">
            <p class="kid-photo-age text-center">Срок</p>
            <a href="img/cat-demo3.jpg" class="colorbox"><img src="img/cat-demo3.jpg" alt="Срок-3"></a>
          </div>
          <div class="col-lg-3">
            <p class="kid-photo-age text-center">Срок</p>
            <a href="img/cat-demo4.jpg" class="colorbox"><img src="img/cat-demo4.jpg" alt="Срок-4"></a>
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