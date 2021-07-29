<?php
class Ville extends Model
{
    private $id;
    private $departement;
    private $nom;
    private $code_postale;
    private $canton;
    private $population;
    private $densite;
    private $surface;


    public function __construct($id, $departement, $nom, $code_postale, $canton, $population, $densite, $surface)
    {
        $this->id = $id ;
        $this->departement = $departement ;
        $this->nom = $nom ;
        $this->code_postale = $code_postale ;
        $this->canton = $canton ;
        $this->population = $population ;
        $this->densite = $densite ;
        $this->surface = $surface ;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * @param mixed $departement
     */
    public function setDepartement($departement): void
    {
        $this->departement = $departement;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }
    public function getCodePostale()
    {
        return $this->code_postale;
    }

    /**
     * @param mixed $code_postale
     */
    public function setCodePostale($code_postale): void
    {
        $this->code_postale = $code_postale;
    }
    public function getCanton()
    {
        return $this->canton;
    }

    /**
     * @param mixed $canton
     */
    public function setCanton($canton): void
    {
        $this->canton = $canton;
    }
    public function getPopulation()
    {
        return $this->population;
    }

    /**
     * @param mixed $population
     */
    public function setPopulation($population): void
    {
        $this->population = $population;
    }
    public function getDensite()
    {
        return $this->densite;
    }

    /**
     * @param mixed $densite
     */
    public function setDensite($densite): void
    {
        $this->densite = $densite;
    }
    public function getSurface()
    {
        return $this->surface;
    }

    /**
     * @param mixed $surface
     */
    public function setSurface($surface): void
    {
        $this->surface = $surface;
    }

}