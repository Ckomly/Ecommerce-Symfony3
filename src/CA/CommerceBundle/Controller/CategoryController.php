<?php

namespace CA\CommerceBundle\Controller;

use CA\CommerceBundle\Entity\Category;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Category controller.
 *
 */
class CategoryController extends Controller
{
    /**
     * Lists all category entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categories = $em->getRepository('CACommerceBundle:Category')->findAll();

        return $this->render('category/index.html.twig', array(
            'categories' => $categories,
        ));
    }

    /**
     * Creates a new category entity.
     *
     */
    public function newAction(Request $request)
    {
        if(!$this->getUser()){
          return $this->render('CACommerceBundle:Session:login.html.twig', array(
              'last_username' => '',
              'error' => array('action' => 'create','entity' => 'category'),
          ));
        }

        $category = new Category();
        $form = $this->createForm('CA\CommerceBundle\Form\CategoryType', $category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $params = $request->request->get('ca_commercebundle_category');
            // l'attribut 'category' sera renvoyé sous la forme d'un objet.
            // on va donc recuperer uniquement l'id de l'objet renvoyé.
            $category->setCategory($params['category']);
            $em->persist($category);
            $em->flush();

            return $this->redirectToRoute('category_show', array('id' => $category->getId()));
        }

        return $this->render('category/new.html.twig', array(
            'category' => $category,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a category entity.
     *
     */
    public function showAction(Category $category)
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository('CACommerceBundle:Category')->findBy(array('category' => $category->getId()));
        $deleteForm = $this->createDeleteForm($category);

        return $this->render('category/show.html.twig', array(
            'categories' => $categories,
            'category' => $category,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing category entity.
     *
     */
    public function editAction(Request $request, Category $category)
    {
        if(!$this->getUser()){
          return $this->render('CACommerceBundle:Session:login.html.twig', array(
              'last_username' => '',
              'error' => array('action' => 'edit','entity' => 'category'),
          ));
        }

        $deleteForm = $this->createDeleteForm($category);
        $editForm = $this->createForm('CA\CommerceBundle\Form\CategoryType', $category);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('category_edit', array('id' => $category->getId()));
        }

        return $this->render('category/edit.html.twig', array(
            'category' => $category,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a category entity.
     *
     */
    public function deleteAction(Request $request, Category $category)
    {
        if(!$this->getUser()){
          return $this->render('CACommerceBundle:Session:login.html.twig', array(
              'last_username' => '',
              'error' => array('action' => 'delete','entity' => 'category'),
          ));
        }

        $form = $this->createDeleteForm($category);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($category);
            $em->flush();
        }

        return $this->redirectToRoute('category_index');
    }

    /**
     * Creates a form to delete a category entity.
     *
     * @param Category $category The category entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Category $category)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('category_delete', array('id' => $category->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
