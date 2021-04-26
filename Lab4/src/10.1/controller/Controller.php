<?php
// define('PROJECT_ROOT_PATH', 'D:/20202/Web-Technology-Lab/Lab04-MVC/simple/mvc/');
include_once(PROJECT_ROOT_PATH."model/Model.php");

class Controller {
  public $model;

  public function __construct()
  {
    $this->model = new Model();
  }

  public function invoke() {
    if(!isset($_GET['book'])) {
      // no special book is requested, we'll show a list of all available books
      $books = $this->model->getBookList();
      include 'view/booklist.php';
    } else {
      // show the requested book
      $book = $this->model->getBook($_GET['book']);
      include 'view/viewbook.php';
    }
  }
}