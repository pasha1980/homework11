<?php


namespace App;


class Route
{
    public function route()
    {
        switch ($_SERVER['QUERY_STRING']) {
            case '':
                $a = 'index.html';
                break;
            case 'blog':
                $a = 'blog-full.html';
                break;
            case 'services':
                $a = 'services.html';
                break;
            case 'team':
                $a = 'team.html';
                break;
            case 'contact_us':
                $a = 'contact.html';
                break;
        }
        $req = 'templates/' . $a;
        require_once $req;
    }
}