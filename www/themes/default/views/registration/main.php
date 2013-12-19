<h2>Регистрация</h2>
<?php echo Form::open('registration')?>
<?php echo Form::label('username', 'Логин (max 32)') ?><br />
<?php echo Form::input('username', HTML::chars(Arr::get($_POST, 'username')))?> <br />
<?php echo Form::label('email', 'E-mail') ?><br />
<?php echo Form::input('email', HTML::chars(Arr::get($_POST, 'email')))?> <br />
<?php echo Form::label('password', 'Пароль (max 64)')?> <br />
<?php echo Form::password('password')?> <br />
<?php echo Form::label('confirm_password', 'Повторите пароль')?> <br />
<?php echo Form::password('confirm_password')?> <br />
<?php echo Form::submit('register','Зарегистрироваться')?> <br /> <br />
&raquo; <?php echo HTML::anchor('/auth', 'Авторизация')?>
<?php echo Form::close()?>
