<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-23 09:39:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: types ~ APPPATH\classes\Controller\api.php [ 21 ] in S:\home\myapp.loc\www\application\classes\Controller\api.php:21
2013-12-23 09:39:29 --- DEBUG: #0 S:\home\myapp.loc\www\application\classes\Controller\api.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'S:\home\myapp.l...', 21, Array)
#1 S:\home\myapp.loc\www\system\classes\Kohana\Controller.php(84): Controller_Api->action_type_get()
#2 [internal function]: Kohana_Controller->execute()
#3 S:\home\myapp.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 S:\home\myapp.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 S:\home\myapp.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 S:\home\myapp.loc\www\index.php(118): Kohana_Request->execute()
#7 {main} in S:\home\myapp.loc\www\application\classes\Controller\api.php:21
2013-12-23 09:39:59 --- CRITICAL: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\api.php [ 23 ] in file:line
2013-12-23 09:39:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'S:\home\myapp.l...', 23, Array)
#1 S:\home\myapp.loc\www\application\classes\Controller\api.php(23): json_decode(Array)
#2 S:\home\myapp.loc\www\system\classes\Kohana\Controller.php(84): Controller_Api->action_type_get()
#3 [internal function]: Kohana_Controller->execute()
#4 S:\home\myapp.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#5 S:\home\myapp.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 S:\home\myapp.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 S:\home\myapp.loc\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-12-23 09:40:21 --- CRITICAL: ErrorException [ 2 ]: json_decode() expects parameter 1 to be string, array given ~ APPPATH\classes\Controller\api.php [ 23 ] in file:line
2013-12-23 09:40:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'json_decode() e...', 'S:\home\myapp.l...', 23, Array)
#1 S:\home\myapp.loc\www\application\classes\Controller\api.php(23): json_decode(Array)
#2 S:\home\myapp.loc\www\system\classes\Kohana\Controller.php(84): Controller_Api->action_type_get()
#3 [internal function]: Kohana_Controller->execute()
#4 S:\home\myapp.loc\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#5 S:\home\myapp.loc\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 S:\home\myapp.loc\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 S:\home\myapp.loc\www\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-12-23 09:46:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{', expecting '(' ~ APPPATH\classes\Controller\api.php [ 18 ] in file:line
2013-12-23 09:46:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-23 09:46:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ']', expecting ')' ~ APPPATH\classes\Controller\api.php [ 21 ] in file:line
2013-12-23 09:46:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-23 10:29:35 --- CRITICAL: Database_Exception [ 1146 ]: Table 'myapp.type' doesn't exist [ SHOW FULL COLUMNS FROM `type` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\server\my\myapp\trunk\www\modules\database\classes\Kohana\Database\MySQL.php:359
2013-12-23 10:29:35 --- DEBUG: #0 C:\server\my\myapp\trunk\www\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\server\my\myapp\trunk\www\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('type')
#2 C:\server\my\myapp\trunk\www\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\server\my\myapp\trunk\www\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\server\my\myapp\trunk\www\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\server\my\myapp\trunk\www\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\server\my\myapp\trunk\www\application\classes\Controller\api.php(12): Kohana_ORM::factory('type')
#7 C:\server\my\myapp\trunk\www\system\classes\Kohana\Controller.php(84): Controller_Api->action_type_get()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#10 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\server\my\myapp\trunk\www\index.php(118): Kohana_Request->execute()
#13 {main} in C:\server\my\myapp\trunk\www\modules\database\classes\Kohana\Database\MySQL.php:359
2013-12-23 10:43:52 --- CRITICAL: Database_Exception [ 1146 ]: Table 'myapp.roles_users' doesn't exist [ SELECT COUNT(*) AS `records_found` FROM `roles_users` WHERE `user_id` = '1' AND `role_id` IN ('2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\server\my\myapp\trunk\www\modules\database\classes\Kohana\Database\Query.php:251
2013-12-23 10:43:52 --- DEBUG: #0 C:\server\my\myapp\trunk\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT COUNT(*)...', false, Array)
#1 C:\server\my\myapp\trunk\www\modules\orm\classes\Kohana\ORM.php(1543): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\server\my\myapp\trunk\www\modules\orm\classes\Kohana\ORM.php(1468): Kohana_ORM->count_relations('roles', Object(Model_Role))
#3 C:\server\my\myapp\trunk\www\modules\orm\classes\Kohana\Auth\ORM.php(60): Kohana_ORM->has('roles', Object(Model_Role))
#4 C:\server\my\myapp\trunk\www\application\views\auth\user.php(4): Kohana_Auth_ORM->logged_in('admin')
#5 C:\server\my\myapp\trunk\www\system\classes\Kohana\View.php(61): include('C:\server\my\my...')
#6 C:\server\my\myapp\trunk\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\server\my\my...', Array)
#7 C:\server\my\myapp\trunk\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#8 C:\server\my\myapp\trunk\www\application\views\main\sidebar.php(6): Kohana_View->__toString()
#9 C:\server\my\myapp\trunk\www\system\classes\Kohana\View.php(61): include('C:\server\my\my...')
#10 C:\server\my\myapp\trunk\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\server\my\my...', Array)
#11 C:\server\my\myapp\trunk\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#12 C:\server\my\myapp\trunk\www\application\views\default.php(41): Kohana_View->__toString()
#13 C:\server\my\myapp\trunk\www\system\classes\Kohana\View.php(61): include('C:\server\my\my...')
#14 C:\server\my\myapp\trunk\www\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\server\my\my...', Array)
#15 C:\server\my\myapp\trunk\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#16 C:\server\my\myapp\trunk\www\application\classes\page.php(43): Kohana_Controller_Template->after()
#17 C:\server\my\myapp\trunk\www\system\classes\Kohana\Controller.php(87): Page->after()
#18 [internal function]: Kohana_Controller->execute()
#19 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#20 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#21 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#22 C:\server\my\myapp\trunk\www\index.php(118): Kohana_Request->execute()
#23 {main} in C:\server\my\myapp\trunk\www\modules\database\classes\Kohana\Database\Query.php:251
2013-12-23 11:40:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\api.php [ 33 ] in file:line
2013-12-23 11:40:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-23 11:49:53 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\server\my\myapp\trunk\www\modules\orm\classes\Kohana\ORM.php:1302
2013-12-23 11:49:53 --- DEBUG: #0 C:\server\my\myapp\trunk\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\server\my\myapp\trunk\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\server\my\myapp\trunk\www\application\classes\Controller\api.php(38): Kohana_ORM->save()
#3 C:\server\my\myapp\trunk\www\system\classes\Kohana\Controller.php(84): Controller_Api->action_type_create()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#6 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\server\my\myapp\trunk\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\server\my\myapp\trunk\www\modules\orm\classes\Kohana\ORM.php:1302
2013-12-23 11:54:03 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\server\my\myapp\trunk\www\modules\orm\classes\Kohana\ORM.php:1302
2013-12-23 11:54:03 --- DEBUG: #0 C:\server\my\myapp\trunk\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\server\my\myapp\trunk\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\server\my\myapp\trunk\www\application\classes\Controller\api.php(38): Kohana_ORM->save()
#3 C:\server\my\myapp\trunk\www\system\classes\Kohana\Controller.php(84): Controller_Api->action_type_create()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#6 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\server\my\myapp\trunk\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\server\my\myapp\trunk\www\modules\orm\classes\Kohana\ORM.php:1302
2013-12-23 12:04:26 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete type model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\server\my\myapp\trunk\www\application\classes\Controller\api.php:63
2013-12-23 12:04:26 --- DEBUG: #0 C:\server\my\myapp\trunk\www\application\classes\Controller\api.php(63): Kohana_ORM->delete()
#1 C:\server\my\myapp\trunk\www\system\classes\Kohana\Controller.php(84): Controller_Api->action_type_destroy()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\server\my\myapp\trunk\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\server\my\myapp\trunk\www\application\classes\Controller\api.php:63
2013-12-23 13:22:14 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete type model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\server\my\myapp\trunk\www\application\classes\Controller\api.php:61
2013-12-23 13:22:14 --- DEBUG: #0 C:\server\my\myapp\trunk\www\application\classes\Controller\api.php(61): Kohana_ORM->delete()
#1 C:\server\my\myapp\trunk\www\system\classes\Kohana\Controller.php(84): Controller_Api->action_type_destroy()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\server\my\myapp\trunk\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\server\my\myapp\trunk\www\application\classes\Controller\api.php:61
2013-12-23 13:24:58 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\api.php [ 60 ] in C:\server\my\myapp\trunk\www\application\classes\Controller\api.php:60
2013-12-23 13:24:58 --- DEBUG: #0 C:\server\my\myapp\trunk\www\application\classes\Controller\api.php(60): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\server\my\my...', 60, Array)
#1 C:\server\my\myapp\trunk\www\system\classes\Kohana\Controller.php(84): Controller_Api->action_type_destroy()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\server\my\myapp\trunk\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\server\my\myapp\trunk\www\application\classes\Controller\api.php:60
2013-12-23 13:25:04 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\api.php [ 60 ] in C:\server\my\myapp\trunk\www\application\classes\Controller\api.php:60
2013-12-23 13:25:04 --- DEBUG: #0 C:\server\my\myapp\trunk\www\application\classes\Controller\api.php(60): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\server\my\my...', 60, Array)
#1 C:\server\my\myapp\trunk\www\system\classes\Kohana\Controller.php(84): Controller_Api->action_type_destroy()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\server\my\myapp\trunk\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\server\my\myapp\trunk\www\application\classes\Controller\api.php:60
2013-12-23 14:28:03 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\server\my\myapp\trunk\www\modules\orm\classes\Kohana\ORM.php:1302
2013-12-23 14:28:03 --- DEBUG: #0 C:\server\my\myapp\trunk\www\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\server\my\myapp\trunk\www\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\server\my\myapp\trunk\www\application\classes\Controller\api.php(36): Kohana_ORM->save()
#3 C:\server\my\myapp\trunk\www\system\classes\Kohana\Controller.php(84): Controller_Api->action_type_create()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#6 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\server\my\myapp\trunk\www\index.php(118): Kohana_Request->execute()
#9 {main} in C:\server\my\myapp\trunk\www\modules\orm\classes\Kohana\ORM.php:1302
2013-12-23 14:28:37 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\api.php [ 30 ] in C:\server\my\myapp\trunk\www\application\classes\Controller\api.php:30
2013-12-23 14:28:37 --- DEBUG: #0 C:\server\my\myapp\trunk\www\application\classes\Controller\api.php(30): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\server\my\my...', 30, Array)
#1 C:\server\my\myapp\trunk\www\system\classes\Kohana\Controller.php(84): Controller_Api->action_type_create()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\server\my\myapp\trunk\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\server\my\myapp\trunk\www\application\classes\Controller\api.php:30
2013-12-23 14:29:04 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\api.php [ 30 ] in C:\server\my\myapp\trunk\www\application\classes\Controller\api.php:30
2013-12-23 14:29:04 --- DEBUG: #0 C:\server\my\myapp\trunk\www\application\classes\Controller\api.php(30): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\server\my\my...', 30, Array)
#1 C:\server\my\myapp\trunk\www\system\classes\Kohana\Controller.php(84): Controller_Api->action_type_create()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\server\my\myapp\trunk\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\server\my\myapp\trunk\www\application\classes\Controller\api.php:30
2013-12-23 14:29:37 --- CRITICAL: ErrorException [ 2 ]: Illegal offset type ~ APPPATH\classes\Controller\api.php [ 38 ] in C:\server\my\myapp\trunk\www\application\classes\Controller\api.php:38
2013-12-23 14:29:37 --- DEBUG: #0 C:\server\my\myapp\trunk\www\application\classes\Controller\api.php(38): Kohana_Core::error_handler(2, 'Illegal offset ...', 'C:\server\my\my...', 38, Array)
#1 C:\server\my\myapp\trunk\www\system\classes\Kohana\Controller.php(84): Controller_Api->action_type_create()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\server\my\myapp\trunk\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\server\my\myapp\trunk\www\application\classes\Controller\api.php:38
2013-12-23 14:30:29 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\api.php [ 38 ] in C:\server\my\myapp\trunk\www\application\classes\Controller\api.php:38
2013-12-23 14:30:29 --- DEBUG: #0 C:\server\my\myapp\trunk\www\application\classes\Controller\api.php(38): Kohana_Core::error_handler(8, 'Array to string...', 'C:\server\my\my...', 38, Array)
#1 C:\server\my\myapp\trunk\www\system\classes\Kohana\Controller.php(84): Controller_Api->action_type_create()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\server\my\myapp\trunk\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\server\my\myapp\trunk\www\application\classes\Controller\api.php:38
2013-12-23 14:30:45 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\api.php [ 38 ] in C:\server\my\myapp\trunk\www\application\classes\Controller\api.php:38
2013-12-23 14:30:45 --- DEBUG: #0 C:\server\my\myapp\trunk\www\application\classes\Controller\api.php(38): Kohana_Core::error_handler(8, 'Array to string...', 'C:\server\my\my...', 38, Array)
#1 C:\server\my\myapp\trunk\www\system\classes\Kohana\Controller.php(84): Controller_Api->action_type_create()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\server\my\myapp\trunk\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\server\my\myapp\trunk\www\application\classes\Controller\api.php:38
2013-12-23 14:43:21 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Api::$roles ~ APPPATH\classes\Controller\api.php [ 16 ] in C:\server\my\myapp\trunk\www\application\classes\Controller\api.php:16
2013-12-23 14:43:21 --- DEBUG: #0 C:\server\my\myapp\trunk\www\application\classes\Controller\api.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\server\my\my...', 16, Array)
#1 C:\server\my\myapp\trunk\www\system\classes\Kohana\Controller.php(69): Controller_Api->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\server\my\myapp\trunk\www\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\server\my\myapp\trunk\www\index.php(118): Kohana_Request->execute()
#7 {main} in C:\server\my\myapp\trunk\www\application\classes\Controller\api.php:16
2013-12-23 14:45:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\api.php [ 48 ] in file:line
2013-12-23 14:45:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line