<?php
class Home extends Controller{
    public static function getposts(){
        self::query("select * from posts");
        print_r(self::query("SELECT * FROM posts"));
    }
}
