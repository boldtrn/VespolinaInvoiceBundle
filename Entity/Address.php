<?php

namespace Vespolina\InvoiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vespolina\InvoiceBundle\Entity\Address
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Address
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @var string $SALUTATION
     *
     * @ORM\Column(name="SALUTATION", type="string", length=255, nullable=true)
     */
    private $SALUTATION;

    /**
     * @var string $FIRSTNAME
     *
     * @ORM\Column(name="FIRSTNAME", type="string", length=255)
     */
    private $FIRSTNAME;

    /**
     * @var string $LASTNAME
     *
     * @ORM\Column(name="LASTNAME", type="string", length=255)
     */
    private $LASTNAME;

    /**
     * @var string $STREET
     *
     * @ORM\Column(name="STREET", type="string", length=255)
     */
    private $STREET;

    /**
     * @var string $CITY
     *
     * @ORM\Column(name="CITY", type="string", length=255)
     */
    private $CITY;

    /**
     * @var string $ZIP
     *
     * @ORM\Column(name="ZIP", type="string", length=255)
     */
    private $ZIP;

    /**
     * @var string $COUNTRYNAME
     *
     * @ORM\Column(name="COUNTRYNAME", type="string", length=255, nullable=true)
     */
    private $COUNTRYNAME;

    /**
     * Creates a Address Object with the needed Parameters
     */
    function __construct($firstName, $lastName, $street, $city, $zip){
	$this->setFIRSTNAME($firstName);
	$this->setLASTNAME($lastName);
	$this->setSTREET($street);
	$this->setCITY($city);
	$this->setZIP($zip);
   } 





    /**
     * Set SALUTATION
     *
     * @param string $sALUTATION
     */
    public function setSALUTATION($sALUTATION)
    {
        $this->SALUTATION = $sALUTATION;
    }

    /**
     * Get SALUTATION
     *
     * @return string 
     */
    public function getSALUTATION()
    {
        return $this->SALUTATION;
    }

    /**
     * Set FIRSTNAME
     *
     * @param string $fIRSTNAME
     */
    public function setFIRSTNAME($fIRSTNAME)
    {
        $this->FIRSTNAME = $fIRSTNAME;
    }

    /**
     * Get FIRSTNAME
     *
     * @return string 
     */
    public function getFIRSTNAME()
    {
        return $this->FIRSTNAME;
    }

    /**
     * Set LASTNAME
     *
     * @param string $lASTNAME
     */
    public function setLASTNAME($lASTNAME)
    {
        $this->LASTNAME = $lASTNAME;
    }

    /**
     * Get LASTNAME
     *
     * @return string 
     */
    public function getLASTNAME()
    {
        return $this->LASTNAME;
    }

    /**
     * Set STREET
     *
     * @param string $sTREET
     */
    public function setSTREET($sTREET)
    {
        $this->STREET = $sTREET;
    }

    /**
     * Get STREET
     *
     * @return string 
     */
    public function getSTREET()
    {
        return $this->STREET;
    }

    /**
     * Set CITY
     *
     * @param string $cITY
     */
    public function setCITY($cITY)
    {
        $this->CITY = $cITY;
    }

    /**
     * Get CITY
     *
     * @return string 
     */
    public function getCITY()
    {
        return $this->CITY;
    }

    /**
     * Set ZIP
     *
     * @param string $zIP
     */
    public function setZIP($zIP)
    {
        $this->ZIP = $zIP;
    }

    /**
     * Get ZIP
     *
     * @return string 
     */
    public function getZIP()
    {
        return $this->ZIP;
    }

    /**
     * Set COUNTRYNAME
     *
     * @param string $cOUNTRYNAME
     */
    public function setCOUNTRYNAME($cOUNTRYNAME)
    {
        $this->COUNTRYNAME = $cOUNTRYNAME;
    }

    /**
     * Get COUNTRYNAME
     *
     * @return string 
     */
    public function getCOUNTRYNAME()
    {
        return $this->COUNTRYNAME;
    }
}