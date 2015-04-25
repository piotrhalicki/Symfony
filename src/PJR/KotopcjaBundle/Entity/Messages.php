<?php

namespace PJR\KotopcjaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Messages
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="PJR\KotopcjaBundle\Entity\MessagesRepository")
 */
class Messages
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
     * @ORM\Column(name="message_from", type="text")
     */
    private $messageFrom;

    /**
     * @var string
     *
     * @ORM\Column(name="message_to", type="string", length=255)
     */
    private $messageTo;

    /**
     * @var string
     *
     * @ORM\Column(name="message_contents", type="text")
     */
    private $messageContents;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="message_date", type="datetime")
     */
    private $messageDate;


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
     * Set messageFrom
     *
     * @param string $messageFrom
     * @return Messages
     */
    public function setMessageFrom($messageFrom)
    {
        $this->messageFrom = $messageFrom;

        return $this;
    }

    /**
     * Get messageFrom
     *
     * @return string 
     */
    public function getMessageFrom()
    {
        return $this->messageFrom;
    }

    /**
     * Set messageTo
     *
     * @param string $messageTo
     * @return Messages
     */
    public function setMessageTo($messageTo)
    {
        $this->messageTo = $messageTo;

        return $this;
    }

    /**
     * Get messageTo
     *
     * @return string 
     */
    public function getMessageTo()
    {
        return $this->messageTo;
    }

    /**
     * Set messageContents
     *
     * @param string $messageContents
     * @return Messages
     */
    public function setMessageContents($messageContents)
    {
        $this->messageContents = $messageContents;

        return $this;
    }

    /**
     * Get messageContents
     *
     * @return string 
     */
    public function getMessageContents()
    {
        return $this->messageContents;
    }

    /**
     * Set messageDate
     *
     * @param \DateTime $messageDate
     * @return Messages
     */
    public function setMessageDate($messageDate)
    {
        $this->messageDate = $messageDate;

        return $this;
    }

    /**
     * Get messageDate
     *
     * @return \DateTime 
     */
    public function getMessageDate()
    {
        return $this->messageDate;
    }
}
