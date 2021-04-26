<?php
// define('PROJECT_ROOT_PATH', 'D:/20202/Web-Technology-Lab/Lab04-MVC/simple/mvc/');
include_once(PROJECT_ROOT_PATH."model/Book.php");

class Model {
  public function getBookList() {
    // here goes some hardcoded values to simulate the database
    return array(
      "Jungle Book" => new Book("Jungle Book", "R. Kipling", "A classic book."),
      "Moonwalker" => new Book("Moonwalker", "J. Walker", ""),
      "PHP for Dummies" => new Book("PHP for Dummies", "Some Smart Guy", "")
    );
  }

  public function getBook($title) {
    // we use the previous function to get all the books and then we return the requested one.
    // in a real life scenario this will be done through a db select command 
    $allBooks = $this->getBookList();
    return $allBooks[$title];
  }
}