<?php

namespace Immobilier\BudgetBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BudgetGest
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Immobilier\BudgetBundle\Entity\BudgetGestRepository")
 */
class BudgetGest
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $nomenclature;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $ratio;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $assiette;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $budgetHt;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $montantTva;

    /**
     * @ORM\Column(type="decimal", scale=2)
     */
    protected $budgetTtc;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $poste;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $ouvrage;

    /**
     * @ORM\Column(type="boolean")
     */
    protected $type;


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
     * Set nomenclature
     *
     * @param string $nomenclature
     * @return Budget
     */
    public function setNomenclature($nomenclature)
    {
        $this->nomenclature = $nomenclature;
    
        return $this;
    }

    /**
     * Get nomenclature
     *
     * @return string 
     */
    public function getNomenclature()
    {
        return $this->nomenclature;
    }

    /**
     * Set ratio
     *
     * @param string $ratio
     * @return Budget
     */
    public function setRatio($ratio)
    {
        $this->ratio = $ratio;
    
        return $this;
    }

    /**
     * Get ratio
     *
     * @return string 
     */
    public function getRatio()
    {
        return $this->ratio;
    }

    /**
     * Set assiette
     *
     * @param string $assiette
     * @return Budget
     */
    public function setAssiette($assiette)
    {
        $this->assiette = $assiette;
    
        return $this;
    }

    /**
     * Get assiette
     *
     * @return string 
     */
    public function getAssiette()
    {
        return $this->assiette;
    }

    /**
     * Set budgetHt
     *
     * @param integer $budgetHt
     * @return Budget
     */
    public function setBudgetHt($budgetHt)
    {
        $this->budgetHt = $budgetHt;
    
        return $this;
    }

    /**
     * Get budgetHt
     *
     * @return integer 
     */
    public function getBudgetHt()
    {
        return $this->budgetHt;
    }

    /**
     * Set montantTva
     *
     * @param integer $montantTva
     * @return Budget
     */
    public function setMontantTva($montantTva)
    {
        $this->montantTva = $montantTva;
    
        return $this;
    }

    /**
     * Get montantTva
     *
     * @return integer 
     */
    public function getMontantTva()
    {
        return $this->montantTva;
    }

    /**
     * Set budgetTtc
     *
     * @param integer $budgetTtc
     * @return Budget
     */
    public function setBudgetTtc($budgetTtc)
    {
        $this->budgetTtc = $budgetTtc;
    
        return $this;
    }

    /**
     * Get budgetTtc
     *
     * @return integer 
     */
    public function getBudgetTtc()
    {
        return $this->budgetTtc;
    }

    /**
     * Set poste
     *
     * @param string $poste
     * @return Budget
     */
    public function setPoste($poste)
    {
        $this->poste = $poste;
    
        return $this;
    }

    /**
     * Get poste
     *
     * @return string 
     */
    public function getPoste()
    {
        return $this->poste;
    }

    /**
     * Set ouvrage
     *
     * @param string $ouvrage
     * @return Budget
     */
    public function setOuvrage($ouvrage)
    {
        $this->ouvrage = $ouvrage;
    
        return $this;
    }

    /**
     * Get ouvrage
     *
     * @return string 
     */
    public function getOuvrage()
    {
        return $this->ouvrage;
    }

    /**
     * Set type
     *
     * @param boolean $type
     * @return Budget
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return boolean 
     */
    public function getType()
    {
        return $this->type;
    }

}
