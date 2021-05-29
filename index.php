<?php 
/* İSMAİL ÖZÇELİK */
$connect_web = simplexml_load_file('http://www.tcmb.gov.tr/kurlar/today.xml');
    
$usd_buying = $connect_web->Currency[0]->BanknoteBuying;
$usd_selling = $connect_web->Currency[0]->BanknoteSelling;
 
$euro_buying = $connect_web->Currency[3]->BanknoteBuying;
$euro_selling = $connect_web->Currency[3]->BanknoteSelling;

$sterlin_buying = $connect_web->Currency[4]->BanknoteBuying;
$sterlin_selling = $connect_web->Currency[4]->BanknoteSelling;

$isvecFrang_buying = $connect_web->Currency[5]->BanknoteBuying;
$isvecFrang_selling = $connect_web->Currency[5]->BanknoteSelling;

$kanadaDolar_buying = $connect_web->Currency[7]->BanknoteBuying;
$kanadaDolar_selling = $connect_web->Currency[7]->BanknoteSelling;

?>

<!DOCTYPE html>
<html lang="tr">
<head profile="http://gmpg.org/xfn/11">
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
<meta name="robots" content="noindex"/>
<title>Döviz Kurları - MerkezBankasi.com</title>
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/embed-css.css">
    <link rel="stylesheet" type="text/css" href="assets/css/all.min.css">
    <script src="assets/js/jquery_all.js"></script>
    <script type="text/javascript" src="assets/js/marquee.min.js"></script>
</head>
<body>
	<div class="renk-siyah">
		<div class="sitene-ekle doviz ekle-stil-4">
			<div class="ekle-ic">
				<ul class="ekle-head">
					<li class="col-1">Birim Adı</li>
					<li class="col-2"></li>
					<li class="col-3">Fiyat</li>
					<li class="col-ara"></li>
                    <li class="col-4">Yön</li>
					<!-- <li class="col-5">Değişim (%)</li> -->
					<li class="col-6 c-chevron-up"></li>
				</ul>
				<ul>
				<li class="col-1"><span class="flag-img"><img height="21" width="21" src="assets/img/flag/USD.svg"></span><span class="ekle-kod">USD</span><span class="ekle-try">/TRY<span></li>
				<li class="col-2">Dolar</li>
				<li class="col-3">Alış: <?php echo $usd_buying ?> ₺</li>
				<li class="col-ara"></li>
				<li class="col-4 c-chevron-up"><i class="fas fa-chevron-up"></i></li>
				<!-- <li class="col-5 c-chevron-up">1.20%</li> -->
				<li class="col-6 c-chevron-up">Satış: <?php echo $usd_selling ?> ₺</li>
			</ul><ul>
				<li class="col-1"><span class="flag-img"><img height="21" width="21" src="assets/img/flag/EUR.svg"></span><span class="ekle-kod">EUR</span><span class="ekle-try">/TRY<span></li>
				<li class="col-2">Euro</li>
				<li class="col-3">Alış: <?php echo $euro_buying ?> ₺</li>
				<li class="col-ara"></li>
				<li class="col-4 c-chevron-up"><i class="fas fa-chevron-up"></i></li>
				<!-- <li class="col-5 c-chevron-up">0.79%</li> -->
				<li class="col-6 c-chevron-up">Satış: <?php echo $euro_buying ?> ₺</li>
			</ul><ul>
				<li class="col-1"><span class="flag-img"><img height="21" width="21" src="assets/img/flag/GBP.svg"></span><span class="ekle-kod">GBP</span><span class="ekle-try">/TRY<span></li>
				<li class="col-2">Sterlin</li>
				<li class="col-3">Alış: <?php echo $sterlin_buying ?> ₺</li>
				<li class="col-ara"></li>
				<li class="col-4 c-chevron-up"><i class="fas fa-chevron-up"></i></li>
				<!-- <li class="col-5 c-chevron-up">0.85%</li> -->
				<li class="col-6 c-chevron-up">Satış: <?php echo $sterlin_buying ?> ₺</li>
			</ul><ul>
				<li class="col-1"><span class="flag-img"><img height="21" width="21" src="assets/img/flag/CHF.svg"></span><span class="ekle-kod">CHF</span><span class="ekle-try">/TRY<span></li>
				<li class="col-2">İsviçre Frangı</li>
				<li class="col-3">Alış: <?php echo $isvecFrang_buying ?> ₺</li>
				<li class="col-ara"></li>
				<li class="col-4 c-chevron-up"><i class="fas fa-chevron-up"></i></li>
				<!-- <li class="col-5 c-chevron-up">0.84%</li> -->
				<li class="col-6 c-chevron-up">Satış: <?php echo $isvecFrang_buying ?> ₺</li>
			</ul><ul>
				<li class="col-1"><span class="flag-img"><img height="21" width="21" src="assets/img/flag/CAD.svg"></span><span class="ekle-kod">CAD</span><span class="ekle-try">/TRY<span></li>
				<li class="col-2">Kanada Doları</li>
				<li class="col-3">Alış: <?php echo $kanadaDolar_buying ?> ₺</li>
				<li class="col-ara"></li>
				<li class="col-4 c-chevron-up"><i class="fas fa-chevron-up"></i></li>
				<!-- <li class="col-5 c-chevron-up">1.00%</li> -->
				<li class="col-6 c-chevron-up">Satış: <?php echo $kanadaDolar_buying ?> ₺</li>
			</ul>			</div>
		</div>
	</div>
<script src="assets/js/embed-js.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-174553798-4"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-174553798-4');
</script>
</body>
</html>