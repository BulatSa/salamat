<?php include('header.php'); ?>

<section class="breadcrumbs-sec">
	<div class="breadcrumbs container">
		<a href="/">Главная</a>
		<a href="#">Личный кабинет</a>
	</div>
</section>


<section class="section-title">
	<div class="container">
		<h1>Вход в личный кабинет</h1>
	</div>
</section>


<section class="registration-sec def-sec-bottom">
	<div class="registration container">
		<div class="row">
			<div class="grid-6 grid-12_s">
				<div class="registration__form">
					<p class="registration__form-title h2">Вход в личный кабинет</p>
					<div class="registration__form-soc">
						<p>Для упрощения регистрации и входа Вы можете связать свой аккаунт в социальные сети с личным кабинетом</p>
						<div class="soc-icon-wrap">
							<a href="#" class="soc-icon soc-icon--vk"></a>
							<a href="#" class="soc-icon soc-icon--fb"></a>
							<a href="#" class="soc-icon soc-icon--ok"></a>
							<a href="#" class="soc-icon soc-icon--gplus"></a>
							<a href="#" class="soc-icon soc-icon--twi"></a>
						</div>
					</div>
					<form class="ajax-form">
						<label>
							<span>Логин / e–mail*</span>
							<input type="text" class="input-text" name="enter-name" data-req="true" placeholder="Введите логин / e–mail*">
						</label>
						<label>
							<span>Пароль*</span>
							<input type="password" class="input-text" name="enter-pass" data-req="true" placeholder="Введите пароль*">
							<i class="i-eye"></i>
						</label>
						<div class="registration__form-enter-btns">
							<button class="btn">Войти<i class="i-right"></i></button>
							<a href="#">Забыли пароль?</a>
						</div>
						
					</form>
				</div>
			</div>
			<div class="grid-6 grid-12_s">
				<div class="registration__info">
					<div class="user-content">
						<h2>Я — новый покупатель</h2>
						<p>Регистрация позволит получать бонусы и экономить время при следующих покупках, а так же у вас будет доступ к истории своих заказов.</p>
					</div>
					<a href="#" class="btn">Зарегистрироваться<i class="i-right"></i></a>
					<div class="user-content">
						<p>Это займет не более минуты.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include('footer.php'); ?>
