<?php

class userModel{

    static public function mdlUser($table, $data){

        $search=conexBD::FunctionConex()->prepare("SELECT * FROM $table WHERE email: email");
        $search=bindParam("email:", $data['email'], PDO::PARAM_STR);
        $search->execute();

        $user= search->fetch(PDO::FETCH_ASSOC);

        if ($user == false) {
            echo "usuario no encontrado";
        }
            $passwordValidate=password_verify($data['password'], $user['password']);
            if ($passwordValidate) {
                session_start();

                $_SESSION['fullname']=$user['nombreUsuario']." ".$_SESSION['apellidoUsuario'];
                $_SESSION['email']=$user['email'];
                
                return "ok";
            }else{
                echo "credenciales incorrectas";
            }
    
            return $user;
            $search=null;
    }

   

}