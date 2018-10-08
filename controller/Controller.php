<?php
	class Controller{
		public function __construct(){
			echo "test";
			$this->var=new View();

			$this->var->render('home');

		}
	}

?>