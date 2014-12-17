<?php

namespace Immobilier\BudgetBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Immobilier\BudgetBundle\Entity\BudgetGest;
use Immobilier\BudgetBundle\Form\BudgetGestType;

/**
 * BudgetGest controller.
 *
 * @Route("/budgetgest")
 */
class BudgetGestController extends Controller
{

    /**
     * Lists all BudgetGest entities.
     *
     * @Route("/", name="BudgetGest")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ImmobilierBudgetBundle:BudgetGest')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new BudgetGest entity.
     *
     * @Route("/", name="budgetgest_create")
     * @Method("POST")
     * @Template("ImmobilierBudgetBundle:BudgetGest:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new BudgetGest();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('budgetgest_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a BudgetGest entity.
     *
     * @param BudgetGest $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(BudgetGest $entity)
    {
        $form = $this->createForm(new BudgetGestType(), $entity, array(
            'action' => $this->generateUrl('budgetgest_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new BudgetGest entity.
     *
     * @Route("/new", name="budgetgest_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new BudgetGest();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a BudgetGest entity.
     *
     * @Route("/{id}", name="budgetgest_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImmobilierBudgetBundle:BudgetGest')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BudgetGest entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing BudgetGest entity.
     *
     * @Route("/{id}/edit", name="budgetgest_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImmobilierBudgetBundle:BudgetGest')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BudgetGest entity.');
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
    * Creates a form to edit a BudgetGest entity.
    *
    * @param BudgetGest $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(BudgetGest $entity)
    {
        $form = $this->createForm(new BudgetGestType(), $entity, array(
            'action' => $this->generateUrl('budgetgest_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing BudgetGest entity.
     *
     * @Route("/{id}", name="budgetgest_update")
     * @Method("PUT")
     * @Template("ImmobilierBudgetBundle:BudgetGest:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImmobilierBudgetBundle:BudgetGest')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find BudgetGest entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('budgetgest_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a BudgetGest entity.
     *
     * @Route("/{id}", name="budgetgest_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ImmobilierBudgetBundle:BudgetGest')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find BudgetGest entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('budgetgest'));
    }

    /**
     * Creates a form to delete a BudgetGest entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('budgetgest_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
