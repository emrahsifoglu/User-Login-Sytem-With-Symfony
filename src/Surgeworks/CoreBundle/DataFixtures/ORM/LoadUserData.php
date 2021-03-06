<?php
/**
 * Created by PhpStorm.
 * User: Emrah
 * Date: 03.10.2014
 * Time: 13:12
 */

namespace Surgeworks\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Surgeworks\CoreBundle\Entity\User;
use Symfony\Component\Security\Core\Encoder\MessageDigestPasswordEncoder;

class LoadUserData implements FixtureInterface, ContainerAwareInterface
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
        $user = new User();
        $user->setFirstName("user");
        $user->setLastName("name");
        $user->setUsername("user");
        $user->setSalt(md5(uniqid()));
        $encoder = new MessageDigestPasswordEncoder('sha1', false, 1);
        $user->setPassword($encoder->encodePassword('green', $user->getSalt()));
        $user->setEmail("user@mail.com");
        $user->setIsActive(true);

        $admin = new User();
        $admin->setFirstName("admin");
        $admin->setLastName("name ");
        $admin->setUsername("admin");
        $admin->setSalt(md5(uniqid()));
        $encoder = new MessageDigestPasswordEncoder('sha1', false, 1);
        $admin->setPassword($encoder->encodePassword('blue', $admin->getSalt()));
        $admin->setEmail("admin@mail.com");
        $admin->setIsActive(true);

        $manager->persist($user);
        $manager->persist($admin);
        $manager->flush();
    }
}