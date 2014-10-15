<?php
/**
 * Created by PhpStorm.
 * User: Emrah
 * Date: 06.10.2014
 * Time: 14:59
 */

namespace Surgeworks\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Surgeworks\CoreBundle\Entity\Role;

class LoadRoleData implements FixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        var_dump('getting container here');
        $this->container = $container;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $user_role = new Role();
        $user_role->setName('user');
        $user_role->setRole('ROLE_USER');

        $admin_role = new Role();
        $admin_role->setName('admin');
        $admin_role->setRole('ROLE_ADMIN');

        $manager->persist($user_role);
        $manager->persist($admin_role);
        $manager->flush();

    }
} 