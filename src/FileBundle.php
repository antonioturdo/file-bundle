<?php

namespace AntonioTurdo\Bundle\FileBundle;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Description of FileBundle
 *
 * @author Antonio Turdo <antonio.turdo@gmail.com>
 */
class FileBundle extends Bundle
{
    /**
     * @param ContainerBuilder $container
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);
    }
}
