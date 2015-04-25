<?php

namespace PJR\KotopcjaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pictures
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PJR\KotopcjaBundle\Entity\PicturesRepository")
 */
class Pictures
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
     * @ORM\Column(name="picture_path", type="string", length=255)
     */
    private $picturePath;

    /**
     * @var integer
     *
     * @ORM\Column(name="picture_ad_id", type="integer")
     */
    private $pictureAdId;


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
     * Set picturePath
     *
     * @param string $picturePath
     * @return Pictures
     */
    public function setPicturePath($picturePath)
    {
        $this->picturePath = $picturePath;

        return $this;
    }

    /**
     * Get picturePath
     *
     * @return string 
     */
    public function getPicturePath()
    {
        return $this->picturePath;
    }

    /**
     * Set pictureAdId
     *
     * @param integer $pictureAdId
     * @return Pictures
     */
    public function setPictureAdId($pictureAdId)
    {
        $this->pictureAdId = $pictureAdId;

        return $this;
    }

    /**
     * Get pictureAdId
     *
     * @return integer 
     */
    public function getPictureAdId()
    {
        return $this->pictureAdId;
    }
}
