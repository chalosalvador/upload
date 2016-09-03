<?php
// src/AppBundle/Controller/ProductController.php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Product;
use AppBundle\Form\ProductType;


class ProductController extends Controller
{
    /**
     * @Route("/product/new", name="app_product_new")
     */
    public function newAction(Request $request)
    {
        $product = new Product();
        $form = $this->createForm(new ProductType(), $product);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // // $file stores the uploaded PDF file
            // /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            // $file = $product->getBrochure();

            // // Generate a unique name for the file before saving it
            // $fileName = $this->get('app.brochure_uploader')->upload($file);

            // // Update the 'brochure' property to store the PDF file name
            // // instead of its contents
            // $product->setBrochure($fileName);


            // // $file stores the uploaded PDF file
            // /** @var Symfony\Component\HttpFoundation\File\UploadedFile $file */
            // $photo = $product->getPhoto();

            // $fileNamePhoto = $this->get('app.brochure_uploader')->upload($photo);


            // // Update the 'brochure' property to store the PDF file name
            // // instead of its contents
            // $product->setPhoto($fileNamePhoto);

            $em = $this->getDoctrine()->getManager();
            $em->persist($product);
            $em->flush();

            // ... persist the $product variable or any other work

            // return $this->redirect($this->generateUrl('product_list'));
        }

        $repository = $this->getDoctrine()
            ->getRepository('AppBundle:Product');

        $product_list = $repository->findAll();

        return $this->render('product/new.html.twig', array(
            'form' => $form->createView(),
            'products' => $product_list
        ));
    }
}