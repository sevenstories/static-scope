<?php
use PHPUnit\Framework\TestCase;
use StaticScope\A;
use StaticScope\B;
use StaticScope\C;
use StaticScope\D;
/**
 * Description of ChildTest
 *
 * @author Joe Wheatley <joew@fnvi.co.uk>
 */
class ChildTest extends TestCase{
    
    public static function setUpBeforeClass() {
        A::setClassTest("A");
        B::setClassTest("B");
        C::setClassTest("C");
        D::setClassTest("D");
        
        A::setStaticTest("A");
        B::setStaticTest("B");
        C::setStaticTest("C");
        D::setStaticTest("D");
        
        A::setSelfTest("A");
        B::setSelfTest("B");
        C::setSelfTest("C");
        D::setSelfTest("D");
    }
    
    public function testAClass(){
        $this->assertEquals("A", A::getClassTest(), "Child class with no private static defined");
    }
    
    public function testBClass(){
        $this->assertEquals("B", B::getClassTest(), "Child class with no private static defined");
    }
    
    public function testCClass(){
        $this->assertEquals("C", C::getClassTest(), "Child class with private static defined");
    }
    
    public function testDClass(){
        $this->assertEquals("D", D::getClassTest(), "Child class with private static methods defined");
    }
    
    public function testAStatic(){
        $this->assertEquals("A", A::getStaticTest(), "Child class with no private static defined");
    }
    
    public function testBStatic(){
        $this->assertEquals("B", B::getStaticTest(), "Child class with no private static defined");
    }
    
    public function testCStatic(){
        $this->assertEquals("C", C::getStaticTest(), "Child class with private static defined");
    }
    
    public function testDStatic(){
        $this->assertEquals("D", D::getStaticTest(), "Child class with private static methods defined");
    }
    
    public function testASelf(){
        $this->assertEquals("A", A::getSelfTest(), "Child class with no private static defined");
    }
    
    public function testBSelf(){
        $this->assertEquals("B", B::getSelfTest(), "Child class with no private static defined");
    }
    
    public function testCSelf(){
        $this->assertEquals("C", C::getSelfTest(), "Child class with private static defined");
    }
    
    public function testDSelf(){
        $this->assertEquals("D", D::getSelfTest(), "Child class with private static methods defined");
    }
    
}
