<?php 
include("models/m_san_pham.php");
class C_trang_chu{
	public function Hien_thi_trang_chu(){

		//model
		
		$m_san_pham = new M_san_pham();
		$danh_sach_san_pham_giam_gia = $m_san_pham->Hien_thi_san_pham_dang_giam_gia(0, 20);




		//view
		include("controllers/c_smarty.php");
		$smarty = new C_smarty();
		$smarty->SetTemplateDir("smarty/templates/trangchu");

		$title = "xin chao";
		$smarty->assign("title", $title);
		// hien thi danh sach san pham trong
		$smarty->assign("danh_sach_san_pham_giam_gia", $danh_sach_san_pham_giam_gia);


		$smarty->display("layout.tpl");
	}
}



?>
