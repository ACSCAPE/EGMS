<?php

namespace App\DataFixtures;

use App\Entity\Admin;
use App\Entity\EscapeGame;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);
        for ($p = 0; $p < 10; $p++){


          for ($o = 0; $o < 10; $o++){
            $admin = new Admin();
            $admin->setFirstName('Jean Mi' . $o);
            $admin->setLastName('Chou');
            $admin->setEmail('jean-mi@mail.com');
            $admin->setPassword('azerty');
            $admin->setPseudo('JM');
            $manager->persist($admin);
          }

          $date_time = new \DateTime("2020-10-31 18:00:00");
          $date_time->setTime(18, 00);

          $duration = new \DateTime();
          $duration->setTime(00, 60);


          $eg = new EscapeGame();
          $eg->setTitle('Perdu dans la forêt' .$p);
          $eg->setNumberMin(2);
          $eg->setNumberMax(8);
          $eg->setPublic('public');
          $eg->setExcerpt('Ceci est un extrait');
          $eg->setSolution('Ceci est une solution');
          $eg->setDuration($duration);
          $eg->setDateTime($date_time);
          $eg->setCategoryName('Horreur');
          $eg->setCategoryColor('black');
          $eg->setCategoryFont('Arial');
          $eg->setResumeText('Ceci est un resume');
          $eg->setResumeImage('img-resume.jpg');
          $eg->setIntroductionText('Ceci est une introduction');
          $eg->setIntroductionImage('img-intro.jpg');
          $eg->setInstructionsText('ceci est des instructions');
          $eg->setInstructionsImage('img-intro.jpg');
          $eg->setHappyEndText('Fin joyeuse');
          $eg->setHappyEndImage('img-he.jpg');
          $eg->setGameOverText('ceci est une game over');
          $eg->setGameOverImage('img-go.jpg');


          $manager->persist($eg);

      }
      $manager->flush();
    }
}
