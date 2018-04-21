<?php
class C_products
{
	public function Hien_thi_san_pham()
	{
	//model
	
	//view
		include("controller/Smarty_sieuthi.php");
		$c_san_pham=new Smarty_sieu_thi();
		$view="view/san_pham/v_san_pham.tpl";
		$c_san_pham->assign("view",$view);
		$c_san_pham->display("san_pham.tpl");
	}
}
?>