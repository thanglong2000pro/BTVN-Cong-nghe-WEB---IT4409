<?php

class AdminController extends VanillaController {

    function beforeAction() {
        
    }
    
    function index() {
        $categories = performAction('categories', 'viewall', array());
        $this->set('categories', $categories);
        
//        $products = performAction('products', 'viewall', array());
//        $this->set('products', $products);
    }
    
    
    function categories_delete($categoryId) {
        performAction('categories', 'delete', array($categoryId));
    }
    
       
    function afterAction() {
        
    }

}
