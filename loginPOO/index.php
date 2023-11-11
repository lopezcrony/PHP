<?php

require_once('server/senttings.php');
require_once('controller/starTemplate.php');
require_once('controller\controllerAutentication.php');
require_once('model/userModel.php');


$template= new starTemplate();
$template->viewLogin();