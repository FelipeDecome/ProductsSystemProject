<?php

namespace FelipeDecome\ProductSystem\Entity\Product;

// use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="category")
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @var int
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     * @var string
     */
    private $nome;
    /**
     * @Column(type="integer")
     * @ORM\OneToMany(targetEntity="Product", mappedBy="category")
     * @var int
     */
    private $products;

    public function __construct(string $name)
    {
        
    }
}
