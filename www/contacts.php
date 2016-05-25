<?php include "header.php" ?>

    <main>
      <div class="container">
        <h1>Контакты</h1>
        <p>Наш питомник расположен в курортной зоне Санкт-Петербурга. Если у Вас есть вопросы или Вам понравился котенок, обращайтесь удобным для Вас способом:</p>
        <a href="mailto:olga@karabasville.ru" class="block  contacts-link  link-mail">olga@karabasville.ru</a>
        <a href="https://www.facebook.com/profile.php?id=100010328652100" class="block  contacts-link  link-fb">Ольга Журавлёва</a>
        <a href="tel:+79213738373" class="block  contacts-link  link-tel">+7 921 373-83-73</a>
        <a href="skype:olgazhur66" class="block  contacts-link  link-skype">olgazhur66</a>

        <form method="POST" id="feedback-form" class="contacts-form">
          <label ><span class="required-field">Имя:</span><input type="text" name="nameFF" required x-autocompletetype="name"></label>
          <label ><span class="required-field">e-mail:</span><input type="email" name="contactFF" required x-autocompletetype="email"></label>
          <label ><span class="required-field">Текст письма:</span><textarea name="messageFF" required></textarea></label>
          <input type="submit" value="Отправить">
        </form>
        <div class="contacts-alerts"></div>
      </div>
    </main>



    <?php include "footer.php" ?>

    <script>
      document.getElementById('feedback-form').addEventListener('submit', function(evt){
        var http = new XMLHttpRequest(), f = this;
        evt.preventDefault();
        http.open("POST", "mail1.php", true);
        http.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
        http.send("nameFF=" + f.nameFF.value + "&contactFF=" + f.contactFF.value + "&messageFF=" + f.messageFF.value);
        http.onreadystatechange = function() {
          if (http.readyState == 4 && http.status == 200) {
            alert(http.responseText + ', Ваше сообщение отправлено!\n');
            f.messageFF.removeAttribute('value'); // очистить поле сообщения (две строки)
            f.messageFF.value='';
          }
        }
        http.onerror = function() {
          alert('Извините, данные не были переданы');
        }
      }, false);
    </script>

  </body>
</html>