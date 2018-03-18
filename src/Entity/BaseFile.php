<?php

namespace AntonioTurdo\Bundle\FileBundle\Entity;

use AntonioTurdo\Bundle\FileBundle\Model\File;

/**
 * Description of BaseFile
 *
 * @author Antonio Turdo <antonio.turdo@gmail.com>
 */
class BaseFile extends File {
    
    /**
     * @var mixed
     */
    protected $id;    
    
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

}
