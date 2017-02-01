<?php
namespace StaticScope;

use StaticScope\BaseClass;

/**
 * Description of D
 *
 * @author Joe Wheatley <joew@fnvi.co.uk>
 */
class D extends BaseClass{
    
    public static function setClassTest($name) {
        parent::setClassTest($name);
    }
    
    public static function getClassTest() {
        parent::getClassTest();
    }
    
    public static function setSelfTest($name) {
        parent::setSelfTest($name);
    }
    
    public static function getSelfTest() {
        parent::getSelfTest();
    }
    
    public static function setStaticTest($name) {
        parent::setStaticTest($name);
    }
    
    public static function getStaticTest() {
        parent::getStaticTest();
    }
}
