<?php

$post = (!empty($_POST)) ? true : false;

if($post)
{

$name = htmlspecialchars($_POST['name']);
$surname = htmlspecialchars($_POST['surname']);
$tel = htmlspecialchars($_POST['tel']);
$email = htmlspecialchars($_POST['email']);
$addres = htmlspecialchars($_POST["addres"]);
$message = htmlspecialchars($_POST['message']);
$tPlan =$_POST ['tPlan'];
$error = '';

  $spirit = '';
    if (empty($_POST["spirit"]))
    {
       $spirit = "Не нужен";
    }
    elseif (!empty($_POST["spirit"]) && is_array($_POST["spirit"]))
    {
       $spirit = "Нужен";
    }

  $tan = '';
    if (empty($_POST["tan"]))
    {
       $tan = "Не нужен";
    }
    elseif (!empty($_POST["tan"]) && is_array($_POST["tan"]))
    {
       $tan = "Нужен";
    }

  $powerСontrol = '';
    if (empty($_POST["powerСontrol"]))
    {
       $powerСontrol = "Не нужен";
    }
    elseif (!empty($_POST["powerСontrol"]) && is_array($_POST["powerСontrol"]))
    {
       $powerСontrol = "Нужен";
    }

  $plumbingKit = '';
    if (empty($_POST["plumbingKit"]))
    {
       $plumbingKit = "Не нужен";
    }
    elseif (!empty($_POST["plumbingKit"]) && is_array($_POST["plumbingKit"]))
    {
       $plumbingKit = "Нужен";
    }

  $delivery = '';
    if (empty($_POST["delivery"]))
    {
       $delivery = "Не нужен";
    }
    elseif (!empty($_POST["delivery"]) && is_array($_POST["delivery"]))
    {
       $delivery = "Нужна";
    }    

// Проверка телефона
function ValidateTel($valueTel)
{
$regexTel = "/^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/";
if($valueTel == "") {
return false;
} else {
$string = preg_replace($regexTel, "", $valueTel);
}
return empty($string) ? true : false;
}
if(!$email)
{
$error .= "Пожалуйста введите email<br />";
}
if($email && !ValidateTel($email))
{
$error .= "Введите корректный email<br />";
}
if(!$error)

// (length)
if(!$message || strlen($message) < 1)
{
$error .= "Введите ваше сообщение<br />";
}
if(!$error)
{


$name_tema = "=?utf-8?b?". base64_encode($name) ."?=";

$subject ="Новая заявка с сайтa!";
$subject1 = "=?utf-8?b?". base64_encode($subject) ."?=";
 
$message1 ="\n\nИмя: ".$name."\n\nФамилия: ".$surname."\n\nТелефон: " .$tel."\n\nE-mail: " .$email."\n\nАдрес: " .$addres."\n\nСообщение: ".$message."\n\nДистиллятор: ".$spirit."\n\nПерегонный куб на ".$tPlan. " литров"."\n\nТен на 2,5кВт: ".$tan."\n\nРегулятор мощности тена: ".$powerСontrol."\n\nСантех комплект: ".$plumbingKit."\n\nДоставка: ".$delivery;	

$header = "Content-Type: text/plain; charset=utf-8\n";

$header .= "From: Новая заявка <alex@mail.ru>\n\n";	
$mail = mail("alexvolkov72305@yandex.by", $subject, iconv ('utf-8', 'windows-1251', $message1));

if($mail)
{
echo 'OK';
}

}
else
{
echo '<div class="notification_error">'.$error.'</div>';
}

}
?>