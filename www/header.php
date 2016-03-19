<!--
=====================================================
=====                                           =====
==== Как сделать главной страницей любую другую? ====
=====                                           =====
=====================================================

По умолчанию при заходе на сайт www.karabasville.ru
сервер ищет в корневом каталоге страницу "index.php"
и показывает её пользователю.

Если мы хотим сделать главной страницей какую-то
другую, нам необходимо выполнить два действия:
  1) переименовать желаемую страницу в "index.php"
     (условно назовём её Лже-Индекс)
  2) дать другое имя бывшей index.php
     (условно назовём её - Реал-Индекс)

При этом возникает два подводных камня:
  1) если на сайте были ссылки на Лже-Индекс, эти
     ссылки теперь не работают, потому то Лже-Индекс
     сменил имя. Необходимо поправить все такие
     ссылки.
  2) если на сайте были ссылки на Реал-Индекс, теперь
     они ведут не на ту страницу. Надо поправить
     их.
-->

<?php
  $menu = array(
                0 => array(0 => '/', 1=> 'Главная'),
                1 => array(0 => '/news.php', 1=> 'Новости'),
                2 => array(0 => '/males.php', 1=> 'Коты'),
                3 => array(0 => '/females.php', 1=> 'Кошки'),
                4 => array(0 => '/kids.php', 1=> 'Котята'),
                5 => array(0 => '/plans.php', 1=> 'Планы'),
                6 => array(0 => '/graduates.php', 1=> 'Выпускники'),
                7 => array(0 => '/gallery.php', 1=> 'Галерея'),
                8 => array(0 => '/contacts.php', 1=> 'Контакты')
              );

?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Karabasville</title>
    <link rel="stylesheet" href="css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Philosopher&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
  </head>
  <body>

    <header class="header">
      <div class="container">
        <div class="row pos-rel">
          <div class="col-xs-12  logo-and-menu">
            <a href="index.php" class="logo"><img src="img/logo.png"></a>
            <nav>
              <ul class="main-menu">
                <?php foreach ($menu as $item): ?>
                  <li>
                    <a href="<?=$item[0]?>" class="main-menu-item <?=$_SERVER['REQUEST_URI'] == $item[0] ? ' active':''?>">
                      <?=$item[1]?>
                    </a>
                  </li>
                <?endforeach;?>
              </ul>
            </nav>
          </div>
          <div class="header-tel-and-cats">
            <p>+7 921 373-83-73</p>
            <p><a href="/kids.php">У нас есть котята!</a></p>
          </div>
          <div class="header-lang">
            <a href="#"><img src="img/ru.png" alt="Русский" width="20"></a>
            <a href="#"><img src="img/en.png" alt="English" width="20"></a>
          </div>
        </div>
      </div>
    </header>
