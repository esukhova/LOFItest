<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
//require 'phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);
$mail->Charset='UTF-8';
$mail->setLanguage ('ru', 'phpmailer/language/');
$mail->IsHTML(true);

/*// Настройки SMTP
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPDebug = 0;
 
$mail->Host = 'ssl://smtp.mail.ru';
$mail->Port = 465;
$mail->Username = 'vesna_9696@mail.ru';
$mail->Password = '2128506etomoi';
*/
//От кого письмо
$mail->setFrom('vesna_9696@mail.ru', "LOFI");
//Кому отправить
$mail->addAddress('e_ukhova@inbox.ru');
//Тема письма
$mail->Subject = 'Привет! Это сообщение со страницы Lo-fi';

$like = "Нравится";
if($_POST['like']=="formNo") {
    $like = "Не нравится";
}

//Тело письма
$body = '<h1>Добрый день!</h1>';

if(trim(!empty($_POST['name']))) {
$body.='<p><strong>Имя Фамилия:</strong> '.$_POST['name'].'</p>';
}
if(trim(!empty($_POST['date']))) {
    $body.='<p><strong>Дата рождения:</strong> '.$_POST['date'].'</p>';
}
if(trim(!empty($_POST['email']))) {
    $body.='<p><strong>E-mail:</strong> '.$_POST['email'].'</p>';
}
if(trim(!empty($_POST['like']))) {
    $body.='<p><strong>Отношение к Lo-fi:</strong> '.$like.'</p>';
}
if(trim(!empty($_POST['musicband']))) {
    $body.='<p><strong>Слушал/а исполнителей:</strong> '.$_POST['musicband'].'</p>';
}
if(trim(!empty($_POST['range']))) {
    $body.='<p><strong>Оценка Lo-fi:</strong> '.$_POST['range'].'</p>';
}
if(trim(!empty($_POST['whyLofi']))) {
    $body.='<p><strong>Почему нравится/не нравится Lo-fi:</strong> '.$_POST['whyLofi'].'</p>';
}
if(trim(!empty($_POST['genre']))) {
    $body.='<p><strong>Любимый жанр музыки:</strong> '.$_POST['genre'].'</p>';
}
if(trim(!empty($_POST['whyGenre']))) {
    $body.='<p><strong>Почему нравится указанный жанр музыки:</strong> '.$_POST['whyGenre'].'</p>';
}


$mail->Body = $body;

//Отправляем
if(!$mail->send()) {
    $message = 'Ошибка';
} else {
    $message = 'Данные отправлены!';
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response);
?>

