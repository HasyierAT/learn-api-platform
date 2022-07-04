<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/** A Product
 * @ORM\Entity
 * 
 */
#[ApiResource]
class Product
{
    /** The Id of a Product
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;

    /** The MPN(Manufacturer Product Number) of the Product
     * @ORM\Column()
     */
    private ?string $mpn = null;

    /** the name of a Product
     * @ORM\Column()
     */
    private string $name = '';

    /** the description of a product
     * @ORM\Column(type="text")
     */
    private string $description = '';

    /** the date issue of a product
     * 
     * @ORM\Column(type="datetime")
     */
    private ?\DateTimeInterface $issueDate = null;

    /** the manufacturer of a product
     * 
     * @ORM\ManyToOne(
     *  targetEntity="Manufacturer",
     *  inversedBy="products"
     * ) 
     */
    private ?Manufacturer $manufacturer = null;
     
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMpn(): ?string
    {
        return $this->mpn;
    }

    public function setMpn(?string $mpn): void
    {
        $this->mpn = $mpn;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getIssueDate(): ?\DateTimeInterface
    {
        return $this->issueDate;
    }

    public function setIssueDate(?\DateTimeInterface $issueDate): void
    {
        $this->issueDate = $issueDate;
    }

    public function getManufacturer(): ?Manufacturer
    {
        return $this->manufacturer;
    }

    public function setManufacturer(?Manufacturer $manufacturer): void
    {
        $this->manufacturer = $manufacturer;
    }
}
