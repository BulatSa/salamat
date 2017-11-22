<?php include('header.php'); ?>

<section class="breadcrumbs-sec">
	<div class="breadcrumbs container">
		<a href="/">Главная</a>
		<a href="#">Восстановление пароля</a>
	</div>
</section>


<section class="section-title">
	<div class="container">
		<h1>Восстановление пароля</h1>
	</div>
</section>


<section class="registration-sec def-sec-bottom">
	<div class="registration container">
		<div class="row">
			<div class="grid-6 grid-12_s">
				<div class="registration__form">
					<p class="registration__form-descr">Для восстановления доступа воспользуйтесь формой.</p>
					<form class="ajax-form">
						<label>
							<span>E–mail*</span>
							<input type="text" class="input-text" name="enter-name" data-req="true" placeholder="Введите e–mail*">
						</label>
						<div class="registration__form-enter-btns">
							<button class="btn">Восстановить<i class="i-right"></i></button>
						</div>
						
					</form>
				</div>
			</div>
			<div class="grid-6 grid-12_s">
				<div class="registration__info">
					<div class="user-content">
						<p>На указанную почту придет письмо с инструкцией для восстановления доступа.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>


<?php include('footer.php'); ?>
