<?php include "header.php" ?>

    <main>
      <div class="container">
        <h1>Контакты</h1>
        <p>Наш питомник расположен в курортной зоне Санкт-Петербурга. Если у Вас есть вопросы или Вам понравился котенок, обращайтесь удобным для Вас способом:</p>
        <a href="mailto:olga@karabasville.ru" class="block  contacts-link  link-mail">olga@karabasville.ru</a>
        <a href="https://www.facebook.com/profile.php?id=100010328652100" class="block  contacts-link  link-fb">Ольга Журавлёва</a>
        <a href="tel:+79213738373" class="block  contacts-link  link-tel">+7 921 373-83-73</a>
        <form action="mail.php" method="post" onsubmit="return checkForm(this)" class="contacts-form">
          <label required><span class="required-field">Имя:</span><input type="text" name="name" ></label>
          <label required><span class="required-field">e-mail:</span><input type="email" name="email" ></label>
          <label required><span class="required-field">Текст письма:</span><textarea class="required-field" name="mess" id=""></textarea></label>
          <input type="submit" id="contacts-submit">
        </form>
      </div>
    </main>

    <?php include "footer.php" ?>

<!--     <script type="text/javascript">
      function checkForm(obj){
        var return_value = true;
        // заносим значение поля почтовый ящик в переменную mail
        var mail = obj.email.value;
        // заносим значение поля отправитель в переменную sender
        var sender = obj.name.value;
        // заносим значение поля сообщение в переменную msg
        var msg = obj.mess.value;
        // регулярное выражение для проверки почтового ящика
        var reg_mail = /[0-9a-z_]+@[0-9a-z_^.]+.[a-z]{2,3}/i;
        // регулярное выражение для проверки отправителя (буква a - латинская)
        var reg_sender = /[a-я,0-9]/i;
        // объявляем переменную, куда будет заноситься текст сообщения об ошибке
        var error_msg = "Некорректно заполнены поля:\n";
        //проверка поля отправитель
        if(reg_sender.exec(sender) == null){
          error_msg += "Ваше имя\n";
          return_value = false;
        }
        //проверка поля почтовый ящик
        if(reg_mail.exec(mail) == null){
          error_msg += "Ваш e-mail\n";
          return_value = false;
        }
        //проверка поля текст сообщения
        if(msg == ""){
          error_msg += "Ваше сообщение\n";
          return_value = false;
        }
        //проверка на наличие ошибок, если возникла ошибка, выводим текст сообщения
        if(!return_value)
          alert(error_msg);
        return return_value;
      }
    </script>
 -->    <script>
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
                        $('.messages').html(data.result); // выводим ответ сервера
                    }
                });
            });
        });
    </script>


  </body>
</html>