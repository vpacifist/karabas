<?php include "header.php" ?>

    <main>
      <div class="container">
        <h1>Библиотека</h1>
        <ul>
          <li><a href="#">Книга первая</a></li>
          <li><a href="#">Книга вторая</a></li>
          <li><a href="#">Книга третья</a></li>
          <li><a href="#">Книга четвёртая</a></li>
        </ul>
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