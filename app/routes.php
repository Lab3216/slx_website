<?php

/**
 * app/routes.php
 * Author: samimetoui@gmail.com
 */

$app_root = '/slx_website/web'; /*Set this value to empty string finally*/

// Home page
$app->get('/', function () use($app_root){
    require '../src/model.php';

    ob_start();             
    require '../views/home.php';
    $content = ob_get_clean(); 
    
    require '../views/template.php';
    $view = ob_get_clean(); 
    return $view;
});


// Page des produits
$app->get('/products', function () use($app_root){

    ob_start();             
    require '../views/products.php';
    $content = ob_get_clean(); 
    
    require '../views/template.php';
    $view = ob_get_clean(); 
    return $view;
});

// Page pour un produit particulier
$app->get('/product/{id}', function ($id) use($app_root){

    ob_start();             
    require '../views/single-product.php';
    $content = ob_get_clean(); 
    
    require '../views/template.php';
    $view = ob_get_clean(); 
    return $view;
});


// Page des services
$app->get('/services', function () use($app_root){

    ob_start();             
    require '../views/services.php';
    $content = ob_get_clean(); 
    
    require '../views/template.php';
    $view = ob_get_clean(); 
    return $view;
});