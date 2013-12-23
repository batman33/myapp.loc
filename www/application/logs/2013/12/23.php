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