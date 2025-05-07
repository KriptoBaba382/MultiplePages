<?php 
$user_name = htmlspecialchars($_POST["username"]);
$user_phone = htmlspecialchars($_POST["userphone"]);

$token = "8064909342:AAG1qsGC1uiSfIaMW2Ky_TSfc5_zNklCxzw";
$chat_id = "5833743524";



$text = "Клиент: <b> {$user_name} </b>" . "%0A". "Телефон: " .urlencode("<b>+{$user_phone}</b>");

// $formData = array(
// "Клиент: " => $user_name,
// "Телефон: " => $user_phone
// );

// foreach($formData as $key => $value) {
// $text .= $key . "<b>". $value . "</b>" . "%0A";
// }

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&text={$text}&parse_mode=html", "r");

echo "Привет, " . $user_name . "<br>";
echo "Ваш телефон: <b>" . $user_phone . "</b>";

if ($sendToTelegram) {
echo "Succes";
} else {
echo "Error";
}


?>