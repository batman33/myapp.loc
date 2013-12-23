<h2>Профиль пользователя</h2>
<p>Здраствуйте, <b><?php echo $user->username?></b> <br /> <br />
<?php 
	if (Auth::instance()->logged_in("admin")){
		echo HTML::anchor('/admin/type', 'Типы') . '<br /><br />';
		echo HTML::anchor('/admin/type_cloth', 'Типы одежды') . '<br /><br />';
		echo HTML::anchor('/admin/manufacturer', 'Производители') . '<br /><br />';
		echo HTML::anchor('/admin/cloth', 'Ткани') . '<br /><br />';
	}
?>
<?php echo HTML::anchor('/user/clothing', 'Моя одежда'); ?>  <br /> <br />
<?php echo HTML::anchor('/auth/logout', 'Завершить сессию'); ?>
</p>
