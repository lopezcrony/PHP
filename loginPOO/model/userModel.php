<?php

class userModel
{

    static public function mdlUser($table, $data)
    {

        $statm = conexBD::FunctionConex()->prepare("SELECT * FROM usuario WHERE email = :email");
        $statm->bindParam(":email", $data['email'], PDO::PARAM_STR);
        $statm->execute();

        $user = $statm->fetch(PDO::FETCH_ASSOC);

        if ($user === false) {
            echo "usuario no encontrado";
        } else {
            $passwordValidate = password_verify($data['password'], $user['password']);
            if ($passwordValidate) {
                session_start();

                $_SESSION['fullname'] = $user['nombreUsuario'] . " " . $_SESSION['apellidoUsuario'];
                $_SESSION['email'] = $user['email'];

                return "ok";
            } else {
                echo "credenciales incorrectas";
            }

        }
        return $user;
        $statm = null;
    }


    static public function mdlRegister($table, $data)
    {
        $statm = conexBD::FunctionConex()->prepare("INSERT INTO $table(nombreUsuario, apellidoUsuario, email, password, document) VALUES (:name, :lastname, :email, :password, :document)");
        $passwordEncripty = password_hash($data['password'], PASSWORD_DEFAULT, array("cost" => 10));


        $statm->bindParam(":name", $data['nombreUsuario'], PDO::PARAM_STR);
        $statm->bindParam(":lastname", $data['apellidoUsuario'], PDO::PARAM_STR);
        $statm->bindParam(":email", $data['email'], PDO::PARAM_STR);
        $statm->bindParam(":password", $passwordEncripty, PDO::PARAM_STR);
        $statm->bindParam(":document", $data['document'], PDO::PARAM_STR);



        if ($statm->execute()) {
            return "ok";
        } else {
            return conexBD::FunctionConex()->errorInfo();
        };

        $statm = null;
    }
}
