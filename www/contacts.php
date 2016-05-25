<?php include "header.php" ?>

    <main>
      <div class="container">
        <h1>Контакты</h1>
        <p>Наш питомник расположен в курортной зоне Санкт-Петербурга. Если у Вас есть вопросы или Вам понравился котенок, обращайтесь удобным для Вас способом:</p>
        <a href="mailto:olga@karabasville.ru" class="block  contacts-link  link-mail">olga@karabasville.ru</a>
        <a href="https://www.facebook.com/profile.php?id=100010328652100" class="block  contacts-link  link-fb">Ольга Журавлёва</a>
        <a href="tel:+79213738373" class="block  contacts-link  link-tel">+7 921 373-83-73</a>
        <a href="skype:olgazhur66" class="block  contacts-link  link-skype">olgazhur66</a>

        <form action="" class="contacts-form">
          <label ><span class="required-field">Имя:</span><input type="text" id="name" required></label>
          <label ><span class="required-field">e-mail:</span><input type="email" id="email" required></label>
          <label ><span class="required-field">Текст письма:</span><textarea id="mess" id="" required></textarea></label>
          <input type="button" id="contacts-submit" value="Отправить" class="input-send">
        </form>
        <div class="contacts-alerts"></div>
      </div>
    </main>

    <?php include "footer.php" ?>

    <script src="js/jquery-1.12.0.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#contacts-submit').click(function(){
                // собираем данные с формы
                var name    = $('#name').val();
                var email   = $('#email').val();
                var mess    = $('#mess').val();
                // отправляем данные
                $.ajax({
                    url: "mail.php", // куда отправляем
                    type: "post", // метод передачи
                    dataType: "json", // тип передачи данных
                    data: { // что отправляем
                        "name":    name,
                        "email":   email,
                        "mess":    mess
                    },
                    // после получения ответа сервера
                    success: function(data){
                        $('.contacts-alerts').html(data.result); // выводим ответ сервера
                    }
                });
            });
        });
    </script>


  </body>
</html>