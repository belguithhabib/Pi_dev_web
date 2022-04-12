<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article", indexes={@ORM\Index(name="art_cat", columns={"id_categorie"}), @ORM\Index(name="art_boost", columns={"boost"}), @ORM\Index(name="id_Gouvernorat", columns={"id_Gouvernorat"}), @ORM\Index(name="art_user", columns={"id_proprietaire"})})
 * @ORM\Entity
 */
class Article
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="echange_cross_cat", type="integer", nullable=false)
     */
    private $echangeCrossCat;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Date_publication", type="date", nullable=false)
     */
    private $datePublication;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=255, nullable=false)
     */
    private $etat;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=false)
     */
    private $image;

    /**
     * @var \CategorieArticle
     *
     * @ORM\ManyToOne(targetEntity="CategorieArticle")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categorie", referencedColumnName="id")
     * })
     */
    private $idCategorie;

    /**
     * @var \Gouvernorat
     *
     * @ORM\ManyToOne(targetEntity="Gouvernorat")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Gouvernorat", referencedColumnName="id_Gouvernorat")
     * })
     */
    private $idGouvernorat;

    /**
     * @var \Boost
     *
     * @ORM\ManyToOne(targetEntity="Boost")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="boost", referencedColumnName="id_boost")
     * })
     */
    private $boost;

    /**
     * @var \User
     *
     * @ORM\ManyToOne(targetEntity="User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_proprietaire", referencedColumnName="id_user")
     * })
     */
    private $idProprietaire;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getEchangeCrossCat(): int
    {
        return $this->echangeCrossCat;
    }

    /**
     * @param int $echangeCrossCat
     */
    public function setEchangeCrossCat(int $echangeCrossCat): void
    {
        $this->echangeCrossCat = $echangeCrossCat;
    }

    /**
     * @return \DateTime
     */
    public function getDatePublication(): \DateTime
    {
        return $this->datePublication;
    }

    /**
     * @param \DateTime $datePublication
     */
    public function setDatePublication(\DateTime $datePublication): void
    {
        $this->datePublication = $datePublication;
    }

    /**
     * @return string
     */
    public function getEtat(): string
    {
        return $this->etat;
    }

    /**
     * @param string $etat
     */
    public function setEtat(string $etat): void
    {
        $this->etat = $etat;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getTitre(): string
    {
        return $this->titre;
    }

    /**
     * @param string $titre
     */
    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return \CategorieArticle
     */
    public function getIdCategorie(): \CategorieArticle
    {
        return $this->idCategorie;
    }

    /**
     * @param \CategorieArticle $idCategorie
     */
    public function setIdCategorie(\CategorieArticle $idCategorie): void
    {
        $this->idCategorie = $idCategorie;
    }

    /**
     * @return \Gouvernorat
     */
    public function getIdGouvernorat(): \Gouvernorat
    {
        return $this->idGouvernorat;
    }

    /**
     * @param \Gouvernorat $idGouvernorat
     */
    public function setIdGouvernorat(\Gouvernorat $idGouvernorat): void
    {
        $this->idGouvernorat = $idGouvernorat;
    }

    /**
     * @return \Boost
     */
    public function getBoost(): \Boost
    {
        return $this->boost;
    }

    /**
     * @param \Boost $boost
     */
    public function setBoost(\Boost $boost): void
    {
        $this->boost = $boost;
    }

    /**
     * @return \User
     */
    public function getIdProprietaire(): \User
    {
        return $this->idProprietaire;
    }

    /**
     * @param \User $idProprietaire
     */
    public function setIdProprietaire(\User $idProprietaire): void
    {
        $this->idProprietaire = $idProprietaire;
    }


}
