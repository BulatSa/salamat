<?php include('header.php'); ?>

<section class="breadcrumbs-sec">
	<div class="breadcrumbs container">
		<a href="/">Главная</a>
		<a href="#">Подарочные сертификаты</a>
	</div>
</section>

<section class="section-title">
	<div class="container">
		<h1>Подарочные сертификаты</h1>
	</div>
</section>


<section class="detail-sec def-sec-bottom">
	<div class="container">
		<div class="detail">
			<div class="user-content user-content--mini">
				<img src="img/certificate-big.jpg" alt="">
				<h4>Номиналы подарочных сертификатов: 500, 1 000, 2 000, 3 000, 5 000 руб.</h4>
				<ul>
					<li>Сертификатом можно оплатить любые товары в сети ортопедических салонов «Саламат», кроме интернет–магазина.</li>
					<li>Сертификат дает право на единовременную оплату товаров на сумму, указанную на лицевой стороне сертификата.</li>
					<li>Если сумма чека выше номинала сертификата, недостающая сумма подлежит доплате наличными или с помощью банковской карты.</li>
					<li>Если сумма чека ниже номинала сертификата, остаток не выплачивается.</li>
					<li>Не допускается возврат или обмен сертификата на соответствующий денежный эквивалент, не восстанавливается после утери.</li>
					<li>Срок действия сертификата неограничен.</li>
				</ul>
			</div>
			<div class="detail__more">
				<a href="#" class="btn">Заказать сертификат<i class="i-right"></i></a>
				<div class="detail__social">
					<p>Поделитесь новостью с друзьями</p>
					<script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
					<script src="//yastatic.net/share2/share.js"></script>
					<div class="ya-share2" data-services="vkontakte,facebook,odnoklassniki,gplus,twitter"></div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="form-row-sec def-sec">
	<div class="form-row container">
		<div class="form-row__title">

			<p class="h1"><img src="img/icons/form-person.svg" alt="">Остались вопросы? — Задайте их нам</p>
		</div>
		<div class="form-row__halfed">
			<form class="ajax-form">
				<div class="form-row__col-wrap">
					<div class="form-row__col">
						<input class="input-text" type="text" placeholder="Введите имя*" name="mail" data-req="true">
						<input class="input-text" type="tel" placeholder="Введите телефон*" name="mail" data-req="true">
						<input class="input-text" type="email" placeholder="Введите e-mail" name="mail">
					</div>

					<textarea class="input-textarea" name="review-text" placeholder="Ваш вопрос*" data-req="true"></textarea>
				</div>

				<label class="style-checkbox">
					<input type="checkbox" checked name="personal-info-agree" data-req="true">
					<span class="checkbox-personal">Настоящим подтверждаю, что я ознакомлен и согласен с условиями <a href="/politic.php" target="_blank">политики конфиденциальности</a>.</span>
				</label>
				<div class="btn-center">
					<button class="btn">Отправить вопрос<i class="i-right"></i></button>
				</div>
			</form>
		</div>
	</div>
</section>


<?php include('footer.php'); ?>
