<?php
//
namespace Proyecto\CorrespondenciaBundle\Controller;
//
use Symfony\Component\HttpFoundation\Request;
//
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//
use Proyecto\CorrespondenciaBundle\Entity\CorrespondenciaRecibidaInterna;
//
use Proyecto\CorrespondenciaBundle\Form\CorrespondenciaRecibidaInternaType;

/**
 * CorrespondenciaRecibidaInterna controller.
 *
 */
class CorrespondenciaRecibidaInternaController extends Controller
{
    /**
     * Lists all CorrespondenciaRecibidaInterna entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('CorrespondenciaBundle:CorrespondenciaRecibidaInterna')->findAll();

        return $this->render('CorrespondenciaBundle:CorrespondenciaRecibidaInterna:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a CorrespondenciaRecibidaInterna entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorrespondenciaBundle:CorrespondenciaRecibidaInterna')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CorrespondenciaRecibidaInterna entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorrespondenciaBundle:CorrespondenciaRecibidaInterna:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new CorrespondenciaRecibidaInterna entity.
     *
     */
    public function newAction()
    {
        $entity = new CorrespondenciaRecibidaInterna();
        $form   = $this->createForm(new CorrespondenciaRecibidaInternaType(), $entity);

        return $this->render('CorrespondenciaBundle:CorrespondenciaRecibidaInterna:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new CorrespondenciaRecibidaInterna entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new CorrespondenciaRecibidaInterna();
        $form = $this->createForm(new CorrespondenciaRecibidaInternaType(), $entity);
        $form->bind($request);

        if ($form->isValid()) 
        {
            $em = $this->getDoctrine()->getManager();
           
            $entity->setDocumento($entity->getArchivoDocumento());            
            if($entity->getDocumento()!='')
            {
                $entity->uploadDocument($this->container->getParameter('directory_documentos_correspondencia'));                      
            }
            
            
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('recibidainterna_show', array('id' => $entity->getId())));
        }

        return $this->render('CorrespondenciaBundle:CorrespondenciaRecibidaInterna:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing CorrespondenciaRecibidaInterna entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorrespondenciaBundle:CorrespondenciaRecibidaInterna')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CorrespondenciaRecibidaInterna entity.');
        }

        $editForm = $this->createForm(new CorrespondenciaRecibidaInternaType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('CorrespondenciaBundle:CorrespondenciaRecibidaInterna:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing CorrespondenciaRecibidaInterna entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('CorrespondenciaBundle:CorrespondenciaRecibidaInterna')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find CorrespondenciaRecibidaInterna entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CorrespondenciaRecibidaInternaType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('recibidainterna_edit', array('id' => $id)));
        }

        return $this->render('CorrespondenciaBundle:CorrespondenciaRecibidaInterna:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a CorrespondenciaRecibidaInterna entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('CorrespondenciaBundle:CorrespondenciaRecibidaInterna')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find CorrespondenciaRecibidaInterna entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('recibidainterna'));
    }
    /**
     * 
     * @param type $id
     * @return type
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
