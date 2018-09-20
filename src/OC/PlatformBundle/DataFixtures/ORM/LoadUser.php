<?php

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use OC\PlatformBundle\Entity\User;

class LoadUser implements FixtureInterface
{
    public function load(ObjectManager $obj)
    {
        $user = new User();
        $user->setUsername('Romaric');
        $user->setPassword('password');
        $user->setRoles('Roles');

        $obj->persist($user);
        $obj->flush();

        $user2 = new User();
        $user2->setUsername('Romaric2');
        $user2->setPassword('password');
        $user2->setRoles('Roles');

        $obj->persist($user2);
        $obj->flush();

        $user3 = new User();
        $user3->setUsername('Romaric 34');
        $user3->setPassword('mypwd');
        $user3->setRoles('Roles');

        $obj->persist();
        $obj->flush();
    }
}
