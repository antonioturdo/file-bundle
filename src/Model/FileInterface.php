<?php

namespace AntonioTurdo\Bundle\FileBundle\Model;

/**
 * Description of FileInterface
 *
 * @author Antonio Turdo <antonio.turdo@gmail.com>
 */
interface FileInterface {
    
    /**
     * @param string $name
     */
    public function setName($name);

    /**
     * @return string Name of the file 
     */
    public function getName();
    
    /**
     * @param string $mimeType
     */
    public function setMimeType($mimeType);
    
    /**
     * @return string Mime type of the file 
     */
    public function getMimeType();
    
    /**
     * @param int $size
     */
    public function setSize($size);

    /**
     * @return int Size of the file in bytes
     */
    public function getSize();
    
    /**
     * @param string $hash
     */
    public function setHash($hash);
    
    /**
     * @return string Hash of the file
     */
    public function getHash();
    
    /**
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt);
    
    /**
     * @return \Datetime $createdAt
     */
    public function getCreatedAt();
    
    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt);
    
    /**
     * @return \Datetime $updatedAt
     */
    public function getUpdatedAt();

    
}
