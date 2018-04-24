<?php
include("database.php");

class M_category extends database
{
	//Đọc danh mục cha
	public function Doc_danh_muc_cha($vt=-1,$limit=-1)
	{
		$sql="SELECT * FROM category";
		if($vt>=0 && $limit>0)
		{
			$sql.=" LIMIT $vt,$limit";
		}
		$this->setQuery($sql);		
		return $this->loadAllRows();
	}
	
	//Đọc danh mục con theo cha(CategoryParentID)
	public function Doc_danh_muc_con_theo_CategoryParentID($CategoryParentID)
	{
		$sql="SELECT * FROM category ";
		$sql.="WHERE CategoryParentID=?";
		$this->setQuery($sql);
		$parram=array($CategoryParentID);
		return $this->loadAllRows($parram);
	}
}

//$cate=new M_category();
//$kq=$cate->Doc_danh_muc_cha(0,8);
//echo count($kq);
//echo "<pre>";
//print_r($kq);

/*$cate=new M_category();
$danh_muc_theo_ma_danh_muc_cha=$cate->Doc_danh_muc_con_theo_CategoryParentID(4);

echo count($danh_muc_theo_ma_danh_muc_cha);*/
?>