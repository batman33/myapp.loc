<h2>Авторизация</h2>
<?php echo Form::open('auth')?>
<?php echo Form::label('username', 'Логин (max 32)') ?><br />
<?php echo Form::input('username', HTML::chars(Arr::get($_POST, 'username')))?> <br />
<?php echo Form::label('password', 'Пароль (max 64)')?> <br />
<?php echo Form::password('password')?> <br />
<?php echo Form::label('save', 'Запомнить меня') ?>
<?php echo Form::checkbox('save',1,TRUE)?> <br />
<?php echo Form::submit('register','Войти')?> <br /> <br />
&raquo; <?php echo HTML::anchor('/registration', 'Регистрация')?>
<?php echo Form::close()?>
