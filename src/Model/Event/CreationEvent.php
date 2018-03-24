<?php

namespace AntonioTurdo\Bundle\FileBundle\Model\Event;

/**
 * Description of Creationevent
 *
 * @author Antonio Turdo <antonio.turdo@gmail.com>
 */
class CreationEvent {
    
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
    protected $creationTime;

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

    public function getCreationTime() {
        return $this->creationTime;
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

    public function setCreationTime(\DateTime $creationTime) {
        $this->creationTime = $creationTime;
        return $this;
    }

}
