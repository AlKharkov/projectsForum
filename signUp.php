<?php include "hat.php" ?>

<section class="signUp">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form class="sign-block signUp-block" id="signUp-wrap" method="post" action="do_register.php" name="signup-form">
				<div class="row">
				    <h2>Регистрация</h2>
				    <hr>
				    <?php flash(); ?>
				    <label class="input-header" for="name"><b>Имя пользователя</b></label>
				    <input class="input-1" name="username" pattern="[a-zA-Z0-9]+" placeholder="Введите имя пользователя" required>
				    <label class="input-header" for="psw"><b>Пароль</b></label>
				    <input class="input-1" type="password" name="password" placeholder="Введите пароль" required>
				    <label class="input-header" for="psw"><b>Повторите пароль</b></label>
				    <input class="input-1" type="password" name="password-repeat" placeholder="Введите пароль еще раз" required>
			        <button class="btn button-1 button-2" type="submit" name="signup">Создать аккаунт</button>
				</div>
				<div class="row">
					<p>Уже есть аккаунт? <a class="sign-link" href="signUp.php">Войдите сейчас!</a></p>
				</div>
			</form>
			</div>
		</div>
	</div>
</section>
<section>
	<img src="img/grey-bg.png" alt="" style="width: 100%; margin-top: 90rem;">
</section>