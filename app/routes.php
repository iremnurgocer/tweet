<?php

require_once __DIR__ .'/Controllers/AuthController.php';
require_once __DIR__ .'/Controllers/TweetController.php';

class Route {
    public static function run($path) {
        switch ($path) {
            case '/':
                $controller = new TweetController();
                $controller->tweetList();
                break;
            case '/login':
                $controller = new AuthController();
                $controller->login();
                break;
            case '/register':
                $controller = new AuthController();
                $controller->register();
                break;
            case '/logout':
                session_start();
                session_destroy();
                header('Location: /');
                exit();
            default:
                http_response_code(404);
                echo "404 Sayfa Bulunamadı";
                break;
        }
    }
}
