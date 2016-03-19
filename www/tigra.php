<?php include "header.php" ?>
<link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->

    <main>
      <div class="container cat-demo">
      <h1>GICh (WCF) Solar Wind Charming Lady</h1>
      <a href="#cat-pedigree" class="anchor-link">Родословная</a>
      <a href="#cat-show-res" class="anchor-link">Шоу результаты</a>
        <div class="row">
          <div class="col-lg-7">
            <p>Кошка и человек познакомились не просто давно, очень давно, - более шести тысяч лет назад. И даже после многих сотен лет совместного сосуществования кошка остается неразгаданной тайной - гордым, независимым и грациозным существом. Это загадочное создание вполне легко сможет обойтись без человеческого общества и общения с человеком. Чего не скажешь о самом человеке – в наш век стрессов и невообразимых нагрузок обойтись без этого животного очень непросто, а порой и просто нереально.</p>
            <h2 id="cat-pedigree">Родословная кота</h2>
            <table class="cat-pedigree">
              <tr>  <td rowspan="4">Имя кота</td>  <td rowspan="2">Имя кота</td>  <td>Имя кота</td>  </tr>
              <tr>                                                                <td>Имя кота</td>  </tr>
              <tr>                                 <td rowspan="2">Имя кота</td>  <td>Имя кота</td>  </tr>
              <tr>                                                                <td>Имя кота</td>  </tr>
              <tr>  <td rowspan="4">Имя кота</td>  <td rowspan="2">Имя кота</td>  <td>Имя кота</td>  </tr>
              <tr>                                                                <td>Имя кота</td>  </tr>
              <tr>                                 <td rowspan="2">Имя кота</td>  <td>Имя кота</td>  </tr>
              <tr>                                                                <td>Имя кота</td>  </tr>
            </table>
            <h2 id="cat-show-res">Шоу результаты</h2>
          </div>
          <div class="col-lg-5 cat-demo-images">


            <div class="fotorama"  data-nav="thumbs"  data-allowfullscreen="true">
              <img src="img/tosha/00-00.jpg" data-caption="0 месяцев">
              <img src="img/tosha/00-025.jpg" data-caption="2,5 месяца">
              <img src="img/tosha/00-04.jpg" data-caption="4 месяца">
              <img src="img/tosha/00-04-2.jpg" data-caption="4 месяца">
              <img src="img/tosha/00-06.jpg" data-caption="6 месяцев">
              <img src="img/tosha/00-09.jpg" data-caption="9 месяцев">
              <img src="img/tosha/00-095.jpg" data-caption="9,5 месяцев">
              <img src="img/tosha/00-095-2.jpg" data-caption="9,5 месяцев">
              <img src="img/tosha/00-095-3.jpg" data-caption="9,5 месяцев">
              <img src="img/tosha/00-095-4.jpg" data-caption="9,5 месяцев">
              <img src="img/tosha/00-095-5.jpg" data-caption="9,5 месяцев">
              <img src="img/tosha/00-11.jpg" data-caption="11 месяцев">
              <img src="img/tosha/00-11-2.jpg" data-caption="11 месяцев">
              <img src="img/tosha/00-11-3.jpg" data-caption="11 месяцев">
              <img src="img/tosha/00-11-4.jpg" data-caption="11 месяцев">
            </div>


          </div>
        </div>
      </div>
    </main>

    <?php include "footer.php" ?>

    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script> <!-- 16 KB -->
    <script src="js/jquery.colorbox-min.js"></script>
    <script>
      $( document ).ready(function() {
        $('a.colorbox').colorbox({
          rel:$(this).attr('src'),
          innerWidth:"90%",
          innerHeight:"90%"
        });
      });
    </script>


  </body>
</html>