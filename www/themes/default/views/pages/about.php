<h2>О Pegas CMS</h2>
<p>Pegas CMS</p>

<pre>
<?php
//print_r($user);

$roles = $user->roles->find_all();

    echo 'Дата последнего входа: '. date('d M Y H:i', $user->last_login) . '<br />' .
    	 'Почта: '. $user->email . '<br />' .
    	 'Логин: '. $user->username . '<br /><br />';
 
foreach($roles as $role)
{
    echo 'Имя роли: '. $role->name . ' - ' .
    	 'Описание роли: '. $role->description .'<br />';
}

?>
</pre>