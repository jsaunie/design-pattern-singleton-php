<?php

class Connexion
{

    private function __construct()
    {
        echo "New connexion created <br>";
    }

    public static function getInstance()
    {

        static $instance = null;
        if (null == $instance) {
            $instance = new static();
        } else {
            echo "Using existing connexion <br>";
        }
        return $instance;
    }
}

$connexion = Connexion::getInstance();
$connexion2 = Connexion::getInstance();