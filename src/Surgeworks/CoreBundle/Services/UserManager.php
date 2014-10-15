<?php
namespace Surgeworks\CoreBundle\Services;

use Doctrine\ORM\EntityManager;

class UserManager {

    /**
     * @var EntityManager $em
     */
    protected  $em;

    public function __construct(EntityManager $em){
        $this->em = $em;
    }

    /**
     * @param $roleName
     * @return array
     */
    public function findByRoleName($roleName){
        return $this->em->getRepository('SurgeworksCoreBundle:User')->loadUserByRoleName($roleName);
    }

} 