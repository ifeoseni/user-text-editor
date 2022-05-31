<?php


class Session{
    private static $sessionStarted = false;

    public static function start(){
        if(self::$sessionStarted == false){
            session_start();
            self::$sessionStarted = true;
        }
    }

    public static function set($key,$value){
        $_SESSION[$key] = $value;
    }

    public static function get($key){
        return $_SESSION[$key];
    }
}

$session = new Session();
$session->start();
$session->set('boy','hi');
echo $session->get('boy');
?>