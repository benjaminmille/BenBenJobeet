<?php

namespace Ens\BenjaminBundle\Entity;

/**
 * CategoryAffiliate
 */
class CategoryAffiliate
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \Ens\BenjaminBundle\Entity\Category
     */
    private $category;

    /**
     * @var \Ens\BenjaminBundle\Entity\Affiliate
     */
    private $affiliate;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set category
     *
     * @param \Ens\BenjaminBundle\Entity\Category $category
     *
     * @return CategoryAffiliate
     */
    public function setCategory(\Ens\BenjaminBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \Ens\BenjaminBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set affiliate
     *
     * @param \Ens\BenjaminBundle\Entity\Affiliate $affiliate
     *
     * @return CategoryAffiliate
     */
    public function setAffiliate(\Ens\BenjaminBundle\Entity\Affiliate $affiliate = null)
    {
        $this->affiliate = $affiliate;

        return $this;
    }

    /**
     * Get affiliate
     *
     * @return \Ens\BenjaminBundle\Entity\Affiliate
     */
    public function getAffiliate()
    {
        return $this->affiliate;
    }
}

