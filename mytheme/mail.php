<?
$post = (!empty($_POST)) ? true : false;
if($post){

	$sub = $_POST['sub'];
	$username = $_POST['username'];
	$phone = $_POST['phone'];

	$error = '';
	if(!$error) {
		$address = "fasovkin@stroibis.com";
		$mes = "Имя: ".$username."\n\nТелефон: ".$phone."\n\n";
		$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
		if($send) {echo 'OK';}
	}
	else{}
}
?>