<?php

class conexBD{


    static public function FunctionConex(){

        $link = new PDO("sqlsrv:server=localhost;database=frappe;uid=root;pwd=password");
        $link->exec("set names utf8");
        return $link;
    }

}