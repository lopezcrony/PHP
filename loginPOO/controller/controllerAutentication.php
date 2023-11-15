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
                "nombreUsuario"=>$_POST['nombreUsuario'],
                "apellidoUsuario"=>$_POST['apellidoUsuario'],
                "email"=>$_POST['email'],
                "password"=>$_POST['password'],
                "document"=>$_POST['document'],
            );

            $answer=userModel::mdlRegister($table, $data);
            return $answer;
        }
    }

}