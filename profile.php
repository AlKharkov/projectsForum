<?php include "hat.php" ?>

<h3>Личная страница/профиль</h3>

<?php if ($user) { ?>
	<h1>Welcome back, <?=htmlspecialchars($user['username'])?>!</h1>
	<form class="mt-5" method="post" action="do_logout.php">
		<button type="submit" class="btn btn-primary">Logout</button>
	</form>
<?php } else { ?>
	<h2>Для просмотра профиля Вам необходимо сначала ЗАРЕГИСТРИРОВАТЬСЯ!</h2>
<?php } ?>