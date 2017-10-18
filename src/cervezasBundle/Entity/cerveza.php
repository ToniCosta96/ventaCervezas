<?php

namespace cervezasBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * cerveza
 *
 * @ORM\Table(name="cerveza")
 * @ORM\Entity(repositoryClass="cervezasBundle\Repository\cervezaRepository")
 */
class cerveza
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="pais", type="string", length=255)
     */
    private $pais;

    /**
     * @var string
     *
     * @ORM\Column(name="poblacion", type="string", length=255)
     */
    private $poblacion;

    /**
     * @var string
     *
     * @ORM\Column(name="tipo", type="string", length=255)
     */
    private $tipo;

    /**
     * @var bool
     *
     * @ORM\Column(name="importacion", type="boolean")
     */
    private $importacion;

    /**
     * @var int
     *
     * @ORM\Column(name="tamanyo", type="integer")
     */
    private $tamanyo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaAlmacen", type="date")
     */
    private $fechaAlmacen;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="foto", type="string", length=255)
     */
    private $foto;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return cerveza
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set pais
     *
     * @param string $pais
     *
     * @return cerveza
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get pais
     *
     * @return string
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set poblacion
     *
     * @param string $poblacion
     *
     * @return cerveza
     */
    public function setPoblacion($poblacion)
    {
        $this->poblacion = $poblacion;

        return $this;
    }

    /**
     * Get poblacion
     *
     * @return string
     */
    public function getPoblacion()
    {
        return $this->poblacion;
    }

    /**
     * Set tipo
     *
     * @param string $tipo
     *
     * @return cerveza
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Get tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Set importacion
     *
     * @param boolean $importacion
     *
     * @return cerveza
     */
    public function setImportacion($importacion)
    {
        $this->importacion = $importacion;

        return $this;
    }

    /**
     * Get importacion
     *
     * @return bool
     */
    public function getImportacion()
    {
        return $this->importacion;
    }

    /**
     * Set tamanyo
     *
     * @param integer $tamanyo
     *
     * @return cerveza
     */
    public function setTamanyo($tamanyo)
    {
        $this->tamanyo = $tamanyo;

        return $this;
    }

    /**
     * Get tamanyo
     *
     * @return int
     */
    public function getTamanyo()
    {
        return $this->tamanyo;
    }

    /**
     * Set fechaAlmacen
     *
     * @param \DateTime $fechaAlmacen
     *
     * @return cerveza
     */
    public function setFechaAlmacen($fechaAlmacen)
    {
        $this->fechaAlmacen = $fechaAlmacen;

        return $this;
    }

    /**
     * Get fechaAlmacen
     *
     * @return \DateTime
     */
    public function getFechaAlmacen()
    {
        return $this->fechaAlmacen;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return cerveza
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return int
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return cerveza
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }
}

