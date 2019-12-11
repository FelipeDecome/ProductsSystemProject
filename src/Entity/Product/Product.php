<?php

namespace FelipeDecome\ProductSystem\Entity\Product;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(nama="product")
 */
class Product
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
    private $name;
    /**
     * @ORM\Column(type="integer")
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="products")
     * @var int
     */
    private $category;
}
