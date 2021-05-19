<?php

/* https://api.telegram.org/bot1650784315:AAETrj62ZNUaYJfj5loMKA4DA7KMMlK2eeQ/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone'];
$token = "1650784315:AAETrj62ZNUaYJfj5loMKA4DA7KMMlK2eeQ";
$chat_id = "-564150555";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

if ($sendToTelegram) {
  header('Location: ../views/thank-you.html');
} else {
  echo "Error";
}
?>