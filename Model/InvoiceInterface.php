<?php

namespace Vespolina\InvoiceBundle\Model;

/**
 * Vespolina\VespolinaInvoiceBundle\Model\InvoiceInterface
 *
 * @author Robin Boldt
 */

interface InvoiceInterface
{

     const STATE_NEW = 1;
     const STATE_SUCCESSFULL = 2;
     const STATE_CANCELED = 3;
     const STATE_EXPIRED = 4;
     const STATE_FAILED = 5;
     const TYPE_USUAL = 1;
     const TYPE_RECURRING = 2;




}
