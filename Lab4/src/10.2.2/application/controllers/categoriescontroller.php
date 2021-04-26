<?php

class CategoriesController extends VanillaController {

    function beforeAction() {
        
    }

//    function view() {
//        $this->Category->id = 1;
//        $this->Category->showHasOne();
//        $this->Category->showHasMany();
//        $this->Category->showHMABTM();
//        $data = $this->Category->search();
//        print_r($data);
//    }
//    
//    function view($categoryId = null, $categoryName = null) {
//        $categories = performAction('products', 'findProducts', array($categoryId, $categoryName));
//    }

    function view($categoryId = null) {
        $this->Category->where('parent_id', $categoryId);
        $this->Category->showHasOne();
        $this->Category->showHasMany();
        $subcategories = $this->Category->search();

        $this->Category->id = $categoryId;
        $this->Category->showHasOne();
        $this->Category->showHasMany();
        $category = $this->Category->search();

        $this->set('subcategories', $subcategories);
        $this->set('category', $category);
    }

    function index() {
        $this->Category->orderBy('name', 'ASC');
        $this->Category->showHasOne();
        $this->Category->showHasMany();
        $this->Category->where('parent_id', '0');
        $categories = $this->Category->search();
        $this->set('categories', $categories);
    }

    function new() {
        // Nếu có $_POST['id'] thì là update, không có thì là add
        if(isset($_POST['id'])) {
           $this->Category->id = $_POST['id']; 
        }
        $this->Category->name = $_POST['name'];
        $this->Category->parent_id = $_POST['parent_id'];
        $this->Category->save();
    }

    function delete($categoryId) {
        // Tìm subcategories của category này
        $this->Category->where('parent_id', $categoryId);
        $children = $this->Category->search();
        // Tìm parent id của category này
        $this->Category->id = $categoryId;
        $category = $this->Category->search();
        $parentId = $category['Category']['parent_id'];
        // Sửa parent id của subcategories
        foreach($children as $child) {
            $this->Category->id = $child['Category']['id']; 
            $this->Category->parent_id = $parentId;
            $this->Category->save();
        }
        // Sửa category id của các product liên quan đến category bị xóa (hoặc xóa product)
        $products = performAction('products', 'findProducts', array($categoryId));
        foreach($products as $product) {
            $productId = $product['Product']['id'];
            $price = $product['Product']['price'];
            if($parentId == 0) {
                performAction('products', 'delete', array($productId));
            } else {
                performAction('products', 'updateCategoryId', array($productId, $parentId));
            } 
        }
        
        $this->Category->id = $categoryId;
        $this->Category->delete();
    }
    
    function viewall() {
//        $this->Category->orderBy('id', 'ASC');
        $this->Category->showHasOne();
        $this->Category->showHasMany();
        $categories = $this->Category->search();
        $this->set('categories', $categories);
        return $categories;
    }

    function afterAction() {
        
    }

}
