<?php
include_once("model/Book.php");
class Model{
	public function getBookList()
	{
		return array(
			"Jungle Book" => new Book("Jungle Book","R. Kipling","A classic book."),
			"Moonwalker" => new Book("Moonwalker","J. Walker",""),
			"PHP for Dummies"=>new Book("PHP for Dummies","Some Smart Guy","")
		);
	}
	public function getBook($title)
	{
		$allBooks=$this->getBookList();
		return $allBooks[$title];
	}
}
?>