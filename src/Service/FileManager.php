<?php

namespace AntonioTurdo\Bundle\FileBundle\Service;

/**
 * @author Antonio Turdo <antonio.turdo@gmail.com>
 */
interface FileManager {
    
    public function create(\CreationEvent $creationEvent);
}
