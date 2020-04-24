<?php
//echo $_SERVER['QUERY_STRING'];
//switch ($_SERVER['QUERY_STRING']) {
//    case '':
//        require_once 'templates/index.html';
//        break;
//    case 'blog':
//        require_once 'templates/blog-full.html';
//        break;
//    case 'services':
//        require_once 'templates/services.html';
//        break;
//    case 'team':
//        require_once 'templates/team.html';
//        break;
//    case 'contact_us':
//        require_once 'templates/contact.html';
//        break;
//}
require_once 'vendor/autoload.php';
$a = new \App\Route();
$a->route();