<?php

use \PHPUnit\Framework\TestCase;
use Source\Supermarket;
//Test Class for use Supermarket Price With Discount Check
class SupermarketTest extends TestCase
{
    //To check Diffrent Items Calculate Price
    public function testCalculatePrice()
    {
     $oSupermarket = new Source\Supermarket;
     //Test For Item A
     self::assertEquals(130,$oSupermarket->Calculation('A',3)); 

     //Test For Item B
     self::assertEquals(45,$oSupermarket->Calculation('B',2));

     //Tests For Item C
     self::assertEquals(38,$oSupermarket->Calculation('C',2));
     self::assertEquals(50,$oSupermarket->Calculation('C',3));
     self::assertEquals(88,$oSupermarket->Calculation('C',5)); 

     //Test For Item D
     self::assertEquals(55,$oSupermarket->Calculation('D',5,2));
     self::assertEquals(90,$oSupermarket->Calculation('D',6));

     //Test For Item E
     self::assertEquals(15,$oSupermarket->Calculation('E',3)); 
    }
 
}
?>