<?php
  include 'params.php';
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
        }

        @media screen and (max-height: 700px){
            footer {
                display: none;
            }
        }
    </style>

  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <h1 style="color: white;" class="mx-auto">Скупка акций в вашем городе!</h1>
          <!--<ul class="navbar-nav ">
            <li class="nav-item active">
              <a class="nav-link" href="#home">
                <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Go to first page">
                  Home
                </button>
              </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#gallery">
                  <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="See the paintnings">
                    Gallery
                  </button>
                </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#about">
                  <button type="button" class="btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="bottom" title="About site">
                    About
                  </button>
                </a>
            </li>
          </ul>-->
        </div>
    </nav>
  </header>
    
  <div class="container" style="padding-top: 8%;">

      

    <div id="quotes_list">
    
      <h3>Мы покупаем акции следующих компаний:</h3>
      <?php foreach ($quotes as $key => $value):?>
          <li><b><?= $value ?></b> Текущий курс: <b><span id="<?= $key ?>"></span></b> руб. за акцию.</li>
          <!-- <span>
            <form oninput="result.innerHTML=parseFloat(n.value)*parseFloat(cost.value)">
              <input type="hidden" id="cost" name="cost" value="<?php 
                //$json = file_get_contents("cost.json");
                //$array = json_decode($json, true);
                //echo $array[$key];
              ?>"/>
              <input type="number" id="n" name="n" >
              <p>Я получу: <span id="result"></span></p>
            </form>
          </span> -->
      <?php endforeach; ?>
    </div>
      <div style="margin-top: 20px">
          <h3>Чтобы продать акции позвоните нам по номеру: <mark><b><?= $phone ?></b></mark> или оставьте заявку и мы Вам перезвоним!</h3>
          <form action="telegram.php" method="post">
              <div class="form-group">
                  <label for="name">Как вас зовут?</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Введите как вас зовут">
              </div>
              <div class="form-group">
                  <label for="phone">Телефон</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Введите телефон">
              </div>
              <button type="submit" class="btn btn-primary">Оставить заявку</button>
          </form>
      </div>
  </div>
  
  <footer class="footer fixed-bottom">
    <div class="container" style="background-color: bisque;">
      <span class="text-muted">Мы всегда готовы обсудить детали сделки. Звоните: <b><?= $phone ?></b>!</span>
    </div>
  </footer>
  
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <script src="cost.js?1" type="text/javascript"></script>
</body>
</html>