<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;
use FelipeDecome\ProductSystem\Helper\EntityManagerFactory;

require __DIR__ . '/bootstrap.php';

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

return ConsoleRunner::createHelperSet($entityManager);
