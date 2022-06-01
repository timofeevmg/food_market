<?php
$_POST = json_decode(file_get_contents("php://input"), true); //if JSON send
echo var_dump($_POST);