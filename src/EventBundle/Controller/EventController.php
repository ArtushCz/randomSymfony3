<?php

namespace EventBundle\Controller;

use EventBundle\Entity\Event;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Event controller.
 *
 */
class EventController extends Controller {

    /**
     * @Template()
     * Lists all event entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();
        
        $events = $em->getRepository('EventBundle:Event')->findAll();

        return array(
            'events' => $events,
        );
    }

    /**
     *  @Template()
     * Creates a new event entity.
     *
     */
    public function newAction(Request $request) {


        $this->enforceUserSecurity();

        $event = new Event();
        $form = $this->createForm('EventBundle\Form\EventType', $event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();

            return $this->redirectToRoute('event_show', array('id' => $event->getId()));
        }

        return array(
            'event' => $event,
            'form' => $form->createView(),
        );
    }

    /**
     * @Template()
     * Finds and displays a event entity.
     *
     */
    public function showAction(Event $event) {
        $deleteForm = $this->createDeleteForm($event);

        return array(
            'event' => $event,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     *  @Template()
     * Displays a form to edit an existing event entity.
     *
     */
    public function editAction(Request $request, Event $event) {
        $this->enforceUserSecurity();
        $deleteForm = $this->createDeleteForm($event);
        $editForm = $this->createForm('EventBundle\Form\EventType', $event);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('event_edit', array('id' => $event->getId()));
        }

        return array(
            'event' => $event,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a event entity.
     *
     */
    public function deleteAction(Request $request, Event $event) {
        enforceUserSecurity();
        $form = $this->createDeleteForm($event);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($event);
            $em->flush();
        }

        return $this->redirectToRoute('event_index');
    }

    /**
     * Creates a form to delete a event entity.
     *
     * @param Event $event The event entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Event $event) {
        
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('event_delete', array('id' => $event->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

   /**
    * 
    * @throws bad login role
    */
    private function enforceUserSecurity() {
        if (false === $this->get('security.authorization_checker')->isGranted('ROLE_ADMIN')) {
            throw $this->createAccessDeniedException("Need ROLE_ADMIN");
        }
    }

}
