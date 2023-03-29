<?php

namespace App\DataFixtures;

use DateTime;
use App\Entity\MicroPost;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $user1 = new User();
        // $user1->setEmail('test@test.com');
        // $user1->setPassword(
        //     $this->userPasswordHasher->hashPassword(
        //         $user1,
        //         '12345678'
        //     ));
        // $manager->persist($user1);

        // $user2 = new User();
        // $user2->setEmail('john@test.com');
        // $user2->setPassword(
        //     $this->userPasswordHasher->hashPassword(
        //         $user2,
        //         '12345678'
        //     ));
        // $manager->persist($user2);

        $microPost1 = new MicroPost();
        $microPost1->setTitle('First Post');
        $microPost1->setText('Lorem ipsum firstum Lorem ipsum firstum Lorem ipsum firstum Lorem ipsum firstum Lorem ipsum firstum Lorem ipsum firstum Lorem ipsum firstum.');
        $microPost1->setCreated(new DateTime());
        //$microPost1->setAuthor($user1);
        $manager->persist($microPost1);

        $microPost2 = new MicroPost();
        $microPost2->setTitle('Second Post');
        $microPost2->setText('Lorem ipsum secundum Lorem ipsum secundum Lorem ipsum secundum Lorem ipsum secundum Lorem ipsum secundum Lorem ipsum secundum Lorem ipsum secundum.');
        $microPost2->setCreated(new DateTime());
        //$microPost2->setAuthor($user1);
        $manager->persist($microPost2);

        $microPost3 = new MicroPost();
        $microPost3->setTitle('Third Post');
        $microPost3->setText('Lorem ipsum tertium Lorem ipsum tertium Lorem ipsum tertium Lorem ipsum tertium Lorem ipsum tertium Lorem ipsum tertium Lorem ipsum tertium.');
        $microPost3->setCreated(new DateTime());
        //$microPost3->setAuthor($user2);
        $manager->persist($microPost3);

        $manager->flush();
    }
}
