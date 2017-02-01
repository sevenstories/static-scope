<?php

namespace StaticScope;

/**
 * Description of BaseClass
 *
 * @author Joe Wheatley <joew@fnvi.co.uk>
 */
class BaseClass {
    
    protected static $classTest;
    protected static $selfTest;
    protected static $staticTest;
    
    public static function setClassTest($name){
        $class = get_called_class();
        $class::$classTest = $class::$classTest ?: $name;
    }
    
    public static function getClassTest(){
        $class = get_called_class();
        return $class::$classTest;
    }
    
    public static function setSelfTest($name){
        self::$selfTest = self::$selfTest ?: $name;
    }
    
    public static function getSelfTest(){
        return self::$selfTest;
    }
    
    public static function setStaticTest($name){
        static::$staticTest = static::$staticTest ?: $name;
    }
    
    public static function getStaticTest(){
        return static::$staticTest;
    }
    
}
