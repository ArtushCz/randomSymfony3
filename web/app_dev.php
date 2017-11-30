<?php

use Symfony\Component\Debug\Debug;
use Symfony\Component\HttpFoundation\Request;


require __DIR__.'/../vendor/autoload.php';
Debug::enable();

$kernel = new AppKernel('dev', true);
#$kernel->loadClassCache();
$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);

$container = $kernel->getContainer();

#use EventBundle\Entity\Event;

#$event = new Event();
#$event->setName("jmeno akce");
#$event->setLocation("Blava");
#$event->setTime(new \DateTime("tomorrow noon"));
#$event->setDetails("Kokotina");

#$em = $container->get('doctrine')->getManager();
#$em->persist($event);
#$em->flush();