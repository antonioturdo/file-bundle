<?php

namespace AntonioTurdo\Bundle\FileBundle\Model;

/**
 * Description of File
 *
 * @author Antonio Turdo <antonio.turdo@gmail.com>
 */
abstract class File implements FileInterface {
    
    /**
     * @var string
     */
    protected $name;
    
    /**
     * @var string
     */
    protected $mimeType;
        
    /**
     * @var int
     */
    protected $size;
    
    /**
     * @var string
     */
    protected $hash;
    
    /**
     * @var \DateTime
     */
    protected $createdAt;
    
    /**
     * @var \DateTime
     */
    protected $updatedAt;
    
    public function prePersist()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }
    
    public function preUpdate()
    {
        $this->updatedAt = new \DateTime();
    }    
    
    public function getName() {
        return $this->name;
    }

    public function getMimeType() {
        return $this->mimeType;
    }

    public function getSize() {
        return $this->size;
    }

    public function getHash() {
        return $this->hash;
    }

    public function getCreatedAt() {
        return $this->createdAt;
    }

    public function getUpdatedAt() {
        return $this->updatedAt;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setMimeType($mimeType) {
        $this->mimeType = $mimeType;
        return $this;
    }

    public function setSize($size) {
        $this->size = $size;
        return $this;
    }

    public function setHash($hash) {
        $this->hash = $hash;
        return $this;
    }

    public function setCreatedAt(\DateTime $createdAt) {
        $this->createdAt = $createdAt;
        return $this;
    }

    public function setUpdatedAt(\DateTime $updatedAt) {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    
}
