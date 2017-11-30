<?php

namespace EventBundle\DataFixtures\ORM;

use EventBundle\Entity\Event;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LoadEvents extends Fixture {

    public function load(ObjectManager $manager) {
        $event = new Event();
        $event->setName("Ulet");
        $event->setLocation("Blava");
        $event->setTime(new \DateTime("tomorrow noon"));
        $event->setDetails("Symfony se robiiiii!");
        $manager->persist($event);
        
         $event2 = new Event();
        $event2->setName("Pokracovani");
        $event2->setLocation("Blava");
        $event2->setTime(new \DateTime("tomorrow noon"));
        $event2->setDetails("Symfony jedeeee!@");
        $manager->persist($event2);

        $manager->flush();
    }

}
