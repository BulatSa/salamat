<?php include('header.php'); ?>

<section class="breadcrumbs-sec">
	<div class="breadcrumbs container">
		<a href="/">Главная</a>
		<a href="#">Обмен и возврат</a>
	</div>
</section>


<section class="big-slider-sec">
	<div class="big-slider">
		<div class="big-slide slick-active" style="background-image: url('../img/bg-refund-banner.jpg')">
			<div class="container">
				<div class="row">
					<div class="grid-6 grid-7_l grid-12_s">
						<div class="big-slide__info">
							<p class="big-slide__title">Обмен и возврат
								товара</p>
							<p class="big-slide__descr h2">Претензии по внутренним (скрытым упаковкой) дефектам, заводскому браку принимаются в течение 7 дней после получения товара.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="about-info-sec def-sec">
	<div class="container about-info">
		<div class="row">
			<div class="grid-6 grid-12_s">
				<div class="about-info__block">
					<p class="about-info__block-title h2"><img src="img/icons/sale-cancel.svg" alt=""><span>Отказ от покупки</span></p>
					<div class="user-content">
						<p>Покупатель вправе отказаться от заказа в любое время до его приема. После приема заказа, в случае дефектов или заводского брака — в течение 7 дней (согласно п.4 ст.26.1 о «Дистанционном способе продажи товара», Закон «О защите прав потребителей»).</p>
						<p>В случае Вашего отказа от покупки в момент фактического получения заказа, Вам необходимо будет оплатить согласно п.3. ст.497 ГК РФ стоимость доставки:</p>
						<blockquote>
							300 рублей в пределах МКАД, а за пределами МКАД (0–20км) <br>
							400 рублей  + сумма доставки за МКАД (более 20км: +30 руб за км).
						</blockquote>
						<p>Доставка оплачивается только в том случае, если товар обладает надлежащим качеством и комплектностью.</p>
					</div>
				</div>
			</div>
			<div class="grid-6 grid-12_s">
				<div class="about-info__block">
					<p class="about-info__block-title h2"><img src="img/icons/sale-refund.svg" alt=""><span>Возврат и обмен товара</span></p>
					<div class="user-content">
						<p>Обращаем Ваше внимание, что товары нашего Интернет–магазина относятся к Перечню непродовольственных товаров надлежащего качества, не подлежащих возврату и обмену согласно Постановлению Правительства РФ от 19.01.1998 г. № 55.</p>
						<p>Покупатель имеет право отказаться от получения заказа в момент доставки, если доставленный товар ненадлежащего качества (имеет фабричный брак) (согласно ст. 21 Закона «О защите прав потребителей») или вернуть, обменять товар в течение 7 дней, не считая дня покупки, при наличии документов, удостоверяющих факт и условия покупки товара.</p>
						<p>Если комплектация доставленного заказа не соответствует накладной, либо комплектация товара не соответствует указанной на этикетках, в этом случае Покупатель имеет право также вернуть или обменять товар.</p>
					</div>
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
					<button class="btn">Отправить вопрос<i class="i-right"></i></button>
				</div>
			</form>
		</div>
	</div>
</section>


<?php include('footer.php'); ?>
