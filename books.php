<?php

include_once "a_model.php"; // Hello
class Books_model extends Model{

	function __construct(){
		$this->_table = "books";
		parent::__construct();
	}

	function add_one($array){

	}
}