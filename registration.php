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
		<h1>Регистрация</h1>
	</div>
</section>


<section class="registration-sec def-sec-bottom">
	<div class="registration container">
		<div class="row">
			<div class="grid-6 grid-12_s">
				<div class="registration__form">
					<form class="ajax-form">
						<label>
							<span>Имя*</span>
							<input type="text" class="input-text" name="reg-name" data-req="true" placeholder="Введите имя*">
						</label>
						<label>
							<span>Фамилия*</span>
							<input type="text" class="input-text" name="reg-subname" data-req="true" placeholder="Введите фамилию*">
						</label>
						<label>
							<span>Телефон*</span>
							<input type="tel" class="input-text" name="reg-phone" data-req="true" placeholder="Введите телефон*">
						</label>
						<label>
							<span>Пароль*</span>
							<input type="password" class="input-text" name="reg-pass" data-req="true" placeholder="Введите пароль*">
							<i class="i-eye"></i>
						</label>
						<label class="style-checkbox">
							<input type="checkbox" checked name="personal-info-agree" data-req="true">
							<span class="checkbox-personal">Настоящим подтверждаю, что я ознакомлен и согласен с условиями <a href="/politic.php" target="_blank">политики конфиденциальности</a>.</span>
						</label>
						<button class="btn">Зарегистрироваться<i class="i-right"></i></button>
					</form>
				</div>
			</div>
			<div class="grid-6 grid-12_s">
				<div class="registration__info">
					<div class="user-content">
						<h2>Зачем нужна регистрация?</h2>
						<p>Зарегистрировавшись на сайте Вы сможете получить личный кабинет, что позволит Вам отслеживать историю заказов, быстрее оформлять заказы в нашем Интернет магазине, так как вся информация о Вас будет доступна в нашем магазине и ее не нужно будет повторно вносить.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include('footer.php'); ?>
