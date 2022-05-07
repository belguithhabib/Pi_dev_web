<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boost
 *
 * @ORM\Table(name="boost", indexes={@ORM\Index(name="idArticle", columns={"idArticle"})})
 * @ORM\Entity
 */
class Boost
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_boost", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idBoost;

    /**
     * @var string
     *
     * @ORM\Column(name="type_boost", type="string", length=255, nullable=false)
     */
    private $typeBoost;

    /**
     * @var float
     *
     * @ORM\Column(name="prix_boost", type="float", precision=10, scale=0, nullable=false)
     */
    private $prixBoost;

    /**
     * @var \Article
     *
     * @ORM\ManyToOne(targetEntity="Article")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idArticle", referencedColumnName="id")
     * })
     */
    private $idarticle;

    public function getIdBoost(): ?int
    {
        return $this->idBoost;
    }

    public function getTypeBoost(): ?string
    {
        return $this->typeBoost;
    }

    public function setTypeBoost(string $typeBoost): self
    {
        $this->typeBoost = $typeBoost;

        return $this;
    }

    public function getPrixBoost(): ?float
    {
        return $this->prixBoost;
    }

    public function setPrixBoost(float $prixBoost): self
    {
        $this->prixBoost = $prixBoost;

        return $this;
    }

    public function getIdarticle(): ?Article
    {
        return $this->idarticle;
    }

    public function setIdarticle(?Article $idarticle): self
    {
        $this->idarticle = $idarticle;

        return $this;
    }


}
