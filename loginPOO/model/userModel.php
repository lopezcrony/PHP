<?php

use PDO;

class userModel{

    static public function mdlUser($table, $data){

        $statm = conexBD::FunctionConex()->prepare("SELECT * FROM usuario WHERE email = :email");
        $statm->bindParam(":email", $data['email'], PDO::PARAM_STR);
        $statm->execute();

        $user = $statm->fetch(PDO::FETCH_ASSOC);

        if ($user === false) {
            echo "usuario no encontrado";
        }
        $passwordValidate = password_verify($data['password'], $user['password']);
        if ($passwordValidate) {
            session_start();

            $_SESSION['fullname'] = $user['nombreUsuario'] . " " . $_SESSION['apellidoUsuario'];
            $_SESSION['email'] = $user['email'];

            return "ok";
        } else {
            echo "credenciales incorrectas";
        }

        return $user;
        $statm = null;
    }
}

