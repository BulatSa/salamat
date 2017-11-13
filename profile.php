<?php include('header.php'); ?>

<section class="breadcrumbs-sec">
	<div class="breadcrumbs container">
		<a href="/">Главная</a>
		<a href="#">Личный кабинет</a>
		<a href="#">Регистрация</a>
	</div>
</section>


<section class="section-title">
	<div class="container">
		<h1>Личный кабинет</h1>
	</div>
</section>


<section class="cabinet-nav-sec">
	<div class="cabinet-nav container">
		<a href="#" class="cabinet-nav__link active">Профиль</a>
		<a href="#" class="cabinet-nav__link">Заказы</a>
		<a href="#" class="cabinet-nav__link">Выход</a>
	</div>
</section>


<section class="registration-sec def-sec-bottom">
	<div class="registration container">
		<div class="row">
			<div class="grid-6 grid-12_s">
				<div class="registration__form">
					<p class="registration__form-title h2">Мой профиль</p>
					<form class="ajax-form">
						<label>
							<span>Имя</span>
							<input type="text" class="input-text" name="pers-name" data-req="true" placeholder="Вания" value="Вания">
						</label>
						<label>
							<span>Фамилия</span>
							<input type="text" class="input-text" name="pers-subname" data-req="true" placeholder="Ванеева" value="Ванеева">
						</label>
						<label>
							<span>E-mail</span>
							<input type="email" class="input-text" name="pers-email" data-req="true" placeholder="info@salamat.ru" value="info@salamat.ru">
						</label>
						<label>
							<span>Телефон</span>
							<input type="tel" class="input-text" name="pers-phone" data-req="true" placeholder="Введите телефон*">
						</label>
						<label class="style-checkbox">
							<input type="checkbox" checked name="personal-info-agree" data-req="true">
							<span class="checkbox-personal">Настоящим подтверждаю, что я ознакомлен и согласен с условиями политики конфиденциальности.</span>
						</label>
						<label>
							<span>Город*</span>
							<input type="text" class="input-text" name="pers-city" data-req="true" placeholder="Введите ваш город" value="">
						</label>
						<label>
							<span>Адрес доставки*</span>
							<input type="text" class="input-text" name="pers-adress" data-req="true" placeholder="Адрес доставки*" value="">
						</label>
						<label class="style-checkbox">
							<input type="checkbox" checked name="personal-info-agree" data-req="true">
							<span class="checkbox-personal">Сделать адрес по умолчанию.</span>
						</label>

						<p class="registration__form-title h3">Изменить пароль</p>

						<label>
							<span>Новый пароль</span>
							<input type="password" class="input-text" name="pers-pass" data-req="true" placeholder="Введите новый пароль*">
							<i class="i-eye"></i>
						</label>
						<label>
							<span>Подтвердить пароль</span>
							<input type="password" class="input-text" name="pers-pass" data-req="true" placeholder="Подтвердите новый пароль*">
							<i class="i-eye"></i>
						</label>
						<button class="btn">Сохранить изменения<i class="i-right"></i></button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include('footer.php'); ?>
