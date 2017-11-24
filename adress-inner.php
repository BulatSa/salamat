<?php include('header.php'); ?>

<section class="breadcrumbs-sec">
	<div class="breadcrumbs container">
		<a href="/">Главная</a>
		<a href="#">Адреса салонов</a>
	</div>
</section>


<section class="section-title">
	<div class="container">
		<h1>г. Казань, ул.Академика Сахарова, д.31</h1>
	</div>
</section>


<section class="adress-info-sec def-sec-bottom">
	<div class="adress-info container">
		<div class="row">
			<div class="grid-6 grid-12_m">
				<div class="adress-info__item">
					<div class="adress-info__item-text">
						<div class="user-content">
							<b>ТЦ Пример:</b> <br>
							<p>129515, Россия, г. Москва, ул. Академика Королева, д. 13, строение 1, этаж 8, помещение IV-комната 6</p>
						</div>
					</div>
					<div class="adress-info__item-img">
						<img src="img/adress-inner.jpg" alt="">
					</div>
					<div class="adress-info__item-icons">
						<img src="img/icons/globus-search.svg" alt=""><span>Рядом ТЦ «MEGA», через дорогу от ТЦ «Домино»</span>
					</div>
				</div>
			</div>
			<div class="grid-6 grid-12_m">
				<div class="adress-info__item">
					<div class="adress-info__item-contact">
						<div class="user-content">
							<b>Режим работы:</b>
							<p>08:00 — 20:00<br>без перерывов и выходных</p>
						</div>
						<div>
							<b>Телефон:</b>
							<a href="tel:0000000000" class="adress-info__item-phone">8 (495) 000-00-00</a>
						</div>
					</div>
					<div class="adress-info__item-map">
						<script src="http://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
						<div id="ya-map" data-coordx="55.751574" data-coordy="37.573856"></div>
					</div>
					<div class="adress-info__item-transport-list">
						<div class="adress-info__item-transport">
							<img src="img/icons/transport-bus.svg" alt="">
							<span>Автобус: <br>1, 63А, 71, 89, 10</span>
						</div>
						<div class="adress-info__item-transport">
							<img src="img/icons/transport-troilbus.svg" alt="">
							<span>Троллейбус: <br>1, 63А, 71, 89, 10, 13</span>
						</div>
						<div class="adress-info__item-transport">
							<img src="img/icons/transport-tram.svg" alt="">
							<span>Трамвай <br>11, 63А, 71, 89</span>
						</div>
						<div class="adress-info__item-transport adress-info__item-transport--full">
							<img src="img/icons/transport-metro.svg" alt="">
							<span>Метро: <br>Станция Горки, Станция Проспект Победы</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="form-row-sec def-sec">
	<div class="form-row container">
		<div class="form-row__title">

			<p class="h1"><img src="img/icons/form-person.svg" alt="">Вопросы, пожелания?</p>
		</div>
		<div class="form-row__halfed">
			<form class="ajax-form">
				<div class="form-row__col-wrap">
					<div class="form-row__col">
						<input class="input-text" type="text" placeholder="Введите имя*" name="name" data-req="true">
						<input class="input-text" type="tel" placeholder="Введите телефон*" name="phone" data-req="true">
						<input class="input-text" type="email" placeholder="Введите e-mail" name="email">
					</div>

					<textarea class="input-textarea" name="review-text" placeholder="Ваш вопрос*" data-req="true"></textarea>
				</div>

				<label class="style-checkbox">
					<input type="checkbox" checked name="personal-info-agree" data-req="true">
					<span class="checkbox-personal">Настоящим подтверждаю, что я ознакомлен и согласен с условиями <a href="/politic.php" target="_blank">политики конфиденциальности</a>.</span>
				</label>
				<div class="btn-center">
					<button class="btn">Отправить<i class="i-right"></i></button>
				</div>
			</form>
		</div>
	</div>
</section>


<?php include('footer.php'); ?>
