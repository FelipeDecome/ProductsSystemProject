<?php

namespace FelipeDecome\ProductSystem\Entity\Clientes;

use Doctrine\Common\Collections\Collection;

/**
 * @Entity
 */
class Telefone
{

    /** 
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private $id;

    /** 
     * @Column(type="string")
     */
    private $numero;

    /** 
     * @ManyToOne(targetEntity="Cliente", inversedBy="telefones")
     */
    private $cliente;

    public function getId(): int
    {
        return $this->id;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function setNumero($numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function addCliente(Cliente $cliente): self
    {
        if ($this->cliente->contains($cliente)) {
            return $this;
        }

        $this->cliente = $cliente;
        $cliente->addTelefone($this);

        return $this;
    }

    public function getCliente(): Collection
    {
        return $this->cliente;
    }
}
