<?php

namespace Config;

class Config
{
    public static function getSetting() {
        $file = json_decode(file_get_contents('settings.json'));
        return $file;
    }
    
    public static function getOauthToken($type){
        $settings = self::getSetting();
        $type = strtolower($type);

        if(array_key_exists($type, $settings)) {
            return $settings->$type->token;
        } else {
            return self::error();
        }
    }

    protected static function error() {
        $response = ['success' => false, 'message' => 'Something went wrong'];
        return json_encode($response);
    }
}
