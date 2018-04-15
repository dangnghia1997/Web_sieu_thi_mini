<?php 
// include("./smarty/libs/Smarty.class.php");
// $smarty = new Smarty();
// $smarty->setTemplateDir("smarty/templates/trangchu");
// $smarty->setCompileDir("smarty/templates_c");


include("controllers/c_trang_chu.php");
$c_trang_chu = new C_trang_chu();
$c_trang_chu->Hien_thi_trang_chu();

 ?>