<?php
include_once("model/Model.php");
class Controller{
	public $model;
	public function __construct()
	{
		$this->model=new Model();
	}
	public function invoke()
	{
		if(!isset($_GET['book']))
		{
			$books=$this->model->getBookList();
			include 'view/booklist.php';
		}
		else{
			$book=$this->model->getBook($_GET['book']);
			echo '<p>'.$book->title.'</p>';
			include 'view/viewbook.php';
		}
	}
}
?>