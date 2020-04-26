<?php
include "function.php";
date_default_timezone_set('Asia/Jakarta');
echo color("white","☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞\n");
echo color("red","  [♡]  Time  : ".date('[d-m-Y] [H:i:s]')."   \n");
echo color("white","   [♡] TOLONG DIBACA DULU SEBELUM MENGGUNAKAN SC \n");
echo color("white","  [♡] JANGAN LUPA FOLLOW IG GUE YA : @Bananacreamy \n");
echo color("red","[♡] SCRIPT INI BERGUNA UNTUK BUAT AKUN BLIBLI \n");
echo color("white"," [♡] NEMU KENDALA? CHAT TELEGRAM @BANANACREAMY \n");
echo color("red"," [♡] BACA DOA DULU SEBELUM MULAI , OKAY?^.^ \n");
echo color("white","☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞ ☜☆☞\n");
	echo "\n";
echo  PHP_EOL;
echo "BLIBLI ACCOUNT CREATOR ++(MANUAL VERIV)++". PHP_EOL;
echo  PHP_EOL;

$x='Y';
while($x=='Y' || $x=='y'){
	
echo "email : ";
$email = trim(fgets(STDIN));
echo "pass  : ";
$pass = trim(fgets(STDIN));

buat($email, $pass);
echo  PHP_EOL;
echo "BIKIN LAGI?(y/n) : ";
$x = trim(fgets(STDIN));
}

function buat($email,$pass){
	$ch = curl_init();

	curl_setopt($ch, CURLOPT_URL, 'https://www.blibli.com/backend/mobile/reg');
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, "username=".$email."&password=".$pass);
	curl_setopt($ch, CURLOPT_ENCODING, 'gzip');

	$headers = array();
	$headers[] = 'Accept: application/json';
	$headers[] = 'User-Agent:BlibliAndroid/6.9.0(2632) 814a9275-4654-47a7-aabf-25f0beef9f3b Dalvik/2.1.0 (Linux; U; Android 6.0.1; CPH1701 Build/MMB29M)';
	$headers[] = 'Accept-Language: id';
	$headers[] = 'channelId: android';
	$headers[] = 'storeId: 10001';
	$headers[] = 'Content-Type: application/x-www-form-urlencoded';
	$headers[] = 'Host: www.blibli.com';
	$headers[] = 'Connection: Keep-Alive';
	$headers[] = 'Accept-Encoding: gzip';
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	
	$result = json_decode(curl_exec($ch));
	 print_r($result);

}

?>
