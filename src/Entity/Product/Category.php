<?php

namespace FelipeDecome\ProductSystem\Entity\Product;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @Entity
 * @Table(name="category")
 */
class Category
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     * @var int
     */
    private $id;
    /**
     * @Column(type="string")
     * @var string
     */
    private $name;
    /**
     * @OneToMany(targetEntity="Product", mappedBy="category")
     */
    private $products;

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getProducts(): Collection
    {
        return $this->products;
    }

    public function addProducts(Product $product): self
    {
        $this->products->add($product);
        $product->setCategory($this);

        return $this;
    }
}
