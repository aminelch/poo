<?php
namespace App ;
/**
 * Class Autoloader
 */
class Autoloader
{

    //public const CLASS_DIR=dirname(__FILE__,1);
    /**
     *
     */
    const CLASS_EXTENSION = ".php";

    /**
     * @var the directory used to store classes
     */
    public static $classDir = null;

    /**
     *  Initialize the path and register the Autoloader
     */
    public static function init()
    {

        self::$classDir = dirname(__FILE__);
        set_include_path(self::$classDir);
        spl_autoload_register([__CLASS__, 'autoload']);

    }

    /**
     * @param string $class_name le nom de classe a chargé
     */
    private static function autoload($class_name)
    {
        require self::$classDir . '/' . $class_name . self::CLASS_EXTENSION;
    }
}
