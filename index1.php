<?php


require_once 'bootstrap.php';
include_once 'src/Product.php';

$em =$entityManager;
//var_dump($em);


//$article = $em->find('Product', 2); //ok
//var_dump($article);die;



// $c = new Product();
$c = new Product;
$c->setName('Test Component 2');
$em->persist($c);
$data= $em->flush();
//ok

//query data
//$data = $em->getRepository('Product')->findBy(array('id' => 1)); //ok

var_dump($data);