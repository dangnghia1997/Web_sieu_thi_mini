<?php
class C_products
{
	public function Hien_thi_san_pham()
	{
	//model
	include("model/m_category.php");
		$M_category=new M_category();
		$danh_muc_cha=$M_category->Doc_danh_muc_cha(0,8);
		$array_con=array();
		foreach($danh_muc_cha as $d)
		{
				$array_con[]=$M_category->Doc_danh_muc_con_theo_CategoryParentID($d->CategoryID);
		}
		
	//view
		include("controller/Smarty_sieuthi.php");
		$smarty=new Smarty_sieu_thi();
		$view="view/san_pham/v_san_pham.tpl";
		$title="Sản phẩm";
		$smarty->assign("view",$view);
		$smarty->assign("title",$title);
		
		$smarty->assign("danh_muc_cha", $danh_muc_cha);
		$smarty->assign("array_con", $array_con);
		$smarty->display("products/san_pham.tpl");
	}
}
?>