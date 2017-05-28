<?php

namespace CA\CommerceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="CA\CommerceBundle\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\ManyToOne(targetEntity="CA\CommerceBundle\Entity\User")
     * @ORM\JoinColumn(onDelete="SET NULL")
     */
    private $user;

    /**
     * @ORM\ManyToOne(targetEntity="CA\CommerceBundle\Entity\Category")
     * @ORM\JoinColumn(onDelete="SET NULL")
     */
    private $category;

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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var text
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="pricestart", type="integer")
     */
    private $pricestart;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer")
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="buyout", type="integer", nullable=true)
     */
    private $buyout = null;

    /**
     * @var \Date
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endingdate", type="datetime")
     */
    private $endingdate;


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
     * Set name
     *
     * @param string $name
     *
     * @return Product
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set price
     *
     * @param integer $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set user
     *
     * @param \CA\CommerceBundle\Entity\User $user
     *
     * @return Product
     */
    public function setUser(\CA\CommerceBundle\Entity\User $user)
    {
        $this->user = $user;
        return $this;
    }
    /**
     * Get user
     *
     * @return \CA\CommerceBundle\Entity\User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set category
     *
     * @param \CA\CommerceBundle\Entity\Category $category
     *
     * @return Product
     */
    public function setCategory(\CA\CommerceBundle\Entity\Category $category)
    {
        $this->category = $category;
        return $this;
    }
    /**
     * Get category
     *
     * @return \CA\CommerceBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set pricestart
     *
     * @param integer $pricestart
     *
     * @return Product
     */
    public function setPricestart($pricestart)
    {
        $this->pricestart = $pricestart;

        return $this;
    }

    /**
     * Get pricestart
     *
     * @return integer
     */
    public function getPricestart()
    {
        return $this->pricestart;
    }

    /**
     * Set buyout
     *
     * @param integer $buyout
     *
     * @return Product
     */
    public function setBuyout($buyout)
    {
        $this->buyout = $buyout;

        return $this;
    }

    /**
     * Get buyout
     *
     * @return integer
     */
    public function getBuyout()
    {
        return $this->buyout;
    }

    /**
     * Set endingdate
     *
     * @param \DateTime $endingdate
     *
     * @return Product
     */
    public function setEndingdate($endingdate)
    {
        $this->endingdate = $endingdate;

        return $this;
    }

    /**
     * Get endingdate
     *
     * @return \DateTime
     */
    public function getEndingdate()
    {
        return $this->endingdate;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Product
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}
