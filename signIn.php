<?php include "hat.php" ?>

<section class="signIn">
	<div class="container">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form class="sign-block signIn-block" id="signIn-wrap" method="post" action="do_login.php">
				<div class="row">
				    <h2>Авторизация</h2>
				    <hr>
				    <?php flash(); ?>
				    <label class="input-header" for="name"><b>Имя пользователя</b></label>
				    <input class="input-1" id="username" name="username" type="text" pattern="[a-zA-Z0-9]+" placeholder="Введите имя пользователя" required>
				    <label class="input-header" for="psw"><b>Пароль</b></label>
				    <input class="input-1" id="password" name="password" type="password" placeholder="Введите пароль" required>
			        <button class="btn button-1 button-2" type="submit" name="signin">Войти</button>
				</div>
				<div class="row">
					<p>Нет аккаунта? <a class="sign-link" href="signUp.php">Создай его сейчас!</a></p>
				</div>
			</form>
			</div>
		</div>
	</div>
</section>
<section>
	<img src="img/grey-bg.png" alt="" style="width: 100%; margin-top: 90rem;">
</section>
