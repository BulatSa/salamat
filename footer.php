<footer class="footer-sec">
	<div class="footer-payment-wrap">
		<div class="container">
			<div class="row row--center">
				<div class="grid-2 grid-12_s">
					<p>Принимаем к оплате</p>
				</div>
				<div class="grid-10 grid-12_s">
					<div class="footer-payment-imgs">
						<img src="img/footer/visa.png" alt="">
						<img src="img/footer/mastercard.png" alt="">
						<img src="img/footer/mir.png" alt="">
						<img src="img/footer/ya-money.png" alt="">
						<img src="img/footer/qiwi.png" alt="">
						<img src="img/footer/paypal.png" alt="">
						<img src="img/footer/wmoney.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="footer row">
			<div class="grid-2 grid-3_m grid-6_s grid-12_xs">
				<p class="footer__title">О компании</p>
				<ul class="footer__list">
					<li><a href="#">Доставка</a></li>
					<li><a href="#">Оплата</a></li>
					<li><a href="#">Обмен и возврат</a></li>
					<li><a href="#">Гарантия качества</a></li>
					<li><a href="#">Поставщикам</a></li>
					<li><a href="#">Контакты</a></li>
				</ul>
			</div>
			<div class="grid-3 grid-5_m grid-6_s grid-12_xs">
				<p class="footer__title">Каталог</p>
				<ul class="footer__list">
					<li><a href="#">Ортопедическая обувь и стельки</a></li>
					<li><a href="#">Компрессионный трикотаж</a></li>
					<li><a href="#">Бандажи, ортезы, фиксаторы</a></li>
					<li><a href="#">Корсеты и корректоры осанки</a></li>
					<li><a href="#">Ортопедические подушки и матрасы</a></li>
					<li><a href="#">Массажеры, коврики, мячи</a></li>
					<li><a href="#">Приборы для домашней физиотерапии</a></li>
					<li><a href="#">Специальные предложения</a></li>
				</ul>
			</div>
			<div class="grid-2 grid-4_m grid-6_s grid-12_xs">
				<p class="footer__title">Полезное</p>
				<ul class="footer__list">
					<li><a href="#">Отзывы</a></li>
					<li><a href="#">Новости</a></li>
					<li><a href="#">Акции</a></li>
					<li><a href="#">Компенсация ФСС</a></li>
					<li><a href="#">Частые вопросы</a></li>
					<li><a href="#">Подарочные сертификаты</a></li>
					<li><a href="#">Диагностика стопы</a></li>
				</ul>
			</div>
			<div class="grid-2 grid-6_m grid-12_xs no-shrink">
				<p class="footer__title">Адреса салонов</p>
				<p class="footer__descr">Бесплатный звонок по РФ</p>
				<a href="tel:88000000000" class="footer__phone">8 800 000-00-00</a>
				<p class="footer__descr">Cправочная по Казани</p>
				<a href="tel:88000000000" class="footer__phone">+7 (843) 123-00-00</a>
				<a href="mailto:info@salamat-med.ru" class="footer__mail">info@salamat-med.ru</a>
				<p class="footer__descr">ИНН 77000000000 <br>КПП 77000000000 <br>ОГРН 77000000000</p>
			</div>
			<div class="grid-3 grid-6_m grid-12_xs">
				<p class="footer__title">Следите за нами</p>
				<div class="footer__soc">
					<a href="#" target="_blank"><i class="i-vk"></i></a>
					<a href="#" target="_blank"><i class="i-fb"></i></a>
					<a href="#" target="_blank"><i class="i-insta"></i></a>
					<a href="#" target="_blank"><i class="i-youtube"></i></a>
					<a href="#" target="_blank"><i class="i-ok"></i></a>
				</div>
				<div class="footer__subscribe">
					<p class="footer__descr">Узнавайте о наших акциях первыми</p>
					<form class="subscribe-form">
						<input type="text" class="input-text" name="subscr-mail" placeholder="Введите e-mail">
						<button class="btn" title="Подписаться"><i class="i-right"></i></button>
					</form>
				</div>
			</div>
		</div>
		<div class="footer-bottom row">
			<div class="grid-5 grid-12_xs left">
				<p>© 2017, ООО «САЛАМАТ РИТЕЙЛ»</p>
			</div>
			<div class="grid-4 grid-6_xs left">
				<a href="#" target="_blank">Публичный договор оферта</a>
			</div>
			<div class="grid-3 grid-6_xs right">
				<a href="https://penbrain.ru/" target="_blank">Сайт разработан Pen&Brain</a>
			</div>
		</div>
	</div>
</footer>


<a href="#site-head" class="to-top-btn scrollto">
	<span>Наверх</span>
</a>

<!-- Модальные окна -->
<div class="modals-sec">

	<div id="modal-callback" class="modal modal--form">
		<h4>Заказать обратный звонок</h4>
		<p class="modal-descr">Оставьте заявку и наш администратор свяжется с&nbsp;Вами в течение 10 минут</p>
		<form class="ajax-form">
			<input type="text" class="input-text" name="user_name" placeholder="Введите имя" data-label="Имя пользователя">
			<input type="tel" class="input-text" name="user_tel" data-label="Телефон" placeholder="Введите телефон*" data-req="true">
			<input type="hidden" value="Новая заявка" name="form_subject">
			<label class="style-checkbox">
				<input type="checkbox" checked name="personal-info-agree" data-req="true">
				<span class="checkbox-personal">Настоящим подтверждаю, что я ознакомлен и согласен с условиями <a href="/politic.php" target="_blank">политики конфиденциальности</a>.</span>
			</label>
			<div class="btn-center">
				<button type="submit" class="btn">Отправить</button>
			</div>
		</form>
	</div>

	<div id="modal-specialist" class="modal modal--form">
		<h4>Заказать консультацию специалиста</h4>
		<p class="modal-descr">Оставьте заявку и наш администратор свяжется с&nbsp;Вами в течение 10 минут</p>
		<form class="ajax-form">
			<input type="text" class="input-text" name="user_name" placeholder="Введите имя" data-label="Имя пользователя">
			<input type="tel" class="input-text" name="user_tel" data-label="Телефон" placeholder="Введите телефон*" data-req="true">
			<input type="hidden" value="Новая заявка" name="form_subject">
			<label class="style-checkbox">
				<input type="checkbox" checked name="personal-info-agree" data-req="true">
				<span class="checkbox-personal">Настоящим подтверждаю, что я ознакомлен и согласен с условиями <a href="/politic.php" target="_blank">политики конфиденциальности</a>.</span>
			</label>
			<div class="btn-center">
				<button type="submit" class="btn">Отправить</button>
			</div>
		</form>
	</div>

	<div id="modal-one-click" class="modal modal--form">
		<h4>Покупка в 1 клик</h4>
		<p class="modal-descr">Оставьте заявку и наш администратор свяжется с&nbsp;Вами в течение 10 минут</p>
		<form class="ajax-form">
			<input type="text" class="input-text" name="user_name" placeholder="Введите имя" data-label="Имя пользователя">
			<input type="tel" class="input-text" name="user_tel" data-label="Телефон" placeholder="Введите телефон*" data-req="true">
			<input type="hidden" value="Новая заявка" name="form_subject">
			<label class="style-checkbox">
				<input type="checkbox" checked name="personal-info-agree" data-req="true">
				<span class="checkbox-personal">Настоящим подтверждаю, что я ознакомлен и согласен с условиями <a href="/politic.php" target="_blank">политики конфиденциальности</a>.</span>
			</label>
			<div class="btn-center">
				<button type="submit" class="btn">Отправить</button>
			</div>
		</form>
	</div>

	<div id="city-list" class="modal modal--city-list">
		<h4>Выберите ваш город</h4>
		<ul>
			<li><a href="#">Казань</a></li>
			<li><a href="#">Альметьевск</a></li>
			<li><a href="#">Набережные Челны</a></li>
			<li><a href="#">Москва</a></li>
			<li><a href="#">Новосибирск</a></li>
			<li><a href="#">Алматы</a></li>
		</ul>
	</div>

	<div id="modal-thanks" class="modal">
		<h4>Спасибо за заявку!</h4>
	</div>

</div>
<!-- Модальные окна -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="js/assets.js" type="text/javascript" ></script>
<script src="js/main.js" type="text/javascript" ></script>

	</body>
</html>
