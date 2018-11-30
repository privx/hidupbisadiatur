<?php
error_reporting(0);
function randomColors() {
	// the array
	$arrX = array(
		"0;34","1;34","0;32","1;32","0;36","1;36","0;31","1;31","0;35","1;35","0;33","1;33"
	);

	// get random index from array $arrX
	$randIndex = array_rand($arrX);

	return $arrX[$randIndex];

	// output the value for the random index
	// echo $arrX[$randIndex];
}
function reff($reff) {

		$get = file_get_contents("https://api.randomuser.me");
		$rand = rand(1,999);
		$j = json_decode($get, true);
		$getName = $j['results'][0]['name']['first'];
		$getName2 = $j['results'][0]['name']['last'];
		$mail_r = $j['results'][0]['email'];
		$mail_p = explode('@', $mail_r);
		$domain = array('@gmail.com','@yahoo.com','@mail.com','@yandex.com','@gmx.de','@t-online.de','@yahoo.co.id','@yahoo.co.uk');
		$random = rand(0,7);
		$email  = $mail_p[0].$rand.$domain[$random];
		$body = '{"params":{"event":"registration","user":{"firstname":"'.$getName.'","lastname":"'.$getName2.'","email":"'.$getName.$getName2.$rand.'@gmail.com"},"referrer":{"referralCode":"'.$reff.'"},"refSource":"copy"},"apiToken":"BITUcvIG3HIHE-6ej58Pd-YkmtA"}';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "https://app.viral-loops.com/api/v2/events");
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $body);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate');
		$headers = array();
		$headers[] = "Accept: application/json, text/javascript, */*; q=0.01";
		$headers[] = "Referer: https://hidupbisadiatur.com/quiz/profile?refSource=copy&referralCode=cz728Tq";
		$headers[] = "Origin: https://hidupbisadiatur.com";
		$headers[] = "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/70.0.3538.110 Safari/537.36";
		$headers[] = "Content-Type: application/json";
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$result = curl_exec($ch);
	return $result;
}

echo "\033[1;36m[#BIMA]\033[0m : Designed by BIMA_GATES\r\n";
sleep(3);
echo "\033[1;36m[#BIMA]\033[0m : Melindungi keluarga semudah membuat pizza - hidupbisadiatur.com\r\n";
sleep(3);
echo "\033[1;36m[#BIMA]\033[0m : Got this from \033[0;37mhttps://github.com/privx\033[0m\r\n";
sleep(3);
echo "\033[1;36m[#BIMA]\033[0m : Lanjut? (\033[1;32my\033[0m/\033[1;31mn\033[0m) : ";
$bacot = trim(fgets(STDIN));
if($bacot=="n"){
	exit("\033[1;36m[#BIMA]\033[0m : \033[1;31msok iya lo gayn\033[0m\r\n\r\n\033[1;32m.......... Shutting down terminal! :)\033[0m");
}elseif($bacot=="y"){
}else{
	exit("\r\n\r\n\033[1;32m.......... Shutting down terminal! :)\033[0m");
}
echo "\033[1;36m[#BIMA]\033[0m : Reff u : ";
$reff = trim(fgets(STDIN));
echo "\033[1;36m[#BIMA]\033[0m : Jumlah : ";
$jum = trim(fgets(STDIN));
echo "\r\n";
for($a=0;$a<$jum;$a++){
	$setset = json_decode(reff($reff,$a));
	$mpsh = $setset->referralCode;
	$ahhh = $setset->isNew;
	if($ihh = 1){
		$ahhh = "true";
	}else{
		$ahhh = "false";
	}
		echo "\033[".randomColors()."m".$mpsh."\033[0m => \033[".randomColors()."m".$ahhh."\033[0m\n";

}
?>
