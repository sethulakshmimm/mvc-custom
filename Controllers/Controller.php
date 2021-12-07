<?php
class Controller extends Database{
    public static function createView($viewfile){
        require_once('Views/'.$viewfile.'.php');
    }
}