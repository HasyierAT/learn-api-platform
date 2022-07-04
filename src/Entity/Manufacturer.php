<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/** 
 * A manufacturer 
 * 
 * @ORM\Entity
*/
#[ApiResource]

class Manufacturer 
{
    /** id of the manufacturer 
     * 
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
    */
    private ?int $id = null;
    
    /** name of the manufacturer 
     * 
     * @ORM\Column
    */
    private string $name = '';

    /** description of the manufacturer 
     * 
     * @ORM\Column(type="text")
    */
    private string $description = '';

    /** country code of the manufacturer 
     * 
     * @ORM\Column(length=3)
    */
    private string $countryCode = '';

    /** date was the manufacturer listed
     * 
     * @ORM\Column(type="datetime")
    */
    private ?\DateTimeInterface $listedDate = null;

    public function getId() : int{
        return $this->id;
    }

    public function getName() : string{
        return $this->name;
    }

    public function setName(string $name) : void{
        $this->name = $name;
    }

    public function getDescription() : string{
        return $this->description;
    }

    public function setDescription(string $description) : void{
        $this->description = $description;
    }

    public function getCountryCode() : string{
        return $this->countryCode;
    }

    public function setCountryCode(string $countryCode) : void{
        $this->countryCode = $countryCode;
    }

    public function getListedDate() : ?\DateTimeInterface{
        return $this->listedDate;
    }

    public function setlistedDate(?\DateTimeInterface $listedDate) : void{
        $this->listedDate = $listedDate;
    }

}
?>