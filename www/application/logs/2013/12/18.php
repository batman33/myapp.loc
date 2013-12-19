<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-18 13:46:36 --- CRITICAL: View_Exception [ 0 ]: The requested view default could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in S:\home\myapp.loc\www\system\classes\Kohana\View.php:137
2013-12-18 13:46:36 --- DEBUG: #0 S:\home\myapp.loc\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('default')
#1 S:\home\myapp.loc\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('default', NULL)
#2 S:\home\myapp.loc\www\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('default')
#3 S:\home\myapp.loc\www\application\classes\page.php(26): Kohana_Controller_Template->before()
#4 S:\home\myapp.loc\www\system\classes\Kohana\Controller.php(69): Page->before()
#5 [internal function]: Kohana_Controller->execute()
#6 S:\home\myapp.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Main))
#7 S:\home\myapp.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 S:\home\myapp.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 S:\home\myapp.loc\www\index.php(118): Kohana_Request->execute()
#10 {main} in S:\home\myapp.loc\www\system\classes\Kohana\View.php:137
2013-12-18 13:47:37 --- CRITICAL: Database_Exception [ 1146 ]: Table 'myapp.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in S:\home\myapp.loc\www\modules\database\classes\Kohana\Database\MySQL.php:359
2013-12-18 13:47:37 --- DEBUG: #0 S:\home\myapp.loc\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 S:\home\myapp.loc\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#2 S:\home\myapp.loc\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 S:\home\myapp.loc\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 S:\home\myapp.loc\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 S:\home\myapp.loc\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 S:\home\myapp.loc\www\application\classes\Controller\registration.php(12): Kohana_ORM::factory('user')
#7 S:\home\myapp.loc\www\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 S:\home\myapp.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#10 S:\home\myapp.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 S:\home\myapp.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 S:\home\myapp.loc\www\index.php(118): Kohana_Request->execute()
#13 {main} in S:\home\myapp.loc\www\modules\database\classes\Kohana\Database\MySQL.php:359
2013-12-18 13:52:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\auth.php [ 11 ] in file:line
2013-12-18 13:52:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-18 13:55:04 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\auth.php [ 11 ] in file:line
2013-12-18 13:55:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-18 13:56:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\auth.php [ 11 ] in file:line
2013-12-18 13:56:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-18 13:56:41 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'INDEX_PAGE' ~ APPPATH\classes\Controller\auth.php [ 11 ] in file:line
2013-12-18 13:56:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-18 13:57:10 --- CRITICAL: ErrorException [ 1 ]: Undefined class constant 'base_url' ~ APPPATH\classes\Controller\auth.php [ 11 ] in file:line
2013-12-18 13:57:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-18 14:08:19 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Auth::headers() ~ APPPATH\classes\Controller\auth.php [ 22 ] in file:line
2013-12-18 14:08:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-18 14:42:13 --- CRITICAL: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in S:\home\myapp.loc\www\modules\orm\classes\Kohana\ORM.php:603
2013-12-18 14:42:13 --- DEBUG: #0 S:\home\myapp.loc\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('role')
#1 S:\home\myapp.loc\www\themes\default\views\pages\about.php(8): Kohana_ORM->__get('role')
#2 S:\home\myapp.loc\www\system\classes\Kohana\View.php(61): include('S:\home\myapp.l...')
#3 S:\home\myapp.loc\www\system\classes\Kohana\View.php(348): Kohana_View::capture('themes/default/...', Array)
#4 S:\home\myapp.loc\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 S:\home\myapp.loc\www\themes\default\views\default.php(42): Kohana_View->__toString()
#6 S:\home\myapp.loc\www\system\classes\Kohana\View.php(61): include('S:\home\myapp.l...')
#7 S:\home\myapp.loc\www\system\classes\Kohana\View.php(348): Kohana_View::capture('themes/default/...', Array)
#8 S:\home\myapp.loc\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 S:\home\myapp.loc\www\application\classes\page.php(43): Kohana_Controller_Template->after()
#10 S:\home\myapp.loc\www\system\classes\Kohana\Controller.php(87): Page->after()
#11 [internal function]: Kohana_Controller->execute()
#12 S:\home\myapp.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_About))
#13 S:\home\myapp.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 S:\home\myapp.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 S:\home\myapp.loc\www\index.php(118): Kohana_Request->execute()
#16 {main} in S:\home\myapp.loc\www\modules\orm\classes\Kohana\ORM.php:603
2013-12-18 14:42:57 --- CRITICAL: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in S:\home\myapp.loc\www\modules\orm\classes\Kohana\ORM.php:603
2013-12-18 14:42:57 --- DEBUG: #0 S:\home\myapp.loc\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('role')
#1 S:\home\myapp.loc\www\themes\default\views\pages\about.php(10): Kohana_ORM->__get('role')
#2 S:\home\myapp.loc\www\system\classes\Kohana\View.php(61): include('S:\home\myapp.l...')
#3 S:\home\myapp.loc\www\system\classes\Kohana\View.php(348): Kohana_View::capture('themes/default/...', Array)
#4 S:\home\myapp.loc\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 S:\home\myapp.loc\www\themes\default\views\default.php(42): Kohana_View->__toString()
#6 S:\home\myapp.loc\www\system\classes\Kohana\View.php(61): include('S:\home\myapp.l...')
#7 S:\home\myapp.loc\www\system\classes\Kohana\View.php(348): Kohana_View::capture('themes/default/...', Array)
#8 S:\home\myapp.loc\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 S:\home\myapp.loc\www\application\classes\page.php(43): Kohana_Controller_Template->after()
#10 S:\home\myapp.loc\www\system\classes\Kohana\Controller.php(87): Page->after()
#11 [internal function]: Kohana_Controller->execute()
#12 S:\home\myapp.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_About))
#13 S:\home\myapp.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 S:\home\myapp.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 S:\home\myapp.loc\www\index.php(118): Kohana_Request->execute()
#16 {main} in S:\home\myapp.loc\www\modules\orm\classes\Kohana\ORM.php:603
2013-12-18 14:43:30 --- CRITICAL: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in S:\home\myapp.loc\www\modules\orm\classes\Kohana\ORM.php:603
2013-12-18 14:43:30 --- DEBUG: #0 S:\home\myapp.loc\www\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('role')
#1 S:\home\myapp.loc\www\themes\default\views\pages\about.php(8): Kohana_ORM->__get('role')
#2 S:\home\myapp.loc\www\system\classes\Kohana\View.php(61): include('S:\home\myapp.l...')
#3 S:\home\myapp.loc\www\system\classes\Kohana\View.php(348): Kohana_View::capture('themes/default/...', Array)
#4 S:\home\myapp.loc\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 S:\home\myapp.loc\www\themes\default\views\default.php(42): Kohana_View->__toString()
#6 S:\home\myapp.loc\www\system\classes\Kohana\View.php(61): include('S:\home\myapp.l...')
#7 S:\home\myapp.loc\www\system\classes\Kohana\View.php(348): Kohana_View::capture('themes/default/...', Array)
#8 S:\home\myapp.loc\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 S:\home\myapp.loc\www\application\classes\page.php(43): Kohana_Controller_Template->after()
#10 S:\home\myapp.loc\www\system\classes\Kohana\Controller.php(87): Page->after()
#11 [internal function]: Kohana_Controller->execute()
#12 S:\home\myapp.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_About))
#13 S:\home\myapp.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 S:\home\myapp.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 S:\home\myapp.loc\www\index.php(118): Kohana_Request->execute()
#16 {main} in S:\home\myapp.loc\www\modules\orm\classes\Kohana\ORM.php:603
2013-12-18 14:43:48 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in S:\home\myapp.loc\www\themes\default\views\pages\about.php:8
2013-12-18 14:43:48 --- DEBUG: #0 S:\home\myapp.loc\www\themes\default\views\pages\about.php(8): Kohana_ORM->find_all()
#1 S:\home\myapp.loc\www\system\classes\Kohana\View.php(61): include('S:\home\myapp.l...')
#2 S:\home\myapp.loc\www\system\classes\Kohana\View.php(348): Kohana_View::capture('themes/default/...', Array)
#3 S:\home\myapp.loc\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 S:\home\myapp.loc\www\themes\default\views\default.php(42): Kohana_View->__toString()
#5 S:\home\myapp.loc\www\system\classes\Kohana\View.php(61): include('S:\home\myapp.l...')
#6 S:\home\myapp.loc\www\system\classes\Kohana\View.php(348): Kohana_View::capture('themes/default/...', Array)
#7 S:\home\myapp.loc\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 S:\home\myapp.loc\www\application\classes\page.php(43): Kohana_Controller_Template->after()
#9 S:\home\myapp.loc\www\system\classes\Kohana\Controller.php(87): Page->after()
#10 [internal function]: Kohana_Controller->execute()
#11 S:\home\myapp.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_About))
#12 S:\home\myapp.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 S:\home\myapp.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 S:\home\myapp.loc\www\index.php(118): Kohana_Request->execute()
#15 {main} in S:\home\myapp.loc\www\themes\default\views\pages\about.php:8