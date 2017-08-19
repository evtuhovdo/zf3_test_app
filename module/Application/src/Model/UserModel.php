<?php

namespace Application\Model;

use Doctrine\ORM\EntityManager;

class UserModel
{
    /** @var EntityManager */
    protected $entityManager;

    /**
     * UserModel constructor.
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @return EntityManager
     */
    private function getEntityManager(): EntityManager
    {
        return $this->entityManager;
    }

    public function getAllUsers() {
        $em = $this->getEntityManager();

        $rUser = $em->getRepository('Application\Entity\User');

        return $rUser->findAll();
    }
}