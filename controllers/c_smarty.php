<?php 
include("smarty/libs/Smarty.class.php");
class C_smarty extends Smarty{
	function __construct(){
		parent::__construct();
		$this->SetCompileDir("smarty/templates_c");
	}
}
?>