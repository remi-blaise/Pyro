<?php

namespace Zz\PyroBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Zz\PyroBundle\Constraints;
use Symfony\Component\Validator\ExecutionContextInterface;

/**
 * Video
 *
 * @ORM\Table("zz_pyro_video")
 * @ORM\Entity(repositoryClass="Zz\PyroBundle\Entity\VideoRepository")
 * @Constraints\VideoUnique
 */
class Video
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string")
     * @ORM\Id
     * @Assert\Type("string")
     * @Assert\NotBlank
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="publishedAt", type="datetime")
     * @Assert\DateTime
     * @Assert\NotBlank
     */
    private $publishedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     * @Assert\Type("string")
     * @Assert\NotBlank
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="thumbnail", type="string", length=255)
     * @Assert\Url
     * @Assert\NotBlank
     */
    private $thumbnail;

    /**
     * @var \DateInterval
     *
     * @ORM\Column(name="duration", type="string")
     * @Assert\Regex("#^P(?:\d+[YDM])*(?:T(?:\d+[HMS])*)$#")
     * @Assert\NotBlank
     */
    private $duration;


    /**
     * Get id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    
    public function setId( $id )
    {
        $this->id = $id;
    }

    /**
     * Set publishedAt
     *
     * @param \DateTime $publishedAt
     *
     * @return Video
     */
    public function setPublishedAt($publishedAt)
    {
        $this->publishedAt = $publishedAt;

        return $this;
    }

    /**
     * Get publishedAt
     *
     * @return \DateTime
     */
    public function getPublishedAt()
    {
        return $this->publishedAt;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Video
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set thumbnail
     *
     * @param string $thumbnail
     *
     * @return Video
     */
    public function setThumbnail($thumbnail)
    {
        $this->thumbnail = $thumbnail;

        return $this;
    }

    /**
     * Get thumbnail
     *
     * @return string
     */
    public function getThumbnail()
    {
        return $this->thumbnail;
    }

    /**
     * Set duration
     *
     * @param string $duration
     *
     * @return Video
     */
    public function setDuration( $duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return string
     */
    public function getDuration()
    {
        return $this->duration;
    }
}

