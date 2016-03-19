<?php include "header.php" ?>

    <main>
      <div class="container plans">
        <h1>Планы</h1>
        <div class="row plans-item">
          <div class="col-lg-5">
            <a href="tosha.php">
              <p class="parent-name">GICh (WCF)<br/>Captain Coon’s Aristotel</p>
              <img src="img/tosha.jpg" alt="Captain Coon’s Aristotel" >
            </a>
          </div>
          <div class="col-lg-2">
            <h2>Помёт A</h2>
            <p class="kids-date"><b>Май 2016</b></p>
            <a href="#plans-a-brood-pedigree" class="brood-colorbox">Родословная помёта</a>
          </div>
          <div class="col-lg-5">
            <a href="tigra.php">
              <p class="parent-name">GICh (WCF)<br/>Solar Wind Charming Lady</p>
              <img src="img/tigra.jpg" alt="Solar Wind Charming Lady" >
            </a>
          </div>

          <div style='display:none'>
            <div id="plans-a-brood-pedigree" class="brood-pedigree">
              <h2>Родословная</h2>
              <table>
                <tr>  <td rowspan="4">Имя кота</td>  <td rowspan="2">Имя кота</td>  <td>Имя кота</td>  </tr>
                <tr>                                                                <td>Имя кота</td>  </tr>
                <tr>                                 <td rowspan="2">Имя кота</td>  <td>Имя кота</td>  </tr>
                <tr>                                                                <td>Имя кота</td>  </tr>
                <tr>  <td rowspan="4">Имя кота</td>  <td rowspan="2">Имя кота</td>  <td>Имя кота</td>  </tr>
                <tr>                                                                <td>Имя кота</td>  </tr>
                <tr>                                 <td rowspan="2">Имя кота</td>  <td>Имя кота</td>  </tr>
                <tr>                                                                <td>Имя кота</td>  </tr>
              </table>
            </div>
          </div>
        </div>

          <p class="text-left">Мейн-ку́н (англ. Maine Coon) — аборигенная порода кошек Соединенных Штатов Америки, которая произошла от кошек, проживающих на фермах Северо-Восточной Америки в штате Мэн. Первоначально мейн-кунами называли только кошек окраса чёрный табби. Из-за окраса шерсти, мощного сложения и огромного хвоста эти кошки внешне напоминали енотов (отсюда и название породы — буквально «мэнский енот». «Maine» — название штата Мэн, «coon» — вторая часть слова «raccoon», то есть «енот»). Кошки породы мейн-кун отличаются дружелюбным характером и особенно крупным размером. Среди домашних кошек это крупная порода: самцы могут весить до 12 килограммов, самки до 8 килограммов. Хотя у мейн-кунов полудлинная шерсть, кошки этой породы не требуют частого расчёсывания, как, например, персы.</p>

      </div>
    </main>

    <?php include "footer.php" ?>

    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/jquery.colorbox-min.js"></script>
    <script>
      $( document ).ready(function() {
        $('a.brood-colorbox').colorbox({inline:true});
      });
    </script>


  </body>
</html>