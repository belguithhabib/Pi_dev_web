<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use mysql_xdevapi\TableUpdate;

/**
 * Boost
 *
 * @ORM\Table(name="boost")
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
     * @return int
     */
    public function getIdBoost(): ?int
    {
        return $this->idBoost;
    }

    /**
     * @param int $idBoost
     */
    public function setIdBoost(int $idBoost): void
    {
        $this->idBoost = $idBoost;
    }

    /**
     * @return string
     */
    public function getTypeBoost(): ?string
    {
        return $this->typeBoost;
    }

    /**
     * @param string $typeBoost
     */
    public function setTypeBoost(string $typeBoost): void
    {
        $this->typeBoost = $typeBoost;
    }

    /**
     * @return float
     */
    public function getPrixBoost(): ?float
    {
        return $this->prixBoost;
    }

    /**
     * @param float $prixBoost
     */
    public function setPrixBoost(float $prixBoost): void
    {
        $this->prixBoost = $prixBoost;
    }




}
