<?php
// Load Config
require_once '../app/config/config.php';
//Loading Libraries
require_once 'helpers/url_helper.php';
require_once 'helpers/session_helper.php';

// spl_autoload_register(function($className){
//     require_once 'libraries/'.$className.'.php';
// });
require_once  'libraries/Core.php';
require_once  'libraries/Controller.php';
require_once  'libraries/Database.php';
