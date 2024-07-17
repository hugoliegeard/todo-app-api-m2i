<?php

namespace App\DataFixtures;

use App\Entity\Task;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $task1 = new Task();
        $task1->setName('Promener le chien');
        $task1->setStatus(false);

        $task2 = new Task();
        $task2->setName('Aller au salon de massage');
        $task2->setStatus(false);

        $task3 = new Task();
        $task3->setName('Faire les courses');
        $task3->setStatus(false);

        $task4 = new Task();
        $task4->setName('Finir le cahier des charges');
        $task4->setStatus(true);

        $task5 = new Task();
        $task5->setName('Choisir un premier ministre');
        $task5->setStatus(false);

        $task6 = new Task();
        $task6->setName('Aller à la salle de sport');
        $task6->setStatus(true);

        $manager->persist($task1);
        $manager->persist($task2);
        $manager->persist($task3);
        $manager->persist($task4);
        $manager->persist($task5);
        $manager->persist($task6);

        $manager->flush();
    }
}
