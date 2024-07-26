<?php

//В переменную $token нужно вставить токен, который нам прислал @botFather
$token = "7137573288:AAGwC30qyIptry-xn0R1F_Lwud7Piw0vhok";

//Сюда вставляем chat_id
$chat_id = "-1002236764860";

//Определяем переменные для передачи данных из нашей формы
if ($_POST['act'] == 'order') {
    $lastname = ($_POST['lastname']);
    $firstname = ($_POST['firstname']);
    $messenger = ($_POST['messenger']);
    $telephon = ($_POST['telephon']);


//Собираем в массив то, что будет передаваться боту
    $arr = array(
        'Фамилия' => $lastname,
        'Имя' => $firstname,
        'Мессенджер' => $messenger,
        'Телефон' => $telephon,
    );

//Настраиваем внешний вид сообщения в телеграме
    foreach($arr as $key => $value) {
        $txt .= "<b>".$key."</b> ".$value."%0A";
    };

//Передаем данные боту
    $sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

//Выводим сообщение об успешной отправке
    if ($sendToTelegram) {
        alert('Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.');
    }

//А здесь сообщение об ошибке при отправке
    else {
        alert('Что-то пошло не так. ПОпробуйте отправить форму ещё раз.');
    }
}

?>