<?php

if(isset($_POST['win2submit']) && !empty($_POST['phone']) && !empty($_POST['phone'])){
    $phone  = preg_replace ("/[^a-zA-ZА-Яа-я0-9-.,_\s]/", "", trim($_POST['phone']));
    $phone  = substr(htmlspecialchars($phone, ENT_QUOTES, 'Windows-1251'),  0, 100);
    $tema   = preg_replace ("/[^a-zA-ZА-Яа-я0-9-.,_\s]/", "", trim($_POST['tema']));
    $tema   = substr(htmlspecialchars($tema, ENT_QUOTES, 'Windows-1251'),  0, 100);
    $message = "{$tema}<br><br>";
    $message = $message."Телефон: {$phone}<br>";
    $message = $message.'<br><br>Дата - '.date("F j, Y, g:i a");
    $message = $message."\n<br>IP - ".$_SERVER["REMOTE_ADDR"];
    $subject = "{$tema} с сайта с сайта 21sol.ru";
    $to = $CONF['email'];
//	sendmail('stilg76@yandex.ru', $message, $subject);
    sendmail('opr101@udacha21.ru', $message, $subject);
//	sendmail('lobaev2@yandex.ru', $message, $subject);

    $call_value = $_COOKIE['_ct_session_id']; /* ID сессии Calltouch, полученный из cookie */
    $ct_site_id = '32776';
    $ch = curl_init();
    $tema = iconv("cp1251", "UTF-8", $tema);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Content-type: application/x-www-form-urlencoded;charset=utf-8"));
    curl_setopt($ch, CURLOPT_URL,'https://api.calltouch.ru/calls-service/RestAPI/requests/'.$ct_site_id.'/register/');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS,
        "phoneNumber=".$phone
        ."&subject=".urlencode($tema)
        ."".($call_value != 'undefined' ? "&sessionId=".$call_value : ""));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $calltouch = curl_exec ($ch);
    curl_close($ch);
//pr($calltouch); exit;
    header("Location: {$PAGE['adr']}?okmail=");
    exit;
}

if (isset($_GET['words'])) {
    $words = urldecode($_GET['words']);
    $words = preg_replace("/[^a-zA-ZА-Яа-я0-9-_\s]/", "", trim($words));
    $words = substr($words, 0, 55);
} else {
    $words = '';
}

foreach($_GET as $k => $v){
    $v = urldecode($v);
    $v = preg_replace("/[^a-zA-ZА-Яа-я0-9-+_\s;]/", "", trim($v));
    $_GET[$k] = substr($v, 0, 155);
}

if(!empty($PAGE['adr2']) && $PAGE['adr2'] == $_SERVER['REQUEST_URI']){
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://{$_SERVER['HTTP_HOST']}{$PAGE['adr']}");
    exit();
}

if(isset($_GET['exit'])){
    $_SESSION['loginza'] = array();
    header("Location: {$_GET['exit']}");
    exit;
}

$er  = "";

if(!empty($_POST['enter']) && !empty($_POST['login']) && !empty($_POST['psw'])){
    $name = substr($_POST['login'],0,55);
    $psw  = substr($_POST['psw'],0,15);

    $res = mysql_query("SELECT * FROM user WHERE login='{$name}' AND psw='{$psw}'");

    if(mysql_num_rows($res) != 0){
        $nav = mysql_fetch_array($res, MYSQL_ASSOC);

        $_SESSION['UserInfo']['id']     = $nav['id'];
        $_SESSION['UserInfo']['name']   = $nav['login'];
        $_SESSION['UserInfo']['fio']    = $nav['fio'];
        $_SESSION['UserInfo']['mail']   = $nav['mail'];
        $_SESSION['UserInfo']['tel']    = $nav['tel'];
        $_SESSION['UserInfo']['adress'] = $nav['adress'];
        $_SESSION['UserInfo']['mgroup'] = $nav['status'];
        $_SESSION['UserInfo']['last']   = $nav['last'];

        if(!empty($_POST['save'])){
            $s = 1;
        } else {
            $s = 0;
        }
        my_setcookie('sol_user', $nav['login'], $s);
        my_setcookie('sol_pass', md5($nav['psw']), $s);

        $res = mysql_query("UPDATE user SET last = NOW() WHERE id={$nav['id']}");

        header("Location: /?ok="); exit;

    } else {
        $er  = "error";
        adminlog("Ошибка авторизации", "Пользователь", 'Нет данных');
    }
}

$text = $PAGE['text'];
$text = str_replace('<p>{{', '{{', $text);
$text = str_replace('}}</p>', '}}', $text);
//	echo "---{$text}---";
preg_match_all("/{{(.+?)}}/si", $text, $matchespage);
$toptext = "";
foreach($matchespage[1] as $k => $code){

    $code = str_replace("&", "&", $code);

    if(strpos($code, '?') !== false){
        list($code, $temp) = explode("?", $code);
    } else {
        $temp   = "";
    }

    if(!empty($temp)){
        $get_ = $temp;
        if(strpos($get_, '&') !== false){
            $get  = explode("&", $get_);
        } else {
            if(!empty($get_)){
                $get[]  = $get_;
            } else {
                $get  = "";
            }
        }
        while(list($i_, $line) = @each($get)){
            $t = explode ("=" , $line);
            $code_var[$t[0]] = $t[1];
        }
    }

    if(file_exists(getenv("DOCUMENT_ROOT")."/o/block/class/".$code.".php")){
        ob_start();
        require_once "{$_SERVER['DOCUMENT_ROOT']}/o/block/class/{$code}.php";
        $r = ob_get_contents();
        ob_end_clean();
        $toptext = $toptext.$r;
    }
}

echo "<!DOCTYPE html>\n";
echo "<html lang='ru' xml:lang='ru_RU' prefix='og: http://ogp.me/ns#'>\n";
echo "<head>\n";
echo "<title>";
$PAGE['title'] =  preg_replace('/ {2,}/', ' ', $PAGE['title']);
if(!empty($PAGE['pagetitle'])){
    echo $PAGE['pagetitle'];
} else {
    echo $PAGE['title'].' / '. $CONF['name'];
}
echo "</title>\n";

$ptext = preg_replace("|<style>.*</style>|isU", '', $PAGE['text']);

if(empty($PAGE['keywords'])){
    $PAGE['keywords']  = generate_keyword($PAGE['title'].' '.$ptext);
}
$ogdesc = '';
$ogdesc = strip_tags($ptext);
$ogdesc = print_og($ogdesc);
if(empty($PAGE['description'])) $PAGE['description'] = $ogdesc;
$PAGE['description'] =  preg_replace("|{{.*}}|isU", '', $PAGE['description']);
$CONF['description'] =  preg_replace('|{{.*}}|isU', ' ', $CONF['description']);
$PAGE['description'] =  preg_replace("/ {2,}/", '', $PAGE['description']);
$CONF['description'] =  preg_replace('/ {2,}/', ' ', $CONF['description']);

echo "<meta http-equiv='content-Type'      content='text/html; charset=windows-1251'>\n";
echo "<meta name='Description'             content='".(!empty($PAGE['description']) ? $PAGE['description'] : $CONF['description'])."'>\n";
echo "<meta name='Keywords'                content='".(!empty($PAGE['keywords']) ? $PAGE['keywords'] : $CONF['keywords'])."'>\n";
?>
<?php if($PAGE['id'] == 23387){ ?>
    <meta name="robots" content="noindex, nofollow"/>
<?php }  else { ?>
    <meta name='Robots' content='All' />
<?php }
?>
<meta name="viewport"                content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1" />
<meta name="format-detection"        content="telephone=no" />
<meta name="MobileOptimized"         content="540" />
<meta http-equiv="X-UA-Compatible"   content="IE=edge,chrome=1" />
<meta http-equiv="x-rim-auto-match"  content="none" />
<link rel="image_src"  href="/upload/Image/sociiimg.jpg" />
<link rel="icon"       href="/favicon.png" type="image/x-icon" />
<link rel='canonical'  href='<?php echo $PAGE['adr']; ?>' />
<link rel="stylesheet" href="/css/default.css?ver=5.5">
<link rel="stylesheet" href="/css/style.css?veris=2.96">
<link rel="stylesheet" href="/css/pravki_main_test_form.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="/css/owl2.carousel.min.css">
<link rel="stylesheet" href="/css/animate.min.css">
<link rel="stylesheet" href="/css/style-n.css">
<link rel="stylesheet" href="/css/swiper-bundle.min.css">
<script src="/js/jquery-3.1.1.min.js?ver=2.8"></script>
<script>
    <?php
    $action    = $DB->select('SELECT * FROM ?_map WHERE s_close=? AND parent_id=? AND menuname=? ORDER BY datepost DESC LIMIT 3', 0, 22439, '');
    $actiontxt = array();
    foreach($action as $v){
        $cat_pics = glob("upload/Image/catalog/{$v['pics']}-*.jpg");
        $namep = basename($cat_pics['0'],".jpg");
        $actiontxt[] = "<a href='".(empty($v['link']) ? $v['adr'] : $v['link'])."'><img src='/upload/Image/catalog/big/{$namep}.jpg' style='width:100%'></a>";
    }
    echo "var action = \"".implode('', $actiontxt)."\";\n";
    ?>
</script>
<?php

echo "<meta content='article' property='og:type'>\n";
$ogtitle = '';
if(!empty($PAGE['pagetitle'])){
    $ogtitle = $PAGE['pagetitle'];
} else {
    $ogtitle = $PAGE['title'];
}
$ogtitle = strip_tags($ogtitle);

if(!empty($ogtitle)) echo "<meta content='{$ogtitle}' property='og:title'>\n";
echo "<meta content='{$PAGE['adr']}' property='og:url'>\n";
$ogimg = '';
if(!empty($PAGE['pics'])){
    $cat_pics = glob("upload/Image/catalog/{$PAGE['pics']}-*.jpg");
    $namep    = basename($cat_pics[0],".jpg");
    $ogimg    = "/upload/Image/catalog/big/{$namep}.jpg";
} else {
    $ogimg    = "/upload/Image/sociiimg.jpg";
}
if(!empty($ogimg)) echo "<meta content='{$ogimg}' property='og:image'>\n";

if(empty($PAGE['description'])){
    $ptext = preg_replace("|<style>.*</style>|isU", '', $PAGE['text']);
} else {
    $ptext = $PAGE['description'];
}

$ogdesc = '';
$ogdesc = strip_tags($ptext);
$ogdesc = print_og($ogdesc);
$ogdesc =  preg_replace("|{{.*}}|isU", '', $ogdesc);
$ogdesc =  preg_replace('/ {2,}/', ' ', $ogdesc);

if(!empty($ogdesc)) echo "<meta content='{$ogdesc}' property='og:description'>\n";
?>
<!-- Global site tag (gtag.js) - Google AdWords: 955160028 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-955160028"></script>
<script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'AW-955160028'); </script>

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-PRKGKJL');</script>
<!-- End Google Tag Manager -->
<!-- Top.Mail.Ru counter -->
<script type="text/javascript">
  var _tmr = window._tmr || (window._tmr = []);
  _tmr.push({id: "3332381", type: "pageView", start: (new Date()).getTime()});
  (function (d, w, id) {
    if (d.getElementById(id)) return;
    var ts = d.createElement("script"); ts.type = "text/javascript"; ts.async = true; ts.id = id;
    ts.src = "https://top-fwz1.mail.ru/js/code.js";
    var f = function () {var s = d.getElementsByTagName("script")[0]; s.parentNode.insertBefore(ts, s);};
    if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); }
  })(document, window, "tmr-code");
</script>
<noscript><div><img src="https://top-fwz1.mail.ru/counter?id=3332381;js=na" style="position:absolute;left:-9999px;" alt="Top.Mail.Ru" /></div></noscript>
<!-- /Top.Mail.Ru counter -->
<meta name="yandex-verification" content="5825931139ac5ecd" />
<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?168",t.onload=function(){VK.Retargeting.Init("VK-RTRG-514746-hvZpI"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-514746-hvZpI" style="position:fixed; left:-999px;" alt=""/></noscript>


<?php

if($PAGE['id'] == 1) {
    $daysInMonth = cal_days_in_month(CAL_GREGORIAN, date("n"), date("Y"));
    $day = date("j");
    $daysLeft = 15;

    if($day < 15 ){
        $daysLeft = 15 - $day;
    } else if ($day >= 15 && $day < $daysInMonth ) {
        $daysLeft = $daysInMonth - $day;
    }

    if($day == 15 || $day == 31) {
        $daysLeft = 1;
    }

    echo '<style>
					.slide_countdown {
						background-image: url(/images/main_new/countdown/'.$daysLeft.'.jpg);
					}
					@media (max-width: 480px) {
						.slide_countdown {
							background-image: url(/images/main_new/countdown/mobile/'.$daysLeft.'.jpg);
						}
					}
				</style>';
}

?>

</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PRKGKJL"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- calltouch -->
<script src="https://mod.calltouch.ru/init.js?id=v8q5ulmn"></script>
<!-- /calltouch -->

<!-- Yandex.Metrika counter -->
<script>
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
    ym(54093763, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/54093763" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<?php
// <script crossorigin="anonymous" async src="//api.pozvonim.com/widget/callback/v3/719503ef301422f4058b4ba8022903af/connect" id="check-code-pozvonim"></script>
// <script crossorigin="anonymous" async type="text/javascript" src="//api.pozvonim.com/widget/callback/v3/fb1b9903da4b54217fbd1801b1976fc1/connect" id="check-code-pozvonim"></script>
?>

<script>
    var PozvonimcomWidgetConfig = {
        ready: function(){
            this.api.on('call', function(){
                var ct_site_id = '32776';
                var phone = this.api.getPhone();
                var sub = 'Заявка с Pozvonim';
                var ct_data = { phoneNumber: phone, subject: sub, requestUrl: location.href, sessionId: window.call_value };
                var request = window.ActiveXObject?new ActiveXObject("Microsoft.XMLHTTP"):new XMLHttpRequest();
                var post_data = Object.keys(ct_data).reduce(function(a, k) {if(!!ct_data[k]){a.push(k + '=' + encodeURIComponent(ct_data[k]));}return a}, []).join('&');
                var url = 'https://api.calltouch.ru/calls-service/RestAPI/'+ct_site_id+'/requests/orders/register/';
                request.open("POST", url, true); request.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded'); request.send(post_data);
            });
        }
    };
</script>

<script data-skip-moving="true">
    (function(w,d,u,b){
        s=d.createElement('script');r=(Date.now()/1000|0);s.async=1;s.src=u+'?'+r;
        h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
    })(window,document,'https://cdn.bitrix24.ru/b4347333/crm/site_button/loader_2_k0pxey.js');
</script>

<?php
if(isset($_GET['okmail'])){
    echo "<div class='warni' style='position:fixed;top:1px;z-index:100000;width:100%;color:#ff0;background-color:red;text-align:center;margin:0 auto;padding:0.7em 1em'><b>Ваше сообщение было успешно отправлено. Спасибо. Mы свяжемся с Вами в ближайшее время</b></div>";
    ?>
    <script>
        setTimeout(function() {
            $('.warni').fadeOut();
        }, 3000);
    </script>
    <?php
}
?>

<div class="pagewrap" id="PageWrap"><div class="main-layer layer-size">

        <noindex><div class="hide-layer layer-size butt-close-main-menu"></div>
            <div class="menu-layer layer-size">
                <div class="cl-mm butt-close-main-menu"></div>
                <div class="bg-mm"></div>
                <div class="cont-mm">
                    <div class='logopda'>
                        <img src="/i/site/logos.png" alt='<?php echo $CONF['name']; ?>' title='<?php echo $CONF['name']; ?>'>
                    </div>
                    <ul class="rubrics">
                        <li><a href="/">Главная</a></li>
                        <?php
                        $menu = $DB->select('SELECT * FROM ?_map WHERE s_close=? AND menuname=? ORDER BY sort_id', 0, 'top');
                        foreach($menu as $m){
                            if(!empty($m['menutitle'])) $m['title'] = $m['menutitle'];
                            echo "<li><a href='".(empty($m['link']) ? $m['adr'] : $m['link'])."'>{$m['title']}</a></li>";
                        }
                        ?>

                        <li><a href="https://wa.me/79373726166" class="nav_phone nav_phone--whatsapp" style="color:#23a4dd;">8 937 372 61 66</a></li>
                        <li><a href="https://t.me/udacha21_bot" class="nav_phone nav_phone--telegram" style="color:#23a4dd;">@udacha21_bot</a></li>
                        <li><a href="tel:8352410000" class="nav_phone" style="color:#23a4dd;">(8352) 41-00-00</a></li>
                    </ul>
                </div>
                <div class="butt b-close-mm butt-close-main-menu"><a><img src="/i/site/icon-close-white.png" alt='Close'></a></div>
            </div></noindex>

        <style>
            .slider-for-s {
                margin-top: 125px;
                background-color: #fff;
            }
            .slider-for-s a, .slider-for-ss a {
                display: block;
                height: 500px;
                background-position: center center;
                background-repeat: no-repeat;
            }
            @media screen and (max-width: 940px) {
                .slider-for-ss {
                    margin-top: 100px;
                }
                .slider-for-ss a {
                    /*height: 250px;*/
                    height: 190px;
                    background-size: cover;
                    background-position: left center;
                }
                .pupwins {
                    display: none;
                }
                .pagen {
                    margin-top: 0px;
                }
                .slick-next {
                    opacity: 0.5;
                }
                .slick-prev {
                    opacity: 0.5;
                }
            }
        </style>
        <script>
            $(function () {
                $('.slider-for-s').slick({
                    infinite: true,
                    slidesToShow:   1,
                    slidesToScroll: 1,
                    speed: 1000,
                    autoplay: true,
                    autoplaySpeed: 3000,
                });
                $('.slider-for-ss').slick({
                    infinite: true,
                    slidesToShow:   1,
                    slidesToScroll: 1,
                    speed: 1000,
                    autoplay: true,
                    autoplaySpeed: 3000,
                });
            });
        </script>

        <?php /*

<?php if($PAGE['id'] == 1){ ?>
	<div class='head'>
		<div class='topn width1200 clearfix headerdef'>
			<?php require_once "o/block/top.php"; ?>
		</div>
		<div class='topn width1200 clearfix menunav' style='background-color:#fff'>
			<div>
				<?php require_once "o/block/menu.php"; ?>
			</div>
		</div>
	</div>
	<div class='pdanone'>
		<div class='slider-for-s'>
		    <a href='https://21sol.ru/pozicii-v-prodazhe/poziciya-2-new/' class='btnz' style='background-image: url(/i/site/banner_big_1.jpg)'></a>
			<a href='https://21sol.ru/akcii/trade-in-bystraya-prodazha-vashej-kvartiry-i-pokupka-novoj/' class='btnz' style='background-image: url(/i/site/banner_big_2.jpg)'></a>
			<a href='#win2' class='btnz' style='background-image: url(/i/site/banner_2.jpg)'></a>
			<!--<a href='#win2' class='btnz' style='background-image: url(/i/site/bannew.jpg?ver=4.461)'></a>-->
			<!--<a href='#win2' class='btnz' style='background-image: url(/i/site/bneww.jpg?ver=4.461)'></a>-->
			<!--<a href='#win2' class='btnz' style='background-image: url(/i/site/b-f-1-1.jpg?ver=4.461)'></a>-->
			<!--<a href='/akcii/akciya-dvushki-raspashonki-60-kvm-s-garderobnoj-2-348-000-rublej-sdach/' style='background-image: url(/i/site/slider-2.jpg?ver=4.46)'></a>-->
			<!--<a href='/usloviya/#trejd-in' style='background-image: url(/i/site/ban-1.jpg?ver=4.4)'></a>-->
			<!--<a href='/usloviya/' style='background-image: url(/i/site/ban-2.jpg?ver=4.5)'></a>-->
			<!--<a href='/usloviya/' style='background-image: url(/i/site/ban-3.jpg?ver=4.5)'></a>-->
			<!--<a href='/kvartiry-s-remontom/' style='background-image: url(/i/site/ban-4.jpg?ver=4.4)'></a>-->
		</div>
	</div>
	<div class='nodiv'>
		<div class='slider-for-ss'>
		    <a href='https://21sol.ru/pozicii-v-prodazhe/poziciya-2-new/' class='btnz' style='background-image: url(/i/site/banner_small_1.jpg)'></a>
			<a href='https://21sol.ru/akcii/trade-in-bystraya-prodazha-vashej-kvartiry-i-pokupka-novoj/' class='btnz' style='background-image: url(/i/site/banner_small_2.jpg)'></a>
			<a href='#win2' class='btnz' style='background-image: url(/i/site/banner2.jpg)'></a>
			<!--<a href='#win2' class='btnz' style='background-image: url(/i/site/b-f-1-s.jpg?ver=4.461)'></a>
			<a href='/usloviya/' class='btnz' style='background-image: url(/i/site/ban-2s-1.jpg?ver=4.461)'></a>
			<a href='/usloviya/' class='btnz' style='background-image: url(/i/site/ban-3s-1.jpg?ver=4.461)'></a>-->
			<!--<a href='/akcii/akciya-dvushki-raspashonki-60-kvm-s-garderobnoj-2-348-000-rublej-sdach/' style='background-image: url(/i/site/slider-2s.jpg?ver=4.56)'></a>-->
			<!--<a href='/kvartiry-s-remontom/' style='background-image: url(/i/site/ban-4s.jpg?ver=4.4)'></a>-->
		</div>
	</div>
<?php } elseif($PAGE['id'] == 23387){ ?>
	<!--<div class='head'>
		<div class='topn width1200 clearfix headerdef'>
			<?php require_once "o/block/top.php";?>
		</div>
		<div class='topn width1200 clearfix menunav' style='background-color:#fff'>
			<div>
				<?php require_once "o/block/menu.php"; ?>
			</div>
		</div>
	</div>-->
<?php } else { ?>
	<div class='head'>
		<div class='topn width1200 clearfix headerdef'>
			<?php require_once "o/block/top.php"; ?>
		</div>
		<div class='topn width1200 clearfix menunav' style='background-color:#fff'>
			<div>
				<?php require_once "o/block/menu.php"; ?>
			</div>
		</div>
		<div class='topn width1200 clearfix topnav'><div style='position:relative'><?php navlink($PAGE); ?></div></div>
	</div>
<?php } ?>


*/ ?>

        <?php require_once "o/block/top_new.php"; ?>


        <div style='position:fixed;z-index:10000002;right:7px;top:20px'>
            <div class="yesdiv gabm b-menu butt-open-main-menu navbar-toggle">
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </div>
        </div>

