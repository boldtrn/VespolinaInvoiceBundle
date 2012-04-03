<?php

namespace Vespolina\InvoiceBundle\Test\Entity;

use Vespolina\InvoiceBundle\Entity\Address;

class AddressTest extends \PHPUnit_Framework_TestCase
{

   public function testConstructor()
   {
	$adr = new Address("firstName", "lastName", "street", "city", "zip");

	$this->assertEquals("firstName", $adr->getFIRSTNAME());
	$this->assertEquals("lastName", $adr->getLASTNAME());
	$this->assertEquals("street", $adr->getSTREET());
	$this->assertEquals("city", $adr->getCITY());
	$this->assertEquals("zip", $adr->getZIP());

    }

}
