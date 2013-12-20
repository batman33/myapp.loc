<h2>Профиль пользователя</h2>
<p>Здраствуйте, <b><?php echo $user->username?></b> <br /> <br />
<?php echo HTML::anchor('/user/clothing', 'Моя одежда'); ?>  <br /> <br />
<?php echo HTML::anchor('/auth/logout', 'Завершить сессию'); ?>
</p>
