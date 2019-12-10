<?php

namespace FelipeDecome\ProductSystem\Helper;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Setup;
use FelipeDecome\ProductSystem\config\ProjectConfig;

class EntityManagerFactory
{
    /** @return EntityManagerInterface */
    public function getEntityManager(): EntityManagerInterface
    {
        $rootDir = __DIR__ . '/../../';
        $config = Setup::createAnnotationMetadataConfiguration(
            [$rootDir . 'src'],
            ProjectConfig::DEV_MODE
        );
        $connection = [
            'driver' = '',
            'path' = $rootDir . 'var/data/database.sqlite'
        ];

        return EntityManager::create($connection, $config);
    }
}
