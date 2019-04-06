<?php
//Check if json configuration file exit
if (!file_exists("settings.json")) {
    exit("This file does not exit");
}
//read the content of the json file
$settings = file_get_contents("settings.json");
//convert it into actual PHP object.
$config = json_decode($settings);
//To access facebook token
$fbToken = $config->facebook->token;
//google token
$googleToken = $config->facebook->token;
