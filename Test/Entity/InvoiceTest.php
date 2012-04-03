<?php

namespace Vespolina\InvoiceBundle\Test\Entity;

use Vespolina\InvoiceBundle\Entity\Invoice;

class InvoiceTest extends \PHPUnit_Framework_TestCase
{

   public function testConstructor()
   {

	$usual_invoice = new Invoice(5,FALSE);

        $this->assertEquals(1,  $usual_invoice->getState(), "Test Usual_Invoice State");
        $this->assertEquals(1,  $usual_invoice->getType(), "Test Usual_Invoice Type");
	$this->assertEquals(date("Y m d",strtotime("+5 days")), $usual_invoice->getIssueDate(), "Test Usual_Invoice Date");


        $recurring_invoice = new Invoice(10,TRUE);
         
        $this->assertEquals(1,  $recurring_invoice->getState(), "Test Recurring_Invoice State");
        $this->assertEquals(2,  $recurring_invoice->getType(), "Test Recurring_Invoice Type");
        $this->assertEquals(date("Y m d",strtotime("+10 days")), $recurring_invoice->getIssueDate(), "Test Recurring_Invoice Date");

    }

}
