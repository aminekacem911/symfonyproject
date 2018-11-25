<?php

namespace AppBundle\Controller;

use AppBundle\Entity\produit;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\FormBuilder;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Form\Extension\Core\Type\FileType; 
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {
        
        //return $this->render('@News/inscri/index.html.twig');
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(produit::class);
        $produits = $repo->findAll();
        return $this->render('default/index.html.twig',['produits' => $produits]);
        //return $this->render('default/index.html.twig'); //update + add + delete
    }

    /**
     * @Route("/addprod/" , name="addprod")
     */
    public function add_ProdAction(Request $request)
    {
        //return $this->render('@News/inscri/ajouter.html.twig');
        $produit = new produit();
        $fb = $this->createFormBuilder($produit)
        ->add('name', TextType::class)
        ->add('image', FileType::class, array('label' => 'Photo (png, jpeg)')) 
        ->add('prix', TextType::class)
        ->add('category',ChoiceType::class, array(
            'choices' => array(
                'In Stock' => 'In Stock', 
                'Out of Stock' => 'Out of Stock'
                                )
                                                )
            )
        ->add('Valider', SubmitType::class);
        // générer le formulaire à partir du FormBuilder
        $form = $fb->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $image = $produit->getImage(); 
            $fileName  = md5(uniqid()).'.'.$image->guessExtension(); 
            $image->move($this->getParameter('photos_directory'), $fileName); 
            $produit->setImage($fileName);  
            //on hydrate notre object
            $produit = $form->getData();
            //et on le sauvegarde
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();

            $session = new Session();
            $session->getFlashBag()->add(
                'info',
                'produit bien Ajouté.'
            );
            return $this->redirectToRoute('index',array("id"=>$produit->getId()));
        }

        // Utiliser la méthode createView() pour que l'objet soit exploitable par la vue
        return $this->render('default/add.html.twig',['f' => $form->createView()] );
    }

    /**
     * @Route("/delprod/{id}" , name="delprod")
     */
    public function del_ProdAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(produit::class);
        // On récupère les données de l'abonné
        $produit = $repo->find($id);
        if($produit == null)
        {
        throw $this->createNotFoundException("404- produit $id inéxistant !");
        }
        $fb = $this->createFormBuilder($produit)
        ->add('Supprimer', SubmitType::class);
        // générer le formulaire à partir du FormBuilder
        $form = $fb->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $em->remove($produit);
            $em->flush();
            $session = new Session();
            $session->getFlashBag()->add(
                'info',
                'produit supprimé.'
            );
            return $this->redirectToRoute('index',array("name"=>$produit->getName(),
                                                                "id"=>$produit->getId()  ));
        }
        return $this->render(('default/del.html.twig'),['f' => $form->createView(),
                                                                "produit"=>$produit]);
    }

    /**
     * @Route("/updateprod/{id}" , name="updateprod")
     */

    public function inscri_modifierAction(Request $request, $id){

        $em = $this->getDoctrine()->getManager();
        $repo = $em->getRepository(produit::class);
        // On récupère les données de l'abonné
        $produit = $repo->find($id);
        // S'il n'exite pas on lance une exception (erreur 404)
        if($produit == null)
        {throw $this->createNotFoundException("404- produit $id inéxistant !");}
        $fb = $this->createFormBuilder($produit)
        ->add('name', TextType::class)
        ->add('image', FileType::class, array('label' => 'Photo (png, jpeg)')) 
        ->add('prix', TextType::class)
        ->add('category',TextType::class)
        ->add('Modifier', SubmitType::class);
        // générer le formulaire à partir du FormBuilder
        $form = $fb->getForm();

        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid())
        {
            $image = $produit->getImage(); 
            $fileName  = md5(uniqid()).'.'.$image->guessExtension(); 
            $image->move($this->getParameter('photos_directory'), $fileName); 
            $produit->setImage($fileName); 
            //on hydrate notre object
            $produit = $form->getData();
            //et on le sauvegarde
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();

            $session = new Session();
            $session->getFlashBag()->add(
                'info',
                'produit bien modifié.'
            );
            return $this->redirectToRoute('index',array("id"=>$produit->getId()));
        }

        // Utiliser la méthode createView() pour que l'objet soit exploitable par la vue
        return $this->render('default/updateprod.html.twig',['f' => $form->createView(),
                                                                "produit"=>$produit] );
    
    }





}
