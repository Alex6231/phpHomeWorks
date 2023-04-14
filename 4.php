<?php
class Cookie {
    public function set($name, $value) {
        setcookie($name, $value);
    }
    public function get($name) {
        echo $_COOKIE[$name];
    }
    public function del($name) {
        setcookie($name, "", time()-3600);
    }
}