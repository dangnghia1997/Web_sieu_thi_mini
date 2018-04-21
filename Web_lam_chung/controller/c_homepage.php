<?php
class C_homepage
{
	public function Hien_thi_trang_chu()
	{
		//model
		
		//view
		include("controller/Smarty_sieuthi.php");
		$smarty = new Smarty_sieu_thi();
		$view = "view/homepage/v_homepage.tpl";

		$smarty->assign("view", $view);

		$smarty->display("layout.tpl");
	}
}
?>