<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Karabasville</title>
    <link rel="stylesheet" href="css/styles.css">
    <link  href="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css" rel="stylesheet"> <!-- 3 KB -->
  </head>
  <body>

    <?php include "header.php" ?>

    <main>
      <div class="container cat-demo">
      <h1>Кот - демо</h1>
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
              <a href="img/female1.jpg"><img src="img/female1.jpg"></a>
              <a href="img/female2.jpg"><img src="img/female2.jpg"></a>
              <a href="img/female3.jpg"><img src="img/female3.jpg"></a>
              <a href="img/male1.jpg"><img src="img/male1.jpg"></a>
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