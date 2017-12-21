<?php

namespace Util;

class StartUp {
     public static function initRequest() {
            if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
        self::createClassLoader();
    }
     private static function createClassLoader() {
        spl_autoload_register(function ($className) {
            require_once 'classes/' . \str_replace('\\', '/', $className) . '.php';
        });
    }
}