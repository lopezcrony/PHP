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

}