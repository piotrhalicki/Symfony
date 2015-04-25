<?php

namespace PJR\KotopcjaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ads
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PJR\KotopcjaBundle\Entity\AdsRepository")
 */
class Ads
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="ad_title", type="string", length=255)
     */
    private $adTitle;

    /**
     * @var string
     *
     * @ORM\Column(name="ad_contents", type="text")
     */
    private $adContents;

    /**
     * @var integer
     *
     * @ORM\Column(name="ad_picture_id", type="integer")
     */
    private $adPictureId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="ad_date", type="datetime")
     */
    private $adDate;


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
     * Set adTitle
     *
     * @param string $adTitle
     * @return Ads
     */
    public function setAdTitle($adTitle)
    {
        $this->adTitle = $adTitle;

        return $this;
    }

    /**
     * Get adTitle
     *
     * @return string 
     */
    public function getAdTitle()
    {
        return $this->adTitle;
    }

    /**
     * Set adContents
     *
     * @param string $adContents
     * @return Ads
     */
    public function setAdContents($adContents)
    {
        $this->adContents = $adContents;

        return $this;
    }

    /**
     * Get adContents
     *
     * @return string 
     */
    public function getAdContents()
    {
        return $this->adContents;
    }

    /**
     * Set adPictureId
     *
     * @param integer $adPictureId
     * @return Ads
     */
    public function setAdPictureId($adPictureId)
    {
        $this->adPictureId = $adPictureId;

        return $this;
    }

    /**
     * Get adPictureId
     *
     * @return integer 
     */
    public function getAdPictureId()
    {
        return $this->adPictureId;
    }

    /**
     * Set adDate
     *
     * @param \DateTime $adDate
     * @return Ads
     */
    public function setAdDate($adDate)
    {
        $this->adDate = $adDate;

        return $this;
    }

    /**
     * Get adDate
     *
     * @return \DateTime 
     */
    public function getAdDate()
    {
        return $this->adDate;
    }
}
