<?php

class autenticationSystem{

    static public function verifyLogin(){

        if (isset($_POST['email'])) {
            
            $table="usuario";
            $data=array(
                "email"=>$_POST['email'],
                "password"=>$_POST['password'],
            );

            $answer=userModel::mdlUser($table, $data);
            return $answer;
        }

    }

    static public function addUser(){
        if (isset($_POST['document'])) {
            $table="usuario";
            $data= array(
                "document"=>$_POST['document'],
                "name"=>$_POST['nombreUsuario'],
                "lastname"=>$_POST['apellidoUsuario'],
                "email"=>$_POST['email'],
                "password"=>$_POST['password'],
            );

            $answer=userModel::mdlRegister($table, $data);
            return $answer;
        }
    }

}