<?php

namespace App\DataFixtures;

use Faker\Factory;
use Faker\Generator;
use App\Entity\Utilisateur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class UserFixtures extends Fixture
{
    private $faker;
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 20; $i++) {

            $faker = Factory::create('fr_FR');
            $user = new Utilisateur();

            $user->setEmail($faker->email);

            $password = $this->encoder->encodePassword($user, 'pass_1234');
            $user->setPassword($password);

            $user->setNom($faker->lastName);
            $user->setPrenom($faker->firstName);

            $user->setCin('FH11 ' . $i);

            $user->setDateInscription(new \DateTime());

            $user->setAvatar('98eb352278de8e612b4afce53854422d.jpeg');

            $user->setRoles('ROLE_ELEVE');

            $manager->persist($user);
        }
        $manager->flush();
    }
}
