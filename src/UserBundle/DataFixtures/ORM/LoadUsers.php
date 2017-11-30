<?php

namespace UserBundle\DataFixtures\ORM;

use UserBundle\Entity\User;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class LoadUsers implements FixtureInterface, ContainerAwareInterface {

    /**
     *
     * @var ContainerInterface
     */
    private $container;

    public function load(ObjectManager $manager) {
        $user = new User();
        $user->setUsername('user');
        $user->setEmail('user@eshop.cz');

        $user->setPassword($this->encodePassword($user, 'userpass'));
        $manager->persist($user);

        $admin = new User();
        $admin->setUsername('admin');
        $admin->setEmail('admin@eshop.cz');
        $admin->setPassword($this->encodePassword($admin, 'adminpass'));
        $admin->setRoles(array('ROLE_ADMIN'));
        $manager->persist($admin);

        $manager->flush();
    }

    private function encodePassword(User $user, $plainPassword) {
        $encoder = $this->container->get('security.encoder_factory')->getEncoder($user);

        return $encoder->encodePassword($plainPassword, $user->getSalt());
    }

    public function setContainer(ContainerInterface $container = null) {
        $this->container = $container;
    }

}
