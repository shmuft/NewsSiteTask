<?php
/**
 * Created by PhpStorm.
 * User: ivan
 * Date: 07.12.16
 * Time: 22:54
 */

namespace Shmuft\NewsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * Class News
 * @package Shmuft\NewsBundle\Entity
 * @ORM\Entity(repositoryClass="Shmuft\NewsBundle\Entity\Repository\NewsRepository")
 * @ORM\Table(name="news")
 * @ORM\HasLifecycleCallbacks()
 * @UniqueEntity("slug", message="This title is already used")
 */
class News
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */

    protected $title;

    /**
     * @ORM\Column(type="text")
     */

    protected $body;

    /**
     * @ORM\Column(type="string")
     */
    protected $tags;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $created;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $updated;

    /**
     * @ORM\Column(type="string", unique=true)
     */
    protected $slug;


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
     * Set title
     *
     * @param string $title
     * @return News
     */
    public function setTitle($title)
    {
        $this->title = $title;
        $this->setSlug($this->title);

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
     * Set body
     *
     * @param string $body
     * @return News
     */
    public function setBody($body)
    {
        $this->body = $body;

        return $this;
    }

    /**
     * Get body
     *
     * @return string
     */
    public function getBody($length = null)
    {
        if (false === is_null($length) && $length > 0) {
            return substr($this->body, 0, $length);
        } else {
            return $this->body;
        }
    }

    /**
     * Set tags
     *
     * @param string $tags
     * @return News
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set created
     *
     * @param \DateTime $created
     * @return News
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }

    /**
     * Get created
     *
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param \DateTime $updated
     * @return News
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * Get updated
     *
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param $text
     * @return mixed|string
     */
    public function slugify($text)
    {
        $text = preg_replace('#[^\\pL\d]+#u', '-', $text);

        $text = trim($text, '-');

        if (function_exists('iconv')) {
            $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        }

        $text = strtolower($text);

        $text = preg_replace('#[^-\w]+#', '', $text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

    /**
     * Set slug
     *
     * @param string $slug
     *
     */
    public function setSlug($slug)
    {
        $this->slug = $this->slugify($slug);
    }

    /**
     * Get slug
     *
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('title', new NotBlank(array(
            'message' => 'You must add Title',
        )));
        $metadata->addPropertyConstraint('body', new Length(array('min' => 50)));
        $metadata->addPropertyConstraint('tags', new NotBlank(array(
            'message' => 'You must add tags',
        )));
    }

    public function __construct()
    {
        $this->setCreated(new \DateTime());
        $this->setUpdated(new \DateTime());
    }

    public function setUpdatedValue(){
        $this->setUpdated(new \DateTime());
    }
}
