<?php
class Route{
    public static $validroute = array();
    public static function set($route, $function){
        self::$validroute[] = $route;
        //print_r(self::$validroute);
        
        
        if($_GET['url'] == $route){
            $function->__invoke();
        }
    }
}