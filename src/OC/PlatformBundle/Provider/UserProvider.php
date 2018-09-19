<?php

namespace OC\PlatformBundle\Provider;

use Symfony\Component\Security\Core\User\UserProviderInterface;
use Doctrine\ORM\EntityManager;
use OC\PlatformBundle\Provider\User;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;

class UserProvider implements UserProviderInterface {
    
    public function __construct(EntityManager $em) {
        $this->em = $em;
    }

    public function loadUserByUsername($username) {
      $admin =  $this->em->getRepository('OCPlatformBundle:User')
                    ->findOneBy(array(
                'username' => $username
                ));
          if($admin)
          {      
            return new User($admin->getUserName(), $admin->getPassword(), '', ['ROLE_USER']);  
          }
           throw new UsernameNotFoundException(
            sprintf('Username "%s" does not exist.', $username)
        );
    }

    public function refreshUser(\Symfony\Component\Security\Core\User\UserInterface $user) {
          return $this->loadUserByUsername($user->getUsername());
    }

    public function supportsClass($class) {
        return true;
    }

}
