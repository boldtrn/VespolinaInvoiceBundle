<?php

namespace Vespolina\InvoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vespolina\InvoiceBundle\Model\InvoiceInterface;

/**
 * Vespolina\VespolinaInvoiceBundle\Entity\Invoice
 *
 * @author Robin Boldt
 *
 * This Entity is meant to hold all the basic data of an Invoice.
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Invoice implements InvoiceInterface
{

    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer $type
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var integer $state
     *
     * @ORM\Column(name="state", type="integer")
     */
    private $state;

    /**
     * @var datetime $issue_date
     *
     * @ORM\Column(name="issue_date", type="datetime")
     */
    private $issue_date;


    /**
     * @var integer $daysToPay The days the Invoice should be payed
     * @var boolean $isRecurring States wheter the payment is recurring or not
     */
    public function __construct($daysToPay, $isRecurring){

	// Add x Days to Todays Date
	$this->issue_date = date("Y m d",strtotime("+".$daysToPay." days"));

	$this->state = self::STATE_NEW;

	if($isRecurring){
		$this->type = self::TYPE_RECURRING;
	}else{
		$this->type = self::TYPE_USUAL;
	}

    }

    // Getters-Setters

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param integer $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set state
     *
     * @param integer $state
     */
    public function setState($state)
    {
        $this->state = $state;
    }

    /**
     * Get state
     *
     * @return integer 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set issue_date
     *
     * @param datetime $issueDate
     */
    public function setIssueDate($issueDate)
    {
        $this->issue_date = $issueDate;
    }

    /**
     * Get issue_date
     *
     * @return datetime 
     */
    public function getIssueDate()
    {
        return $this->issue_date;
    }
}
