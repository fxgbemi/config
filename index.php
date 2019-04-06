<?php
/*
How to use the config.php?
you import it where its needed
and call the variable you need.
*/
require 'config/Config.php';
use Config\Config;

echo Config::getOauthToken('googles');
