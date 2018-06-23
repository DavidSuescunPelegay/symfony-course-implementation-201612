<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factura
 *
 * @ORM\Table(name="factura", indexes={@ORM\Index(name="fk_factura_cliente1_idx", columns={"idCliente"}), @ORM\Index(name="fk_factura_usuario1_idx", columns={"idUsuario"})})
 * @ORM\Entity
 */
class Factura
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idFactura", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idfactura;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaEmision", type="datetime", nullable=false)
     */
    private $fechaemision;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $total;

    /**
     * @var boolean
     *
     * @ORM\Column(name="abonado", type="boolean", nullable=false)
     */
    private $abonado;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoPago", type="string", length=45, nullable=true)
     */
    private $tipopago;

    /**
     * @var \AppBundle\Entity\Cliente
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Cliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCliente", referencedColumnName="idCliente")
     * })
     */
    private $idcliente;

    /**
     * @var \AppBundle\Entity\Usuario
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idUsuario", referencedColumnName="idUsuario")
     * })
     */
    private $idusuario;



    /**
     * Get idfactura
     *
     * @return integer
     */
    public function getIdfactura()
    {
        return $this->idfactura;
    }

    /**
     * Set fechaemision
     *
     * @param \DateTime $fechaemision
     *
     * @return Factura
     */
    public function setFechaemision($fechaemision)
    {
        $this->fechaemision = $fechaemision;

        return $this;
    }

    /**
     * Get fechaemision
     *
     * @return \DateTime
     */
    public function getFechaemision()
    {
        return $this->fechaemision;
    }

    /**
     * Set total
     *
     * @param string $total
     *
     * @return Factura
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set abonado
     *
     * @param boolean $abonado
     *
     * @return Factura
     */
    public function setAbonado($abonado)
    {
        $this->abonado = $abonado;

        return $this;
    }

    /**
     * Get abonado
     *
     * @return boolean
     */
    public function getAbonado()
    {
        return $this->abonado;
    }

    /**
     * Set tipopago
     *
     * @param string $tipopago
     *
     * @return Factura
     */
    public function setTipopago($tipopago)
    {
        $this->tipopago = $tipopago;

        return $this;
    }

    /**
     * Get tipopago
     *
     * @return string
     */
    public function getTipopago()
    {
        return $this->tipopago;
    }

    /**
     * Set idcliente
     *
     * @param \AppBundle\Entity\Cliente $idcliente
     *
     * @return Factura
     */
    public function setIdcliente(\AppBundle\Entity\Cliente $idcliente = null)
    {
        $this->idcliente = $idcliente;

        return $this;
    }

    /**
     * Get idcliente
     *
     * @return \AppBundle\Entity\Cliente
     */
    public function getIdcliente()
    {
        return $this->idcliente;
    }

    /**
     * Set idusuario
     *
     * @param \AppBundle\Entity\Usuario $idusuario
     *
     * @return Factura
     */
    public function setIdusuario(\AppBundle\Entity\Usuario $idusuario = null)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get idusuario
     *
     * @return \AppBundle\Entity\Usuario
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }
}
