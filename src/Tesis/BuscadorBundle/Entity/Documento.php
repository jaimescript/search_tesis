<?php

namespace Tesis\BuscadorBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Documento
 *
 * @ORM\Table(name="documento")
 * @ORM\Entity
 */
class Documento
{

    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(name="codigo", type="integer")
     */
    protected $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="autor", type="string", length=255)
     *
     */
    protected $autor;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=255)
     */
    protected $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="disciplina", type="string", length=4)
     */
    protected $disciplina;

    /**
     * @var string
     *
     * @ORM\Column(name="universidad", type="string", length=45)
     */
    protected $universidad;

    /**
     * @var string
     *
     * @ORM\Column(name="facultad", type="string", length=2)
     */
    protected $facultad;

    /**
     * @var string
     *
     * @ORM\Column(name="programa", type="string", length=2)
     */
    protected $programa;

    /**
     * @var integer
     *
     * @ORM\Column(name="fechaAceptacion", type="integer")
     */
    protected $fechaAceptacion;

    /**
     * @var string
     *
     * @ORM\Column(name="editor", type="string", length=85)
     */
    protected $editor;

    /**
     * @var string
     *
     * @ORM\Column(name="grado", type="string", length=200)
     */
    protected $grado;

    /**
     * @var string
     *
     * @ORM\Column(name="copyright", type="string", length=100)
     */
    protected $copyright;

    /**
     * @var string
     *
     * @ORM\Column(name="resumen", type="text")
     */
    protected $resumen;

    /**
     * @var string
     *
     * @ORM\Column(name="palabrasClave", type="string", length=200)
     */
    protected $palabrasClave;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion", type="string", length=50)
     */
    protected $ubicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="codigoTesis", type="string", length=25)
     */
    protected $codigoTesis;

    /**
     * @var string
     *
     * @ORM\Column(name="Estado", type="string", length=1)
     */
    protected $estado;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Fecha", type="date")
     */
    protected $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="Observaciones", type="string", length=255)
     */
    protected $observaciones;

    /**
     * @var string
     *
     * @ORM\Column(name="Formato", type="string", length=1)
     */
    protected $formato;

    /**
     * @var string
     *
     * @ORM\Column(name="Publicar", type="string", length=1)
     */
    protected $publicar;


    /**
     * Set codigo
     *
     * @param integer $codigo
     * @return Documento
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return integer 
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set autor
     *
     * @param string $autor
     * @return Documento
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;

        return $this;
    }

    /**
     * Get autor
     *
     * @return string 
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * Set titulo
     *
     * @param string $titulo
     * @return Documento
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get titulo
     *
     * @return string 
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set disciplina
     *
     * @param string $disciplina
     * @return Documento
     */
    public function setDisciplina($disciplina)
    {
        $this->disciplina = $disciplina;

        return $this;
    }

    /**
     * Get disciplina
     *
     * @return string 
     */
    public function getDisciplina()
    {
        return $this->disciplina;
    }

    /**
     * Set universidad
     *
     * @param string $universidad
     * @return Documento
     */
    public function setUniversidad($universidad)
    {
        $this->universidad = $universidad;

        return $this;
    }

    /**
     * Get universidad
     *
     * @return string 
     */
    public function getUniversidad()
    {
        return $this->universidad;
    }

    /**
     * Set facultad
     *
     * @param string $facultad
     * @return Documento
     */
    public function setFacultad($facultad)
    {
        $this->facultad = $facultad;

        return $this;
    }

    /**
     * Get facultad
     *
     * @return string 
     */
    public function getFacultad()
    {
        return $this->facultad;
    }

    /**
     * Set programa
     *
     * @param string $programa
     * @return Documento
     */
    public function setPrograma($programa)
    {
        $this->programa = $programa;

        return $this;
    }

    /**
     * Get programa
     *
     * @return string 
     */
    public function getPrograma()
    {
        return $this->programa;
    }

    /**
     * Set fechaAceptacion
     *
     * @param integer $fechaAceptacion
     * @return Documento
     */
    public function setFechaAceptacion($fechaAceptacion)
    {
        $this->fechaAceptacion = $fechaAceptacion;

        return $this;
    }

    /**
     * Get fechaAceptacion
     *
     * @return integer 
     */
    public function getFechaAceptacion()
    {
        return $this->fechaAceptacion;
    }

    /**
     * Set editor
     *
     * @param string $editor
     * @return Documento
     */
    public function setEditor($editor)
    {
        $this->editor = $editor;

        return $this;
    }

    /**
     * Get editor
     *
     * @return string 
     */
    public function getEditor()
    {
        return $this->editor;
    }

    /**
     * Set grado
     *
     * @param string $grado
     * @return Documento
     */
    public function setGrado($grado)
    {
        $this->grado = $grado;

        return $this;
    }

    /**
     * Get grado
     *
     * @return string 
     */
    public function getGrado()
    {
        return $this->grado;
    }

    /**
     * Set copyright
     *
     * @param string $copyright
     * @return Documento
     */
    public function setCopyright($copyright)
    {
        $this->copyright = $copyright;

        return $this;
    }

    /**
     * Get copyright
     *
     * @return string 
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * Set resumen
     *
     * @param string $resumen
     * @return Documento
     */
    public function setResumen($resumen)
    {
        $this->resumen = $resumen;

        return $this;
    }

    /**
     * Get resumen
     *
     * @return string 
     */
    public function getResumen()
    {
        return $this->resumen;
    }

    /**
     * Set palabrasClave
     *
     * @param string $palabrasClave
     * @return Documento
     */
    public function setPalabrasClave($palabrasClave)
    {
        $this->palabrasClave = $palabrasClave;

        return $this;
    }

    /**
     * Get palabrasClave
     *
     * @return string 
     */
    public function getPalabrasClave()
    {
        return $this->palabrasClave;
    }

    /**
     * Set ubicacion
     *
     * @param string $ubicacion
     * @return Documento
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set codigoTesis
     *
     * @param string $codigoTesis
     * @return Documento
     */
    public function setCodigoTesis($codigoTesis)
    {
        $this->codigoTesis = $codigoTesis;

        return $this;
    }

    /**
     * Get codigoTesis
     *
     * @return string 
     */
    public function getCodigoTesis()
    {
        return $this->codigoTesis;
    }

    /**
     * Set estado
     *
     * @param string $estado
     * @return Documento
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

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Documento
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set observaciones
     *
     * @param string $observaciones
     * @return Documento
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string 
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }

    /**
     * Set formato
     *
     * @param string $formato
     * @return Documento
     */
    public function setFormato($formato)
    {
        $this->formato = $formato;

        return $this;
    }

    /**
     * Get formato
     *
     * @return string 
     */
    public function getFormato()
    {
        return $this->formato;
    }

    /**
     * Set publicar
     *
     * @param string $publicar
     * @return Documento
     */
    public function setPublicar($publicar)
    {
        $this->publicar = $publicar;

        return $this;
    }

    /**
     * Get publicar
     *
     * @return string 
     */
    public function getPublicar()
    {
        return $this->publicar;
    }
}
