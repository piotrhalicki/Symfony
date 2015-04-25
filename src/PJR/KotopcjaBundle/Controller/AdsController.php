<?php

namespace PJR\KotopcjaBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use PJR\KotopcjaBundle\Entity\Ads;
use PJR\KotopcjaBundle\Form\AdsType;

/**
 * Ads controller.
 *
 * @Route("/ads")
 */
class AdsController extends Controller
{

    /**
     * Lists all Ads entities.
     *
     * @Route("/", name="ads")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('PJRKotopcjaBundle:Ads')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new Ads entity.
     *
     * @Route("/", name="ads_create")
     * @Method("POST")
     * @Template("PJRKotopcjaBundle:Ads:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Ads();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ads_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Ads entity.
     *
     * @param Ads $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Ads $entity)
    {
        $form = $this->createForm(new AdsType(), $entity, array(
            'action' => $this->generateUrl('ads_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Ads entity.
     *
     * @Route("/new", name="ads_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Ads();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a Ads entity.
     *
     * @Route("/{id}", name="ads_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PJRKotopcjaBundle:Ads')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ads entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Ads entity.
     *
     * @Route("/{id}/edit", name="ads_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PJRKotopcjaBundle:Ads')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ads entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Ads entity.
    *
    * @param Ads $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Ads $entity)
    {
        $form = $this->createForm(new AdsType(), $entity, array(
            'action' => $this->generateUrl('ads_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Ads entity.
     *
     * @Route("/{id}", name="ads_update")
     * @Method("PUT")
     * @Template("PJRKotopcjaBundle:Ads:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('PJRKotopcjaBundle:Ads')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Ads entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('ads_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a Ads entity.
     *
     * @Route("/{id}", name="ads_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('PJRKotopcjaBundle:Ads')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Ads entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('ads'));
    }

    /**
     * Creates a form to delete a Ads entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('ads_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
