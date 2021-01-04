<?php


namespace App\DataFixtures;


use App\Entity\Reception;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ReceptionFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }

    public function load(ObjectManager $manager)
    {
        $user = new Reception();
        $user->setEmail("alicja@wp.pl");
        $user->setPassword($this->encoder->encodePassword($user, "alicja"));
        $manager->persist($user);

        $manager->flush();
    }
}