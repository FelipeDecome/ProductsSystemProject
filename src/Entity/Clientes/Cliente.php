<?php

namespace FelipeDecome\ProductSystem\Entity\Clientes;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

/**
 * @Entity
 */
class Cliente
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
    private $name;

    /** 
     * @OneToMany(targetEntity="Telefone", mappedBy="cliente")
     */
    private $telefones;

    private $endereco;

    public function __contruct()
    {
        $this->telefones = new ArrayCollection();
        $this->endereco = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }

    public function addTelefone(Telefone $telefone): self
    {

        if ($this->telefones->contains($telefone)) {
            return $this;
        }

        $this->telefones->add($telefone);
        $telefone->addCliente($this);

        return $this;
    }

    public function getTelefone(): Collection
    {
        return $this->telefones;
    }
}
