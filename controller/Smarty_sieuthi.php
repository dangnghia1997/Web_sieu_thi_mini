<?php
include("smarty/libs/Smarty.class.php");
class Smarty_sieu_thi extends Smarty
{
	public function __construct()
	{
		parent::__construct();	
		$this->setTemplateDir("smarty/templates");
		$this->setCompileDir("smarty/templates_c");
	}	
}
?>