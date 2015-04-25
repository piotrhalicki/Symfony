<?php

namespace PJR\KotopcjaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comments
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PJR\KotopcjaBundle\Entity\CommentsRepository")
 */
class Comments
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
     * @ORM\Column(name="comment_from", type="string", length=255)
     */
    private $commentFrom;

    /**
     * @var integer
     *
     * @ORM\Column(name="comment_post_id", type="integer")
     */
    private $commentPostId;

    /**
     * @var string
     *
     * @ORM\Column(name="comment_contents", type="text")
     */
    private $commentContents;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="comment_date", type="datetime")
     */
    private $commentDate;


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
     * Set commentFrom
     *
     * @param string $commentFrom
     * @return Comments
     */
    public function setCommentFrom($commentFrom)
    {
        $this->commentFrom = $commentFrom;

        return $this;
    }

    /**
     * Get commentFrom
     *
     * @return string 
     */
    public function getCommentFrom()
    {
        return $this->commentFrom;
    }

    /**
     * Set commentPostId
     *
     * @param integer $commentPostId
     * @return Comments
     */
    public function setCommentPostId($commentPostId)
    {
        $this->commentPostId = $commentPostId;

        return $this;
    }

    /**
     * Get commentPostId
     *
     * @return integer 
     */
    public function getCommentPostId()
    {
        return $this->commentPostId;
    }

    /**
     * Set commentContents
     *
     * @param string $commentContents
     * @return Comments
     */
    public function setCommentContents($commentContents)
    {
        $this->commentContents = $commentContents;

        return $this;
    }

    /**
     * Get commentContents
     *
     * @return string 
     */
    public function getCommentContents()
    {
        return $this->commentContents;
    }

    /**
     * Set commentDate
     *
     * @param \DateTime $commentDate
     * @return Comments
     */
    public function setCommentDate($commentDate)
    {
        $this->commentDate = $commentDate;

        return $this;
    }

    /**
     * Get commentDate
     *
     * @return \DateTime 
     */
    public function getCommentDate()
    {
        return $this->commentDate;
    }
}
