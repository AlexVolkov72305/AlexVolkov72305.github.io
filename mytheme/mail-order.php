<?
$post = (!empty($_POST)) ? true : false;
if($post){

	$sub = $_POST['sub'];
	$operation = $_POST['operation'];
	$packing_one = $_POST['packing_one'];
	$packing_two = $_POST['packing_two'];
	$packing_three = $_POST['packing_three'];
	$number = $_POST['number'];
	$laying_one = $_POST['laying_one'];
	$laying_two = $_POST['laying_two'];
	$storage = $_POST['storage'];
	$v_packing = $_POST['v_packing'];
	$dop = join(", ", $_POST['dop']);
	
	$company_name = $_POST['company_name'];
	$company_user = $_POST['company_user'];
	$company_phone = $_POST['company_phone'];
	$company_email = $_POST['company_email'];
	$company_message = $_POST['company_message'];	
	
	$error = '';
	if(!$error) {
		$address = "fasovkin@stroibis.com";
		$mes = "".$operation."\n\nФасовка в тару: ".$packing_one."\n\nФасовка в клапанные мешки: ".$packing_two."\n\nФасовка в пакеты, автоматическая: ".$packing_three."\n\nСмешивание: ".$number."\n\n".$laying_one."\n\n".$laying_two."\n\n".$storage."\n\nОбщий объём фасовки: ".$v_packing."\n\nДополнительные услуги: ".$dop."\n\nНаименование компании: ".$company_name."\n\nКонтактное лицо: ".$company_user."\n\nКонтактный телефон: ".$company_phone."\n\nЭлектронная почта: ".$company_email."\n\nПримечание: ".$company_message."\n\n";
		$send = mail ($address,$sub,$mes,"Content-type:text/plain; charset = UTF-8\r\nFrom:$email");
		if($send) {echo 'OK';}
	}
	else{}
}
?>