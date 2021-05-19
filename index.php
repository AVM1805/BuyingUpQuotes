<?php
  include 'config.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <title><?= $tittle ?></title>
    <meta name="keywords" content="<?= $keywords ?>">
    <meta name="Description" content="<?= $desc ?>">
</head>
<body>
    <style>
        mark {
          background-color: #ffec82;
          text-decoration: underline;
        }

        body {
          background: url('bg.jpg');
          /* Фоновое изображение выровнено по центру в горизонтальной и вертикальной плоскостях */   background-position: center center;      
          /* Фон не повторяется */   background-repeat: no-repeat;      
          /* Фон зафиксирован в области просмотра и потому не двигается, когда высота контента превышает высоту изображения */   background-attachment: fixed;      
          /* Это свойство заставляет фон менять масштаб при изменении размеров содержащего его контейнера*/   background-size: cover;      

          /*
          #B8BD2F
          #F8FE72
          */
        }

        @media screen and (max-width: 1069px){
          body > .container {
            padding-top: 15% !important;
          }
        }
    </style>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" style="background-color: #A2260C !important;">
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <h1 style="color: white;" class="mx-auto" style="font-size:10vw !important;">Хотите продать акции? Покупаем акции в Чебоксарах!</h1>
          <!--
          <ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link" href="#home">
                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Go to first page">
                  Home
                </button>
              </a>
            </li>
          </ul>-->
        </div>
    </nav>
  </header>
    
  <div class="container" style="padding-top: 10%; margin-bottom: 13%">
    <div id="quotes_list">
      <h3>Мы покупаем акции любых акционерных обществ!</h3>
      <br>
      <h4>Чаще всего нам продают акции:</h4>
      <?php foreach ($quotes as $key => $value):?>
          <li><b><?= $value ?></b> Текущий курс: <b><span id="<?= $key ?>"></span></b> руб. за акцию.</li>
      <?php endforeach; ?>
    </div>

    <div style="margin-top: 20px">
      <h3>Чтобы продать акции позвоните нам по номеру: <mark style="line-height: 1.8;"><b><?= $phone ?></b></mark>, пишите нам на почту: <b><?= $email ?></b> или оставьте заявку/вопрос и мы Вам перезвоним!</h3>
      <form action="sender/telegram.php" method="post">
        <div class="form-group">
            <label for="name">Как вас зовут/ваш телефон</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Иван Иванович +7 888 888-88-88">
        </div>
        <div class="form-group">
          <label for="phone">Ваше предложение. Например: Я хочу продать акции ИнтерРАО, количество ... штук</label>
          <input type="text" class="form-control" id="phone" name="phone" placeholder="Введите текст">
        </div>
        <button type="submit" class="btn" style="background-color: #FF0103; color: white;"><b>Оставить заявку</b></button>
        <!-- btn-primary-->
      </form>
    </div>

    <div>
      <h4>Наши условия:</h4>
      <ul>
        <li>Вы подтверждаете наличие выпиской: бюллетенем либо свидетельством</li>
      </ul>

      <h4>Наши преимущества:</h4>
      <ul>
        <li>Лучшая цена и вы не теряеете 13%(НДФЛ при продаже через брокера)</li>
        <li>Деньги наличными <b>сразу</b> либо переводом на указанный вами счёт</li>
        <li>Все расходы по сделке платим мы</li>
      </ul>
      
      <p>Также проконсультируем по вступлению в права на акции, поможем оформить и прямо ответим на все ваши вопросы.</p>
    </div>
  </div>
  
  <footer class="footer fixed-bottom">
    <div class="container" style="background-color: #A2260C;">
      <span class="text-muted" style="color: white !important;">Мы всегда готовы обсудить детали сделки. Звоните: <b><?= $phone ?></b>!</span>
    </div>
  </footer>
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script src="costPaster/costPaster.js?1" type="text/javascript"></script>
</body>
</html>