<?php

/**
 * Helper pour initialiser la configuration de l'application
 * @author : Amine L'ch
 * @email: aminelch95@gmail.com
 */
class Config {

    /**
     * @var string
     */
    private $configurationPath;

    /**
     * @var stocke l'instance de la classe
     */
    private static $_instance ;


    /**
     * @var array| stocke la config de l'app
     */
    private $settings=[];

    /**
     * charge le fichier de configuration toute en construire le chemin vers
     * /config/config.php
     */
    public function __construct () {
        
        $this->configurationPath= dirname(__DIR__). '/' . 'config/config.php';
        $this->settings= require $this->configurationPath ; 
        
        
    }

    /**
     * RETOURNE une seule instance de la classe
     * @return object
     */
    public static function getInstance (): object {
        
        if(is_null(self::$_instance)) self::$_instance =new Config();
        return self::$_instance;
        
    }
    
    
    
    
    
    
    
    
}