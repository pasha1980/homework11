<?php
require_once 'vendor/autoload.php';
$map = [
    ''=>'index.html',
    'blog'=>'blog-full.html',
    'services'=>'services.html',
    'team'=>'team.html',
    'contact-us'=>'contact.html',
];
$a = new \App\Route($map);
$a->route();