<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleFactura
 *
 * @ORM\Table(name="detalle_factura", indexes={@ORM\Index(name="fk_detalle_factura_factura1_idx", columns={"idFactura"}), @ORM\Index(name="fk_detalle_factura_producto1_idx", columns={"idProducto"})})
 * @ORM\Entity
 */
class DetalleFactura
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idDetalle_factura", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iddetalleFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="concepto", type="string", length=255, nullable=false)
     */
    private $concepto;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad", type="integer", nullable=false)
     */
    private $cantidad;

    /**
     * @var string
     *
     * @ORM\Column(name="precioUnidad", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $preciounidad;

    /**
     * @var integer
     *
     * @ORM\Column(name="impuesto", type="integer", nullable=false)
     */
    private $impuesto;

    /**
     * @var string
     *
     * @ORM\Column(name="total", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $total;

    /**
     * @var \AppBundle\Entity\Factura
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Factura")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFactura", referencedColumnName="idFactura")
     * })
     */
    private $idfactura;

    /**
     * @var \AppBundle\Entity\Producto
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Producto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idProducto", referencedColumnName="idProducto")
     * })
     */
    private $idproducto;



    /**
     * Get iddetalleFactura
     *
     * @return integer
     */
    public function getIddetalleFactura()
    {
        return $this->iddetalleFactura;
    }

    /**
     * Set concepto
     *
     * @param string $concepto
     *
     * @return DetalleFactura
     */
    public function setConcepto($concepto)
    {
        $this->concepto = $concepto;

        return $this;
    }

    /**
     * Get concepto
     *
     * @return string
     */
    public function getConcepto()
    {
        return $this->concepto;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return DetalleFactura
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return integer
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * Set preciounidad
     *
     * @param string $preciounidad
     *
     * @return DetalleFactura
     */
    public function setPreciounidad($preciounidad)
    {
        $this->preciounidad = $preciounidad;

        return $this;
    }

    /**
     * Get preciounidad
     *
     * @return string
     */
    public function getPreciounidad()
    {
        return $this->preciounidad;
    }

    /**
     * Set impuesto
     *
     * @param integer $impuesto
     *
     * @return DetalleFactura
     */
    public function setImpuesto($impuesto)
    {
        $this->impuesto = $impuesto;

        return $this;
    }

    /**
     * Get impuesto
     *
     * @return integer
     */
    public function getImpuesto()
    {
        return $this->impuesto;
    }

    /**
     * Set total
     *
     * @param string $total
     *
     * @return DetalleFactura
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
     * Set idfactura
     *
     * @param \AppBundle\Entity\Factura $idfactura
     *
     * @return DetalleFactura
     */
    public function setIdfactura(\AppBundle\Entity\Factura $idfactura = null)
    {
        $this->idfactura = $idfactura;

        return $this;
    }

    /**
     * Get idfactura
     *
     * @return \AppBundle\Entity\Factura
     */
    public function getIdfactura()
    {
        return $this->idfactura;
    }

    /**
     * Set idproducto
     *
     * @param \AppBundle\Entity\Producto $idproducto
     *
     * @return DetalleFactura
     */
    public function setIdproducto(\AppBundle\Entity\Producto $idproducto = null)
    {
        $this->idproducto = $idproducto;

        return $this;
    }

    /**
     * Get idproducto
     *
     * @return \AppBundle\Entity\Producto
     */
    public function getIdproducto()
    {
        return $this->idproducto;
    }
}
