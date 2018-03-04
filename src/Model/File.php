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
     * @var mixed 
     */
    protected $binaryContent;

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
        $this->setCreatedAt(new \DateTime());
        $this->setUpdatedAt(new \DateTime());
    }
    
    public function preUpdate()
    {
        $this->setUpdatedAt(new \DateTime());
    }    
    
}
