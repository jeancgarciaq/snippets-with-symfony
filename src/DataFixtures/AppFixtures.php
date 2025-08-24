<?php

namespace App\DataFixtures;

use App\Factory\CommentFactory;
use App\Factory\SnippetFactory;
use App\Factory\UserFactory;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
//use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    
    /*private UserPasswordHasherInterface $hasher;

    public function __construct(UserPasswordHasherInterface $hasher)
    {
        $this->hasher = $hasher;
    }*/

    public function load(ObjectManager $manager): void
    {
        //$user = new User();
        //$user->setName('Test User');
        //$user->setEmail('tuemail@test.com');
        //$password = $this->hasher->hashPassword($user, 'pass_1234');
        //$user->setPassword($password);

        UserFactory::createOne([
            'name' => 'usuario prueba',
            'email' => 'i@test.com',
            'password' => 'claveprueba',
        ]);

        UserFactory::createMany(8);
        SnippetFactory::createMany(50);
        CommentFactory::createMany(100);    

    }
}
