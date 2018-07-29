<?php
class errorController extends controller{

	public function index(){

		$this->loadTemplate("400", array());
	}
}