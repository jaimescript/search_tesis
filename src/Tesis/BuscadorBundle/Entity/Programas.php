<?php

namespace Tesis\BuscadorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Programas
 *
 * @ORM\Table(name="programas")
 * @ORM\Entity
 */
class Programas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $Id;

    /**
     * @var string
     *
     * @ORM\Column(name="IdPrograma", type="string", length=5)
     */
    private $idPrograma;

    /**
     * @var string
     *
     * @ORM\Column(name="ProgProf", type="string", length=255)
     */
    private $progProf;

    /**
     * @var string
     *
     * @ORM\Column(name="IdFacultad", type="string", length=5)
     */
    private $IdFacultad;

    /**
     * @var string
     *
     * @ORM\Column(name="Letras", type="string", length=5)
     */
    private $letras;

    /**
     * @var string
     *
     * @ORM\Column(name="Estado", type="string", length=1)
     */
    private $estado;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * Set idPrograma
     *
     * @param string $idPrograma
     * @return Programas
     */
    public function setIdPrograma($idPrograma)
    {
        $this->idPrograma = $idPrograma;

        return $this;
    }

    /**
     * Get idPrograma
     *
     * @return string 
     */
    public function getIdPrograma()
    {
        return $this->idPrograma;
    }

    /**
     * Set progProf
     *
     * @param string $progProf
     * @return Programas
     */
    public function setProgProf($progProf)
    {
        $this->progProf = $progProf;

        return $this;
    }

    /**
     * Get progProf
     *
     * @return string 
     */
    public function getProgProf()
    {
        return $this->progProf;
    }

    /**
     * Set idFacultad
     *
     * @param string $IdFacultad
     * @return Programas
     */
    public function setIdFacultad($IdFacultad)
    {
        $this->IdFacultad = $IdFacultad;

        return $this;
    }

    /**
     * Get IdFacultad
     *
     * @return string 
     */
    public function getIdFacultad()
    {
        return $this->IdFacultad;
    }

    /**
     * Set letras
     *
     * @param string $letras
     * @return Programas
     */
    public function setLetras($letras)
    {
        $this->letras = $letras;

        return $this;
    }

    /**
     * Get letras
     *
     * @return string 
     */
    public function getLetras()
    {
        return $this->letras;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Programas
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }
}
