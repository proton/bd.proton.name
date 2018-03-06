<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- DigitFlip - Under Construction/Coming Soon Page by @nique - info@aniqueahmad.com  -->
<title>День рождения</title>

<!-- Style Sheet -->
<?php
$colors = array('red','red','blue','orange', 'green');
$i = rand (0, count($colors)-1);
$color = $colors[$i];
?>
<link rel="stylesheet" type="text/css" media="all" href="/css/<?php echo $color; ?>/style.css" />
<link rel="stylesheet" type="text/css" media="all" href="/css/main.css" />
<link rel="stylesheet" type="text/css" media="all" href="/css/jquery.gritter.css" />
<!-- JavaScripts -->
<script type="text/javascript" src="js/jquery-1.3.2.js"></script>
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<script type="text/javascript" src="js/jquery.gritter.min.js"></script>
<script type="text/javascript"> $(function () {$('#defaultCountdown').countdown({until: new Date(2013, 11-1, 29, 19, 0, 0), format: 'ODHMS'});}); </script>
<script type="text/javascript" src="http://userapi.com/js/api/openapi.js?34"></script>
<script type="text/javascript"> VK.init({apiId: 2666856, onlyWidgets: true}); </script>
<script type="text/javascript"> $(function () {$.gritter.add({title: 'Не нравится оформление?', text: 'НАЖМИ F5!'});}); </script>

</head>
<body>
<div id="wrap">
	<div class="container" id="main">
		<h1>День рождения</h1>
		<br/>
		<h3>До начала осталось:</h3>
		<br/>
		<div id="uccounter">
			<div id="defaultCountdown"></div>
			<div id="overlay"></div>
		</div>
		</ul>
		<div><b>Место проведения:</b> г. Москва, проспект Андропова, д. 21 п. 1 кв. 90</div>
		<div><b>Дата и время:</b> с 29-11-2013 18:00 по 01-12-2013 00:00 (да, тут нет опечатки, именно 30 часов)</div>
	</div>
	<div class="container">
		<h3>Повод</h3>
		<p style='text-align:сenter'>
			20 ноября мне исполняется 25 лет, а моей девушке 17 ноября исполнится 20, и это отличный повод, чтобы прийти и поздравить нас обоих!
		</p>
		<h3>Виновники торжества</h3>
		<table class='tableb'>
			<tr><th>Пётр (proton)</th><th>Дарья (onila)</th></tr>
			<tr><td width='50%'><img src='/images/p.jpg'/></td><td><img src='/images/o.jpg'/></td></tr>
			<tr><td>20 ноября</td><td>17 ноября</td></tr>
			</table>
	</div>
	<div class="container">
		<h3>Карта</h3>
		<script type="text/javascript" src="http://api-maps.yandex.ru/2.0-stable/?load=package.standard&lang=ru-RU"></script>
		<div id="map" style="width: 751px; height: 280px"></div>
		<script type="text/javascript">
			ymaps.ready(init);
			var myMap;

			function init(){
				myMap = new ymaps.Map ("map", {
					center: [55.679138, 37.665444],
					zoom: 16,
          behaviors: ['default', 'scrollZoom']
				});

				myPlacemark = new ymaps.Placemark([55.679138, 37.665444], {
					content: 'Где-то тут!',
					balloonContent: 'Где-то тут!'
				});
				myMap.geoObjects.add(myPlacemark);
				myMap.controls.add('zoomControl').add('typeSelector').add('mapTools');
			}
</script>
	</div>
	<div class="container">
		<h3>Контакты:</h3>
		<br/>
		<table style='width:100%' border="0">
		<tr>
		<th>Пётр (proton)</th>
		<th>Дарья (onila)</th>
		</tr>
		<tr>
		<td><ul class='ul'>
			<li>Телефон: +7 (916) 862-18-29</li>
			<li>Вконтакте: <a href='https://vk.com/psavichev'>https://vk.com/psavichev</a></li>
			<li>ICQ: 272-747-242</li>
			<li>Skype: prot0n-1988</li>
			<li>Jabber: proton@proton.name</li>
		</ul></td>
		<td><ul class='ul'>
			<li>Телефон: +7 (964) 797-04-06</li>
			<li>Вконтакте: <a href='https://vk.com/onilalisa'>https://vk.com/onilalisa</a></li>
			<li>Email: onila@onila.ru</li>
		</ul></td>
		</tr>
		</table>
		<h3>Ещё раз адрес для <s>слепых</s> невнимательных:</h3>
		<address>г. Москва, проспект Андропова, дом 21 подъезд 1 квартира 90 (метро Коломенская)</address>
		<br/>
		Если вы едете на метро, то вам нужен последний вагон из центра, затем выходите, поворачиваете сначало направо, а затем - налево. Перед вами будет дом со сбербанком на первом этаже, он вам и нужен.
	</div>
<!--	<div class="container">
		<h3>Как добраться:</h3>
		<p class="p">
			<b>от станции метро <font color='grey'>Отрадное</font></b><br/>
			Первый вагон из центра. Оттуда автобус <b>605</b> (либо маршрутки <b>605м</b> и <b>88м</b>) до остановки <b>&laquo;Дежнева 32&raquo;</b>.<br/>
			Вот ещё варианты: <a href='http://msk.rusavtobus.ru/ru/?alat=55.8633187&alng=37.6046929&blat=55.8675394&blng=37.6330068&types=8&aad=%D0%BC.%20%D0%9E%D1%82%D1%80%D0%B0%D0%B4%D0%BD%D0%BE%D0%B5&bad=%D0%97%D0%B0%D0%BF%D0%BE%D0%B2%D0%B5%D0%B4%D0%BD%D0%B0%D1%8F%2C%208'>http://msk.rusavtobus.ru</a>
		</p>
		<p class="p">
			<b>от станции метро <font color='orange'>Свиблово</font></b><br/>
			Первый вагон из центра. Оттуда автобус <b>628</b> (либо маршрутки <b>628м</b> и <b>280м</b>) до остановки <b>&laquo;Спорткомплекс Медведково&raquo;</b> (тут главное - не поехать случайно в другую сторону).<br/>
			Вот ещё варианты: <a href='http://msk.rusavtobus.ru/ru/?alat=55.8552041&alng=37.6526989&blat=55.8675394&blng=37.6330068&types=8&aad=%D0%BC.%20%D0%A1%D0%B2%D0%B8%D0%B1%D0%BB%D0%BE%D0%B2%D0%BE&bad=%D0%97%D0%B0%D0%BF%D0%BE%D0%B2%D0%B5%D0%B4%D0%BD%D0%B0%D1%8F%2C%208'>http://msk.rusavtobus.ru</a>
		</p>
		<b>P.S.</b> Вообще от м. Свиблово, м. Бабушкинская и м. Отрадное можно за 20 минут дойти пешком.
		<br/>
		<br/>
		<b>Контакты:</b>
		<br/>
		Телефон: +7 (916) 862-18-29, остальные контакты можно найти на <a href='http://proton.name'>http://proton.name</a>.
	</div>-->
<!--	<div class="container">
		<h3>Программа</h3>
		<table class='tableb'>
			<tr><th>Примерный алгоритм</th><th>Мероприятия</th></tr>
			<tr>
				<td width='55%'>
					<ul class='ul'>
						<li><b>16:00</b> - Приходят желающие помочь с готовкой/организацией</li>
						<li><b>18:00</b> - Официальное начало, поздравляем Дашу</li>
						<li><b>00:00</b> - Поздравляем Петра</li>
						<li><b>00:20</b> - Сваливают те, кто не будет оставаться на ночь (до метро - 20 минут пешком, 5 на маршрутке)</li>
						<li><b>05:00</b> - Вырубаются самые стойкие</li>
					</ul>
				</td>
				<td>
					<ul class='ul'>
						<li>Мафия</li>
						<li>Манчкин и Эволюция</li>
						<li>Фанты</li>
						<li>Крокодил</li>
						<li>Кальян</li>
						<li>Песни под гитару</li>
						<li>Этот пункт мы ещё не придумали</li>
						<li>Битвы на мечах</li>
						<li>Ритуальное сожжение одного из гостей</li>
						<li>Поедание детей</li>
						<li>Знакомство с участковым, которого вызовут соседи</li>
					</ul>
				</td>
			</tr>
		</table>
		Кстати, каким образом все будут спать - пока не ясно, вероятно будет много спальников…
		<br/>
		<br/>
	</div>-->
	<div class="container">
		<h3>Подарки</h3>
		Если у вас нет идей для подарка, то вот вам несколько (кликабельно):
		<br/>
		<br/>
		<table style='width:100%' cellpadding="0" cellspacing="0" border="0">
		<tr>
		<th>Пётр (proton)</th>
		<th>Дарья (onila)</th>
		</tr>
		<tr>
		<td style='border:1px dotted #666'><ul class='ul' style='margin:0;padding-left:20px;'>
			<li><a href='http://market.yandex.ru/model.xml?modelid=10548861&hid=91013'>Apple MacBook Pro 15 with Retina display Late 2013 ME294</a></li>
			<li><a href='http://market.yandex.ru/model.xml?modelid=10395948&hid=91122&show-uid=101792813853598976'>Sony PlayStation 4<a></li>
			<li><a href='http://market.yandex.ru/model.xml?modelid=8441274&hid=91033'>SSD Plextor PX-256M5S</a></li>
			<li><s><a href='http://www.igrotime.ru/Dixit.html'>Dixit (+ дополнения Dixit 2, Dixit 3, Dixit 4)</a></s></li>
			<li><a href='http://www.igroved.ru/games/ankh-morpork/'>Плоский мир: Анк-Морпорк (настольная игра)</a></li>
			<li><a href='http://market.yandex.ru/model.xml?modelid=9197816&hid=90829&show-uid=070537513847797521'>Администрирование PostgreSQL 9. Книга рецептов</a></li>
		</ul></td>
		<td style='border:1px dotted #666'><ul class='ul' style='margin:0;padding-left:20px;'>
			<li><a href='http://www.ozon.ru/context/detail/id/19128687/'>Pattern Magic</a></li>
			<li><a href='http://www.ozon.ru/context/detail/id/19128688/'>Pattern Magic: Stretch Fabrics</a></li>
			<li><a href='http://www.ozon.ru/context/detail/id/4360566/'>Nineteenth Century Fashion in Detail</a></li>
			<li><a href='http://www.ozon.ru/context/detail/id/3873571/'>Государственный Русский музей. Альманах, №165, 2007. Искусство Жостова</a></li>
			<li><a href='http://www.ozon.ru/context/detail/id/5223750/'>Современные и классические орнаменты</a></li>
			<li><a href='http://www.ozon.ru/context/detail/id/5731084/'>Орнаменты и узоры всех времен, стран и народов</a></li>
		</ul></td>
		</tr>
		</table>
		А вообще пишите - подумаем вместе.
		<br/>
		Или приходите без подарка, что уж там :)
		<br/>
		Рекомендуется согласовывать подарки из списка во избежание одинаковых подарков
	</div>
	<div class="container" id="vk">
		<h3>Комментарии</h3>
		<div id="vk_comments"></div>
		<script type="text/javascript">
		VK.Widgets.Comments("vk_comments", {limit: 20, width: "745", attach: "*"});
		</script>
	</div>
</div>

</body>
</html>