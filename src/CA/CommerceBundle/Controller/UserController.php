<?php

namespace CA\CommerceBundle\Controller;

use CA\CommerceBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * User controller.
 *
 */
class UserController extends Controller
{
    /**
     * Lists all user entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $users = $em->getRepository('CACommerceBundle:User')->findAll();

        return $this->render('user/index.html.twig', array(
            'users' => $users,
        ));
    }

    /**
     * Creates a new user entity.
     *
     */
    public function newAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm('CA\CommerceBundle\Form\UserType', $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $plainPassword = $user->getPassword();
            $encoder = $this->container->get('security.password_encoder');
            $encoded = $encoder->encodePassword($user, $plainPassword);
            $user->setPassword($encoded);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            return $this->redirectToRoute('user_show', array('id' => $user->getId()));
        }

        return $this->render('user/new.html.twig', array(
            'user' => $user,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a user entity.
     *
     */
    public function showAction(User $user)
    {
        $em = $this->getDoctrine()->getManager();
        $rates = $em->getRepository('CACommerceBundle:Rate')->findByUser($user);
        $bids = $em->getRepository('CACommerceBundle:Bid')->findByUser($user);

        $deleteForm = $this->createDeleteForm($user);

        return $this->render('user/show.html.twig', array(
            'user' => $user,
            'bids' => $bids,
            'rates' => $rates,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing user entity.
     *
     */
    public function editAction(Request $request, User $user)
    {
        if(!$this->getUser()){
          return $this->render('CACommerceBundle:Session:login.html.twig', array(
              'last_username' => '',
              'error' => array('action' => 'edit','entity' => 'user'),
          ));
        }

        $deleteForm = $this->createDeleteForm($user);
        $editForm = $this->createForm('CA\CommerceBundle\Form\UserType', $user);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('user_edit', array('id' => $user->getId()));
        }

        return $this->render('user/edit.html.twig', array(
            'user' => $user,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a user entity.
     *
     */
    public function deleteAction(Request $request, User $user)
    {
        if(!$this->getUser()){
          return $this->render('CACommerceBundle:Session:login.html.twig', array(
              'last_username' => '',
              'error' => array('action' => 'delete','entity' => 'user'),
          ));
        }

        $form = $this->createDeleteForm($user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($user);
            $em->flush();
        }

        return $this->redirectToRoute('user_index');
    }

    public function listProductsAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('CACommerceBundle:User')->find($id);

        if ($user === null) {
          throw new NotFoundHttpException("L'utilisateur n'existe pas.");
        }

        // On récupère la liste des produits mis en vente par l'user
        $listProducts = $em
          ->getRepository('CACommerceBundle:Product')
          ->findBy(array('user' => $user))
        ;

        return $this->render('user/listProducts.html.twig', array(
            'user' => $user,
            'listProducts' =>$listProducts
        ));
    }

    /**
     * Creates a form to delete a user entity.
     *
     * @param User $user The user entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(User $user)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('user_delete', array('id' => $user->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
