<?php

class conexBD{


    static public function FunctionConex(){

        $link = new PDO("mysql:host=localhost;dbname=frappe", "root", "");
        $link->exec("set names utf8");
        return $link;
    }

}