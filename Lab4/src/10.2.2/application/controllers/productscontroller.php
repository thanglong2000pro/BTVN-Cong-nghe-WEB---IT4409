<?php

class ProductsController extends VanillaController {

    function beforeAction() {
        
    }

    function view($id = null) {
        $this->Product->id = $id;
        $this->Product->showHasOne();
        $this->Product->showHMABTM();
        $product = $this->Product->search();
        $this->set('product', $product);
    }

    // pagination: phân trang
    function page($pageNumber = 1) {
        $this->Product->setPage($pageNumber);
        $this->Product->setLimit('3');
        $products = $this->Product->search();
        $totalPages = $this->Product->totalPages();
        $this->set('totalPages', $totalPages);
        $this->set('products', $products);
        $this->set('currentPageNumber', $pageNumber);
    }

    function delete($productId) {
        $this->Product->id = $productId;
        $this->Product->delete();
    }
    
    function updateCategoryId($productId, $categoryId) {
        $this->Product->id = $productId;
        $this->Product->category_id = $categoryId;
        $this->Product->save();
    }
    
    
    function findProducts($categoryId = null) {
        $this->Product->where('category_id', $categoryId);
        $this->Product->orderBy('name');
        return $this->Product->search();
    }

    function viewall() {
        $this->Product->showHasOne();
        $this->Product->showHMABTM();
        $products = $this->Product->search();
        $this->set('products', $products);
        return $products;
        
    }
    
    function afterAction() {
        
    }

}
